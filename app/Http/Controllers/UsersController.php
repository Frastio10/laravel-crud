<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::paginate(10);


       return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->image->store('avatars','public');
        
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'age' => 'required|numeric',
            'born' => 'required|date',
            'address' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'born' => $request->born,
            'hobby' => $request->hobby,
            'address' => $request->address,
            'password' => $request->password,
            'image' => $path
        ]);


        

       

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $path = $request->image->store('avatars','public');

        $user = User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->born = $request->born;
        $user->hobby = $request->hobby;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->image = $path;

        $user->save();

         return redirect('/');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user =  User::findOrFail($user->id);
        $user->delete();

        return redirect('/');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $users = User::where('name', 'like','%'.$search.'%')
                    ->orWhere('email', 'like','%'.$search.'%')
                    ->orWhere('address', 'like','%'.$search.'%')
                    ->orWhere('address', 'like','%'.$search.'%')
                    ->orWhere('born', 'like','%'.$search.'%')
                    ->orWhere('hobby', 'like','%'.$search.'%')      
                    
                    ->get();

        return view('index',compact('users'));
    }
}
