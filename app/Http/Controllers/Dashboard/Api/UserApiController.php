<?php

namespace App\Http\Controllers\Dashboard\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
        public function index(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'file' => 'required',
            'type' => 'required',
        ]);


        $users = new User([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'type' => $request->get('type'),
        ]);

        if (request()->hasFile('file')) {

            $file = request()->file('file')->getClientOriginalName();
            request()->file('file')->storeAs('public/file' . '/' . $file, '');
            $users->update(['file' => $file]);
        }

        // dd($request);



        $users->save();
        return redirect('/dashboard/users')->with('success', 'User has been added successfully');
    }
}
