<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnArgument;
use function PHPUnit\Framework\throwException;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required',

        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            throw new AuthenticationException();
        }
        else {

         $user=auth()->user();
         return[
                'token' => auth()->user()->createToken('Mobile')->plainTextToken

         ];

        }
    }
    public function logout(Request $request): string
    {
        auth()->user()->tokens()->delete();

        return 'tokens are deleted';
    }


//    public function getUsers()
//    {
//        $user=auth()->user();
//        if ($user->tokenCan('all:users')) {
//
//            $user=User::all();
//            return response()->json([
//
//            'success' => true,
//            'data' => $user,
//            'status'=>200
//
//        ]);
//      }
//        return response()->json([
//
//            'success' => false,
//            'status' => 400
//
//        ]);
//    }

}
