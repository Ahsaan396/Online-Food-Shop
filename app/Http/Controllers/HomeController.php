<?php

namespace App\Http\Controllers;
use App\Models\review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function menu(){
        $data = DB::table('menu')->get();

        return view('menu', ['data' => $data]);
    }
    
    public function user_profile()
    {
        return view('user_profile');
    }
    public function user_home()
    {
        return view('user_home');
    }
    public function register()
    {
        return view('register');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }
    public function order()
    {
        return view('order');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
     public function msg()
    {
        return view('msg');
    }
    public function review($id)
    {
       
        $get_review=DB::table('menu')->where('id',$id)->select('product_name')->get();
        
        return view('review',['data'=>$get_review]);
    }
    public function storeReview(Request $request)
    {
        // $this->validate($request,[
        //     'review'=>'required'
        // ]);
        $post=new review;
        $post->review=$request->input('review');
        $post->save();
        return redirect('/menu')->with('success','Review Submitted');
        //return 123;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
