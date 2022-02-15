<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('users',compact('users'));
    }

    public function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('users');
    }
}
