<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Illuminate\Http\Request;
use DateTime;

class UserListController extends Controller
{
   public function index()
   {
    $users = UserList::orderBy('id')->simplepaginate(10);
    return view('/UserList/index',compact('users'));
   }

   public function create()
   {
        return view('UserList.create');
   }
   public function store(Request $request)
   {
        $info = $request->validate([
            'FIO'=>'required',
            'email'=>'required|min:4',
            'number'=>'required|min:5'
        ]);
        $user= new UserList();
        $user->FIO=$info['FIO'];
        $user->email=$info['email'];
        $user->number=$info['number'];
        $user->age=$request->get('age');
        $user->created_at=new DateTime();
        $user->updated_at=new DateTime();

        $user->save();
        return redirect('/UserList');
   }
   public function show($id)
   {
    $temp=UserList::find($id);
    return view('UserList.show',compact('temp'));
   }
}
