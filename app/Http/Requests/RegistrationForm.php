<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Validate the registration form
        return [
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed'
            //
        ];
    }
    public function persist(){
        //Create the user
             $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
       //This object is the request ,so creating a user is able to be created in this way.
       //$user=User::create(
       //     $this->only(['name','email','password'
       //     ])
       // );


        //Sign them in
        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));
    }
}
