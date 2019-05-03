<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Code;
use Response;
class CodeController extends Controller
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
        //
        $data=Code::all();
        return view('admin.code')->with('data',$data);
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
    $code=$request->code;
    if($codeInput = Code::where('code', $code)->first()){
      $codeInput->name=$request->name;
      $codeInput->email=$request->email;
      $codeInput->position=$request->position;
      $codeInput->save();

      $file= public_path(). "/worksheet.pdf";

   $headers = array(
             'Content-Type: application/pdf',
           );

   return Response::download($file, 'worksheet.pdf', $headers);
      // return redirect()->route('worksheet')->with('Success','The Download should start any minute now');
    }
    else{
      return redirect()->route('worksheet')->with('errors','Code is not valid');
    }
    }

    public function codeStore()
    {
      $codeInput = new Code();
      $random_string=CodeController::codeGenerate();
      $codeInput->code=$random_string;;
      $codeInput->save();
      return redirect()->route('code.index');
    }
    public function codeGenerate()
    {
      $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $input_length = strlen($input);
      $random_string = '';
      for($i = 0; $i < 10; $i++) {
      $random_character = $input[mt_rand(0, $input_length - 1)];
      $random_string .= $random_character;
      }
      $codeInput = Code::where('code', $random_string)->first();
      if ( !empty ( $codeInput ) ) {
        CodeController::codeGenerate();
      }
      else{
        return $random_string;
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
        //
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
