<?php
//Zack Chambers
//This is my own work
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;
class LoginController extends Controller
{
    public function index(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $user = new UserModel($username, $password);
        $result = (new SecurityService)->login($user);
        if($result == true){
            return view('Login was Successful. Welcome ')
                ->with('model', $user);
        }else{
            return view('Login Failed. Check your Username and Password, something may be wrong')
                ->with('model', $user);
        }
    }
}
