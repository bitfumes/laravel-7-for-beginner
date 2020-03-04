<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'name'    => 'Elon',
            'email'   => 'elon@bitfumes.com',
            'password'=> 'password',
        ];
        // User::create($data);
        // $user           = new User();
        // $user->name     = 'sarthak';
        // $user->email    = 'sarthak@bitfumes.com';
        // $user->password = bcrypt('password');
        // $user->save();

        $user  = User::all();
        return $user;

        // User::where('id', 3)->delete();

        // User::where('id', 4)->update(['name' => 'bitfumesssssssss']);

        // DB::insert('insert into users (name,email,password) values (?,?,?)', [
        //     'sarthak', 'sarthak@bitfumes.com', 'password',
        // ]);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::update('update users set name = ? where id = 2', ['bitfumes']);

        // DB::delete('delete from users where id = 2');

        // $users = DB::select('select * from users');
        // return $users;

        return view('home');
    }
}
