<?php
/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 09/11/18
 * Time: 13:26
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LoginCtrl
{
    public function login_GET() {
        return view('/login');
    }

    public function login_POST() {
        $name =  DB::table('tuser')->count();
        return $name;
    }
}
