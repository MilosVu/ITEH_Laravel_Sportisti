<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);
        if ($validator->fails()) {
            return redirect('/registracija');
            return response()->json($validator->errors());
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return redirect('/login');
        return response()->json(['data' => $user, 'acces_token' => $token, 'token_type' => 'Bearer',]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect('/login');
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return redirect('/pocetna');
        return response()->json(['message' => 'Dobrodosao ' . $user->name, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    // public function logout()
    // {
    //     // return redirect('/login');

    //     // return [
    //     //     'message' => 'You have successfully logger out and the token was successfully deleted'
    //     // ];
    //     // Auth::user()->tokens->each(function($token, $key) {
    //     //     $token->delete();
    //     // });

    //     // $user = auth('middleware')->user();
    //     // return response()->json($user);

    //     return response()->json(auth()->user());

    //     // return redirect('/login');
    //     // return [
    //     //     'message' => 'Uspesno izlogovan'
    //     // ];
    // }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginView()
    {

        return view('login');
    }

    public function registracijaView()
    {

        return view('registracija');
    }
}
