<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Blog::all();
        return view('admin.blog')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Handle file upload
        if($request->hasFile('image')) {
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('image')->guessClientExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //uploadimage
            $path = $request->file('image')->storeAs('public/img/blog/', $fileNameToStore);
            //stores at storage/app/public/img
            $data=new Blog();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('blog.index');
        }
        else{
            $fileNameToStore="noimage.jpg";
            $data=new Blog();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('blog.index');
        }
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
        $datas=Blog::find($id);
        return view('admin.blogedit')->with('data',$datas);
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
        $data= Blog::find($id);
        if($request->hasFile('image')) {
            //delete old image
            Storage::delete('public/img/blog/' . $data->image);
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('image')->guessClientExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //uploadimage
            $path = $request->file('image')->storeAs('public/img/blog/', $fileNameToStore);
            //stores at storage/app/public/img

            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();

            return redirect()->route('blog.index');
        }
        else{
            // $fileNameToStore="noimage.jpg";

            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            //$data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('blog.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Blog::find($id);
        Storage::delete('public/img/blog/' . $data->image);
        $data->delete();
        return redirect()->route('blog.index');
    }
}
