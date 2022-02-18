<?php

namespace App\Http\Controllers;

use App\Models\Createblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $data['createblogs'] = Createblog::all();
        return view('blog',$data);
    }
    public function blogfrom(){
        return view('blogform');
    }
    public function blogstore(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'discription' => 'required',
            'color' => 'required',
            'code' => 'required',
            'price' => 'required',
            'size' => 'required',
            'images' => 'required',
        ]);
        $createblog = Createblog::create([
            'title' => $request->title,
            'discription' => $request->discription,
            'color' => $request->color,
            'code' => $request->code,
            'price' => $request->price,
            'size' => $request->size,
            'images' => $request->file('images')->store('images/blog'),
        ]);
        if (empty($createblog)) {
            return back()->with('ERROR', "Fill Kor age");
        }
        
        return redirect()->route('blog')->with('SUCCESS', "Valo Korsesis");
    }
}
