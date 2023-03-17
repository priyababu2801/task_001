<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    
     /******************** LOGIN **************************/

 public function login(){

    return view('auth.login');
 }



    /****Admin login verified****/

    public function check(Request $request){

           $request->validate([
          
          "email" => "required|email",
          "password" => "required|min:5|max:15",

        ]);

    $userInfo = User::where('email','=',$request->email)->first();

    if(!$userInfo){
        return back()->with('fail','we do not recognize your email address');
    }
    else{
        //check password
            $data = $userInfo->password;
            $data1 = $request->password;
        //echo $data." ".$data1;

        if(Hash::check($data1, $data)){

            $request->session()->put('LoggedUser',$userInfo->id);
            return redirect('productView');

        }
        else{

            return back()->with('fail','Invalid password');

        }


    }

    }


    /****** Admin Logout ******/

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }


}//end controller
