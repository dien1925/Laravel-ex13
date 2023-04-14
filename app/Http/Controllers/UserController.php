<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function AllUser() {
        $allData = User::latest()->get();
        return view('user.all_user', compact('allData'));
    }

    // public function EditUser($id) {
    //     $users = User::findOrFail($id);
    //     return view('user.edit_user', compact('users'));
    // }

    public function DetailUser($id) {
        $userID = User::findOrFail($id);
        return view('user.detail_user', compact('userID'));
    }

    public function DeleteUser($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'SubCategory Delete Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Method
}
