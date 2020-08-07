<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        //$user = new User();
        //$user->name = 'srikantmpi';
        //$user->email ='srikant@100gmail.com';
        //$user->password=bcrypt(12345678);
        //$user->save();

        $user = User::all();

        //DB::insert('INSERT INTO `users`(`name`, `email`,`password`) 
        //VALUES (?,?,?)',['hii','hii@09gmail.com',1234568,
        //]);

        //DB::delete('DELETE FROM `users`');

        //$users = DB::select('select * from users');
        return $user;
        

    }
}
