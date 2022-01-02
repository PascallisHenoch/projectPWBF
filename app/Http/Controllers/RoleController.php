<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Storage;
use Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->role;
        if($role=='admin'){
            // $user = User::all();
            $user = User::where('role','!=','ortu')->get();
        }else if($role=='kader'){
            $user = User::where('role','ortu')->get();
        }
        
    	return view('role/index', [
            'title' => 'Daftar Role',
            'users' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role/tambah',["title"=>"Tambah User"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('ktp')->store('images');
        $file = $request->file('ktp');
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["ktp"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file->move($target_dir,$file->getClientOriginalName());
        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ktp' =>basename($_FILES["ktp"]["name"])
        ]);
        
        return redirect('/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('role/edit',[
            'title' => 'Edit Role',
            'user' => $user
        ]);
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
        $user=User::find($id);
        if(Storage::exists($user->ktp)){
            Storage::delete($user->ktp);
        }

        $path = $request->file('ktp')->store('images');
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'role' => $request->role,
            'ktp'=>$path
        ]);
        
        return redirect('/role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
         Storage::delete($user->ktp);
         return redirect('/role');
 
    }
}
