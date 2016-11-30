<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Admin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['admins'] = Admin::all();
        return view('admin.admins.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password'=>'required|min:6|confirmed'
        ]);
        
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        Admin::create($input);
        
        Session::flash('success','Administrator saved successfully.');
        return redirect(route('admins.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['admin'] = $this->loadModel($id);
        return view('admin.admins.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['admin'] = $this->loadModel($id);
        return view('admin.admins.edit', $data);
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
        $admin = $this->loadModel($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password'=>'min:6|confirmed'
        ]);
         
        $input = $request->all();
        if(empty($input["password"])){
            unset($input["password"]);
        }else{
            $input["password"] = bcrypt($input["password"]);
        }

        $admin->update($input);

        Session::flash('success','Administrator updated successfully.');
        return redirect(route('admins.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = $this->loadModel($id);
        if(Auth::guard('admin')->user()->id === $admin->id){
            Session::flash('danger','Cannot delete logged Administrator');
            return redirect(route('admins.index'));
        }
        $admin->delete();
        Session::flash('success','Administrator deleted successfully.');
        return redirect(route('admins.index'));
    }
    
    private function loadModel($id){
        $model = Admin::find($id);

        if (empty($model)) {
          Session::flash('error','Administrator not found');

          return redirect(route('admins.index'));
        }
        return $model;
    }
}
