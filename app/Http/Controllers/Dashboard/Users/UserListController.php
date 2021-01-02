<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->select('users.*', 'user_type.name', 'user_type.name as uname', 'users.name as aname')
        ->join('user_type', 'users.user_type', '=', 'user_type.id')
        ->get();
        $userSum = count($users);
        return view('main.pages.users.user-list', compact('users', 'userSum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userType = DB::table('user_type')
        ->select('user_type.*')
        ->get();
        // dd($userType);
        return view('main.pages.users.user-show', compact('userType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'file' => 'required',
            'type' => 'required',
            'gender' => 'required',
        ]);


        $users = new User([
            'email' => $request->get('email'),
            'password' => Hash::make($request['password']),
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'user_type' => $request->get('type'),
            'gender' => $request->get('gender'),
        ]);

        if (request()->hasFile('file')) {

            $file = request()->file('file')->getClientOriginalName();
            request()->file('file')->storeAs('public/file' . '/' . $file, '');
            // $users->update(['file' => $file]);
            $users->file = $file;
        }
        // dd($request);
        $users->save();
        return redirect('dashboard/users')->with('success', 'User has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        // return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
         $users = DB::table('users')
                ->select('users.*', 'user_type.name', 'user_type.name as uname', 'users.name as aname')
                ->join('user_type', 'users.user_type', '=', 'user_type.id')
                ->first();
        return view('main.pages.users.user-edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'gender' => 'required',
            'user_type' => 'required',
            'file' => 'image|max:2048',
        ]);


        $users = User::find($id);
        if($request->hasFile('file')){
            $request->validate([
              'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('file')->store('public/file');
            $users->file = $path;
        }
        
        $users->name = $request->name;
        $users->password = Hash::make($request['password']);
        $users->email = $request->email;
        $users->contact = $request->contact;
        $users->user_type = $request->type;
        $users->gender = $request->gender;
        $users->save();

        return redirect('dashboard/users')->with('success', 'User Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('dashboard/users')->with('success', 'User deleted successfully');
    }
}
