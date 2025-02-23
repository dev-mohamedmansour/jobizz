<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
	  public function register(Request $request)
	  {
			 $request->validate([
				  'name' => 'required|string|max:255',
				  'email' => 'required|string|email|max:255|unique:users',
				  'password' => 'required|string|min:8|confirmed',
			 ]);
			 
			 $user = User::create([
				  'name' => $request->name,
				  'email' => $request->email,
				  'password' => Hash::make($request->password),
			 ]);
			 
			 // Generate a PIN code for email verification or password reset
			 // 5-digit PIN
			 $pinCode = rand(1000, 9999);
			 // Store the PIN code in the user's database record (you can use Laravel's Eloquent ORM)'
			 $user->update(['pin_code' => $pinCode]);
			 
			 // Send the PIN code to the user's email (you can use Laravel Mail)
			  Mail::to($user->email)->send(new SendPinCodeMail($pinCode));
			 // Create a token for the user
			 $token = $user->createToken('auth_token')->plainTextToken;

			 return response()->json([
				  'access_token' => $token,
				  'token_type' => 'Bearer',
				  'message' => 'User registered successfully. Please check your email for the PIN code.',
			 ]);
	  }
	  
	   public function login(Request $request)
		{
		
		}
	  
	  public function forgotPassword(Request $request)
	  {
			 $request->validate([
				  'email' => 'required|email|exists:users,email',
			 ]);
			 
			 $user = User::where('email', $request->email)->first();
			 
			 if (!$user) {
					return response()->json(['message' => 'User not found'], 404);
			 }
			 
			 // Generate a PIN code
			 $pinCode = rand(10000, 99999); // 5-digit PIN
			 $user->update(['pin_code' => $pinCode]);
			 
			 // Send the PIN code to the user's email
			 // Mail::to($user->email)->send(new SendPinCodeMail($pinCode));
			 
			 return response()->json([
				  'message' => 'A PIN code has been sent to your email.',
			 ]);
	  }
	  public function resetPassword(Request $request)
	  {
			 $request->validate([
				  'email' => 'required|email|exists:users,email',
				  'pin_code' => 'required|string|size:5',
				  'password' => 'required|string|min:8|confirmed',
			 ]);
			 
			 $user = User::where('email', $request->email)->first();
			 
			 if (!$user) {
					return response()->json(['message' => 'User not found'], 404);
			 }
			 
			 // Verify the PIN code
			 if ($user->pin_code !== $request->pin_code) {
					return response()->json(['message' => 'Invalid PIN code'], 400);
			 }
			 
			 // Update the password and clear the PIN code
			 $user->update([
				  'password' => Hash::make($request->password),
				  'pin_code' => null, // Clear the PIN code after use
			 ]);
			 
			 return response()->json([
				  'message' => 'Password reset successfully.',
			 ]);
	  }
	  
	  
}
