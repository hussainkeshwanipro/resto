<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RestoController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $data = DB::table('restos')->get();
        return view('list', compact('data'));
    }

    public function add(Request $request)
    {
        $data = $request->all();
        DB::table('restos')->insert([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'address'=>$data['address']
        ]);

        return redirect('list')->with('success', 'Resto Added Successfully');
    }

    public function delete($id)
    {
        DB::table('restos')->where('id', $id)->delete();
        return redirect('list')->with('success', 'Resto Deleted Successfully');
    }

    public function edit($id)
    {
         $data  = DB::table('restos')->where('id', $id)->get();
        return view('editResto', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        DB::table('restos')->where('id', $id)->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'address'=>$data['address']
        ]);

        return redirect('list')->with('success', 'Resto Updated Successfully');
    }


    public function register(Request $request)
    {
        $data = $request->all();
        DB::table('users')->insert([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'contact'=>$data['contact'],
            'password'=>Hash::make($data['password'])
        ]);

        return redirect('login');
        
    }

    public function login(Request $request)
    {
       $user = DB::table('users')->where('email', $request->email)->first();
       if(Hash::check($request->password, $user->password))
       {
        $request->session()->put('user', $user->name);
        return redirect('/');
       }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user'); 
        return redirect('login');
    }
  
        
   
}
