<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        return view('admin.product')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productform');

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
            $path = $request->file('image')->storeAs('public/img/product/', $fileNameToStore);
            //stores at storage/app/public/img
            $data=new Product();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('product.index');
        }
        else{
            $fileNameToStore="noimage.jpg";
            $data=new Product();
            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('product.index');
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
        $datas=Product::find($id);
        return view('admin.productedit')->with('data',$datas);
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
        $data= product::find($id);
        if($request->hasFile('image')) {
            //delete old image
            Storage::delete('public/img/product/' . $data->image);
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('image')->guessClientExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //uploadimage
            $path = $request->file('image')->storeAs('public/img/product/', $fileNameToStore);
            //stores at storage/app/public/img

            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            $data->image=$fileNameToStore;
            $data->save();

            return redirect()->route('product.index');
        }
        else{
           // $fileNameToStore="noimage.jpg";

            $data->name=$request->name;
            $data->short_description=$request->short;
            $data->description=$request->description;
            //$data->image=$fileNameToStore;
            $data->save();
            return redirect()->route('product.index');
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
        $data=Product::find($id);
        Storage::delete('public/img/product/' . $data->image);
        $data->delete();
        return redirect()->route('product.index');
    }
}
