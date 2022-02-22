<?php

namespace App\Http\Controllers;

use App\Models\Createblog;
use Error;
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


    public function copyblog($copypost){
        $blogpostcopy = Createblog::where('id',$copypost)->first();
        $copyblogpost = Createblog::create([
            'title' => $blogpostcopy->title,
            'discription' => $blogpostcopy->discription,
            'color' => $blogpostcopy->color,
            'code' => $blogpostcopy->code,
            'price' => $blogpostcopy->price,
            'size' => $blogpostcopy->size,
            'images' => $blogpostcopy->images,
        ]);
        if (empty($copyblogpost)) {
            return back()->with('ERROR', "Fill Kor age");
        }
        
        return redirect()->route('blog')->with('SUCCESS', "Valo Korsesis");
    }

    public function editblog($blogpost){
        $data['blogpostedit'] = Createblog::where('id', $blogpost)->first();
         return view('blogedit',$data);
    }


    public function updateblog(Request $request, $blogpost){
        $request->validate([
            'title' => 'required|max:255',
            'discription' => 'required',
            'color' => 'required',
            'code' => 'required',
            'price' => 'required',
            'size' => 'required',
            'images' => 'required',
        ]);
        $blogs =  Createblog::find($blogpost);

        $blogs->title = $request->title;
        $blogs->color =  $request->color;
        $blogs->code =  $request->code;
        $blogs->price =  $request->price;
        $blogs->size =  $request->size;
        $blogs->discription =  $request->discription;
        $blogs->images =  $request->file('images')->store('images/blog');
        $blogs->save();

            

        if (empty($blogs)) {
            return back()->with('ERROR', "Fill Kor age");
        }
        return redirect()->route('blog')->with('SUCCESS', "Valo Korsesis");

    }


    public function deleteblog($deleteblogs){
        $deteleblogpost = Createblog::where('id',$deleteblogs)->delete();
        if(empty($deteleblogpost)){
            return back()->with('Error',"Something went Wrong");
        }
        return back()->with('SUCCESS',"Delete Successfully");
    }
}
