<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Response;
use App\Career;
use App\Vacancy;
class HomeController extends Controller
{
    public function index () {
        return view('user.index');
    }
    public function product() {
        return view('user.product');
    }
    public function service() {
        return view('user.service');
    }
    public function contact() {
        return view('user.contact');
    }
    public function detail() {
        return view('user.productdetail');
    }
    public function career() {
        $data=Career::all();
        return view('user.career')->with('data',$data);
    }
    public function vacancy($id)
    {
        $data=Career::find($id);
        return view('user.vacancy')->with('data',$data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required',
//            'phone' => 'required',
//            'message' => 'required'
//        ]);


        //Handle file upload
        if($request->hasFile('file')) {
            //get filename with extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('file')->guessClientExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //uploadfile
            $path = $request->file('file')->storeAs('public/application/', $fileNameToStore);
            //stores at storage/app/public/img
            $data=new Vacancy();
            $data->careers_id=$request->id;
            $data->name=$request->name;
            $data->email=$request->email;
            $data->phone=$request->phone;
            $data->file=$fileNameToStore;
            $data->save();
            return redirect()->route('career');
        }
        else{

            return redirect()->route('career');
        }
    }

}
