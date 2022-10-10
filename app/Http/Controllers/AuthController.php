<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    function loginView()
    {
        return view("login");
    }

    function registerView()
    {
        return view("register");

    }


    function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return with 422 status

        } else {
            //validations are passed try login using laravel auth attemp
            if (\Auth::attempt($request->only(["email", "password"]))) {
                
                return response()->json(["status"=>true,"redirect_location"=>url("dashboard")]);
                
            } else {
                return response()->json([["Invalid credentials"]],422);
                
            }
        }
    }

    function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
                                        ], // required and number field validation
            'confirm_password' => 'required|same:password',

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else {
            //validations are passed, save new user in database
            $User = new User;
            $User->name = $request->name;
            $User->telephone = $request->telephone;
            $User->email = $request->email;
            $User->password = bcrypt($request->password);
            $User->save();
            
            return response()->json(["status"=>true,"msg"=>"You have successfully registered, Login to access your dashboard","redirect_location"=>url("login")]);  
           
        }
    }

   // show dashboard
    function dashboard()
    {
        return view("dashboard");
    }
   
    // logout method to clear the sesson of logged in user
    function logout()
    {
        \Auth::logout();
        return redirect("login")->with('success', 'Logout successfully');;
    }
}