<?php

namespace App\Http\Controllers;

use App\Models\PnbdcProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PnbdcProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->level == 'admin'){
            if($request->has('cari')){
                $pnbdcProjects = PnbdcProjects::join('regis_users','pnbdc_projects.regis_user_id','=','regis_users.id')->where('regis_users.nama_lengkap','LIKE','%'.$request->cari.'%')->orderBy('pnbdc_projects.id','desc')->get(['pnbdc_projects.*','regis_users.*']);
            }
            else{
                $pnbdcProjects = PnbdcProjects::join('regis_users','pnbdc_projects.regis_user_id','=','regis_users.id')->orderBy('pnbdc_projects.id','desc')->get(['pnbdc_projects.*','regis_users.*']);
            }
            
            
            return view('admin.pnbdcProjects.index',compact('pnbdcProjects'),[
                "title" => "Projek PNBDC",
                "judul" => "Daftar Project PNBDC"
            ])
                ->with('i',(request()->input('page',1) - 1) * 5);
        }
        else{
            return redirect()->route('login');
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PnbdcProject  $pnbdcProject
     * @return \Illuminate\Http\Response
     */
    public function show(PnbdcProjects $pnbdcProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PnbdcProject  $pnbdcProject
     * @return \Illuminate\Http\Response
     */
    public function edit(PnbdcProjects $pnbdcProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PnbdcProject  $pnbdcProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PnbdcProjects $pnbdcProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PnbdcProject  $pnbdcProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(PnbdcProjects $pnbdcProject)
    {
        
    }
}
