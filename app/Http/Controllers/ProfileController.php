<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.profile');
    }
    
    public function changeProfile(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required|email',
            'image'=> 'required',
        ]);

        $user = User::find(Auth::user()->id);

        $dataUpdate = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        
        if($request->has('image')){

            $user->image;
            $image_path = $user->image; //the value is:localhost/project/image/filename.format

            if(User::exists($image_path)){
                @unlink($image_path);
            }

            //Hapus image terlebih dahulu

            $image = $request->file('image');

            //Path upload
            $path = 'uploads/userpicture/';
            $image->move($path, $image->getClientOriginalName());

            //Masukkan path image ke array data
            $dataUpdate['image'] = $path.$image->getClientOriginalName();
        }

        User::where('id', Auth::user()->id)->update($dataUpdate);

        return redirect()->route('home');
    }
}
