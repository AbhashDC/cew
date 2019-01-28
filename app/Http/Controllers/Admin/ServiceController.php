<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service');
//        $data=Product::all();
//        return view('admin.product')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $filenameWithExt = $request->file('image')->getClientOriginalImage();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('image')->getOriginalClientExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //uploadimage
            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);
            //stores at storage/app/public/img
            $data=new Product();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->back();
        }
        else{
            $fileNameToStore="noimage.jpg";
            $data=new Product();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->back();
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
        //
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
        if($request->hasFile('image')) {
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalImage();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('image')->getOriginalClientExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //uploadimage
            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);
            //stores at storage/app/public/img
            $data=new Product();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->back();
        }
        else{
            // $fileNameToStore="noimage.jpg";
            $data= Product();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            //$data->image=$fileNameToStore;
            $data->save();
            return redirect()->back();
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
        //
    }
}
