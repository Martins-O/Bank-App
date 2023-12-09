<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function dashboard() {
        $registration = User::all();
        return view('registration.dashboard', ['registration' => $registration]);
    }

    public function userProfile()
    {
        $user = Auth::user();
        return view('user.viewprofile', ['user' => $user]);
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request){
        $user = $request->validate([
            'firstName' =>'required',
            'lastName' =>'required',
            'email' =>'required',
            'password' =>'nullable',
            'confirmPassword' =>'required',
            'address' =>'required',
            'phoneNumber' =>'required',
        ]);

        $user = User::create($request->all());

        $account = Account::create([
            'balance' => 0,
            'accountNumber' => Account::generateAccountNumber(),
            'userDetails' => $user->id,
        ]);

        $user->save();
        $account->save();
        return redirect(route('registration.dashboard'));
    }

    public function edit(User $user){
        return view('registration.editprofile', ['user' => $user]);
    }

    public function setting(){
        return view('registration.setting');
    }

    public function update(Request $request, User $user){
        $validator = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'gender' => 'required|string',
            'address' => 'required|string',
            'phoneNumber' => 'required|string',
            'age' => 'required|integer',
        ]);

        $user->update($request->all());

        return redirect(route('registration.userProfile'))->with('success', 'Product updated successfully');
    }

}
