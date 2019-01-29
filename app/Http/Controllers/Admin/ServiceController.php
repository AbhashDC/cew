<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Service::all();
        return view('admin.service')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.serviceform');
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
            $path = $request->file('image')->storeAs('public/img/service/', $fileNameToStore);
            //stores at storage/app/public/img
            $data=new Service();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('service.index');
        }
        else{
            $fileNameToStore="noimage.jpg";
            $data=new Service();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('service.index');
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
        $datas=Service::find($id);
        return view('admin.serviceedit')->with('data',$datas);
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
        $data= Service::find($id);
        if($request->hasFile('image')) {
            //delete old image
            Storage::delete('public/img/service/' . $data->image);
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('image')->guessClientExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //uploadimage
            $path = $request->file('image')->storeAs('public/img/service/', $fileNameToStore);
            //stores at storage/app/public/img

            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();

            return redirect()->route('service.index');
        }
        else{
            // $fileNameToStore="noimage.jpg";

            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            //$data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('service.index');
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
        $data=Service::find($id);
        Storage::delete('public/img/service/' . $data->image);
        $data->delete();
        return redirect()->route('service.index');
    }
}
