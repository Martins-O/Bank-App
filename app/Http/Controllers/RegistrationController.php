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
//        dd($user);
        return view('registration.editProfile', ['user' => $user]);
    }

    public function setting(){
        return view('registration.setting');
    }

    public function update(Request $request, User $user){
        $request->validate([
            'firstName' => 'nullable',
            'lastName' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'age' => 'required|integer',
        ]);

        $user->update($request->all());
//        dd($user);

        return redirect(route('registration.userProfile'))->with('success', 'User details updated successfully');
    }

//    public function update(Request $request, User $user){
//        $validator = $request->validate([
//            'firstName' => 'required',
//            'lastName' => 'required',
//            'email' => 'required|email',
//            'gender' => 'required',
//            'address' => 'required',
//            'phoneNumber' => 'required',
//            'age' => 'required|integer',
//        ]);
//
//        // Use the $validator variable to check if validation passes
//        if ($validator) {
//            // Update the user with the validated data
//            $user->save($request->all());
//
//            return redirect(route('registration.userProfile'))->with('success', 'User updated successfully');
//        } else {
//            // Redirect back with validation errors if validation fails
//            return redirect()->back()->withErrors($validator);
//        }
//    }

//    public function update(Request $request){
//        $user = $request->validate([
//            'firstName' =>'required',
//            'lastName' =>'required',
//            'email' =>'required',
//            'address' =>'required',
//            'phoneNumber' =>'required',
//            'gender' =>'required',
//            'age' =>'required|integer',
//        ]);
//
//        $user = (new \App\Models\User)->update($request->all());
//        return redirect(route('registration.userProfile'))->with('success', 'Product updated successfully');
//    }


}
