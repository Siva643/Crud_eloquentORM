<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;


class DetailController extends Controller
{
    public function index()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname'=>'required|regex:/^[A-Z]+$/i',
            'lastname'=>'required|regex:/^[A-Z]+$/i',
            'image'=>'required|image|mimes:jpg,png',
            'username'=>'required|regex:/^[A-Z]+$/i',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'email'=>'required|regex:/^.+@.+$/i|email|unique:details,email',
            'password'=>['required','string',
            Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(3)
        ],
      ]);
        
        if ($validator->fails()) {
            return view('create')->with('errors', $validator->errors());
        }
       $file=time() . '.' .request()->image->getClientOriginalExtension();
       request()->image->move(public_path('images'), $file);
       $user= new Detail;
       $user->firstname=$request->input('firstname');
       $user->lastname=$request->input('lastname');
       $user->username=$request->input('username');
       $user->image=$file;
       $user->email=$request->input('email');
       $user->password=Hash::make($request->input('password'));
       $user->address=$request->input('address');
       $user->city=$request->input('city');
       $user->state=$request->input('state');
       $user->zip=$request->input('zip');
      
       $user->save();
       return redirect('/read');
    }
    public function read(Request $request)
    {
       $reads=Detail::all();
       return view('read',compact('reads'));
    }
    public function edit($id)
    {
        $edit=Detail::find($id);
        return view('edit',['edit'=>$edit]);
    }
    public function update(Request $request,$id)
    {
        $file=time() . '.' .request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file);
        $user=Detail::find($id);
        $user->firstname=$request->input('firstname');
        $user->lastname=$request->input('lastname');
        $user->username=$request->input('username');
        $user->image=$file;
        $user->email=$request->input('email');
        $user->address=$request->input('address');
        $user->city=$request->input('city');
        $user->state=$request->input('state');
        $user->zip=$request->input('zip');
       
        $user->save();
        return redirect('/read');
    }
    public function destroy(string $id)
    {
        $destroy=Detail::find($id);
        $destroy->delete();
        return redirect('/read');
    }
    public function search(Request $request)
    {
        $search=$_GET['query'];
        $details=Detail::where('username','LIKE','%'.$search.'%')->get();
        return view('search',compact('details'));
    }
}
