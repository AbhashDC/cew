<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo"store inhome controller";
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $storeData = new Response();
        $storeData->name = $request->input('name');
        $storeData->email = $request->input('email');
        $storeData->phone = $request->input('phone');
        $storeData->message = $request->input('message');
        $storeData->save();
       // return redirect()->back();
    }

}
