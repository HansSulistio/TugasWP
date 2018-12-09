<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;
class UserController extends Controller
{
    public function create()
    {
    	return view('');
    }

    public function store(Request $request){

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->profile_picture = '1';
        $temp = Carbon::parse($request->get('birthday'));
        $temp = $temp->format('Y-m-d');
        $user->birth_date = $temp;
        $user->role_id = 1;
        $user->gender_id = 1;
        $user->save();

        return redirect(url('/'));

    }
}
