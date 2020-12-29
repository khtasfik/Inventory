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

        // $image = $request->file->store('file', 'public');

        // $imageName = time().'.'.$request->file->extension();  
     
        // $request->file->move(public_path('file'), $imageName);

        // dd($request);
        $users->save();
        // $image->save();
        // return $users;
        // $imageName->save();
        // return back()->with('success', 'User has been added successfully');
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
            'email' => 'required',
            'contact' => 'required',
            'gender' => 'required',
        ]);


        $users = User::find($id);
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->contact = $request->get('contact');
        $users->gender = $request->get('gender');

        $users->update();

        return redirect('dashboard/users')->with('success', 'User Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        $users->delete();
        return redirect('dashboard/users')->with('success', 'User deleted successfully');
    }
}
