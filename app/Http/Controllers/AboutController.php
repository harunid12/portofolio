<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function about($username)
    {
        $about = About::where('username', $username)->first();
        $tanggal = Carbon::parse($about->tanggal_lahir)->locale('id')->isoFormat('LL');
        return view('about.view', ['about' => $about, 'tanggal' => $tanggal]);
    }

    public function aboutUpdate(Request $request, $username)
    {
        $about = About::where('username', $username)->first();

        // check file is uploaded
        if($request->hasFile('image')){
            // upload new image
            $image = $request->file('image');
            $image->storeAs('about',$image->hashName());

            // delete old image
            Storage::delete('about/'.$about->image);


            // update post with new image
            $about->update([
                'image' => $image->hashName(),
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)
            ]);
        }else{
            // update without file
            $about->update([
                'deskripsi' => $request->deskripsi,
                'alamat' => $request->alamat,
                'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)
            ]);
        }
        // dd($request->all());
        return redirect(Auth::user()->username.'/about')->with('toast_success', 'Update About Successfully!');
    }
}
