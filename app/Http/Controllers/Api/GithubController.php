<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GithubController extends Controller
{
	  // Redirect to GitHub for authentication
	  public function redirectToGithub()
	  {
			 return Socialite::driver('github')->stateless()->redirect();
	  }
	  
	  // Handle GitHub callback
	  public function handleGithubCallback()
	  {
			 $githubUser = Socialite::driver('github')->stateless()->user();
			 
			 // Find or create the user
			 $user = User::firstOrCreate(
				  ['email' => $githubUser->getEmail()],
				  [
						'name' => $githubUser->getName(),
						'password' => bcrypt(Str::random(16)), // Random password
						'github_id' => $githubUser->getId(),
				  ]
			 );
			 
			 // Log in the user
			 Auth::login($user);
			 
			 // Generate a token for the user
			 $token = $user->createToken('auth_token')->plainTextToken;
			 
			 return response()->json([
				  'access_token' => $token,
				  'token_type' => 'Bearer',
				  'user' => $user,
			 ]);
	  }
}
