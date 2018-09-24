<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Balance;
use Image;
use App\Profile;

class RegistrationController extends Controller
{
    public function create(){

        return view('registration.registration');
    }

    public function store(Request $request){

        //return request('name');
        //validate the form
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            /*'image' => 'required'*/
        ]);
        //crete and save the user

        // $user= User::create(request(['name','email','password']));

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        /*$user->role_name = request('role');*/
        $user->save();

        //sign them in
        // Setting Different Balance.
        auth()->login($user);
        $balanc = new Balance();
        $balanc->user_id = $user->id;
        $balanc->balance=0.0;
        $balanc->save();

        //creating profile part
        $profile = new Profile;
        $profile->user_id = $user->id;

        //for image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('upload/default/' .$filename);
            Image::make($image)->resize(200,200)->save($location);

            $profile->image=$filename;
        }

        $profile->save();

        $notification = [
            'message' => 'Registration is successful.!',
            'alert-type' => 'success'
        ];
        return redirect('/detail')->with($notification);
    }
}
