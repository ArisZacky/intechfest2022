<?php

namespace App\Http\Controllers;

use App\Models\PnbwdcProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PnbwdcProjectController extends Controller
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
                $pnbwdcProjects = PnbwdcProjects::join('regis_users','pnbwdc_projects.regis_user_id','=','regis_users.id')->where('regis_users.nama_lengkap','LIKE','%'.$request->cari.'%')->orderBy('pnbdc_projects.id','desc')->get(['pnbdc_projects.*','regis_users.*']);
            }
            else{
                $pnbwdcProjects = PnbwdcProjects::join('regis_users','pnbwdc_projects.regis_user_id','=','regis_users.id')->orderBy('pnbwdc_projects.id','desc')->get(['pnbwdc_projects.*','regis_users.*']);
            }
            
            
            return view('admin.pnbwdcProjects.index',compact('pnbwdcProjects'),[
                "title" => "Projek PNBWDC",
                "judul" => "Daftar Project PNBWDC"
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
     * @param  \App\Models\PnbwdcProject  $pnbwdcProject
     * @return \Illuminate\Http\Response
     */
    public function show(PnbwdcProjects $pnbwdcProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PnbwdcProject  $pnbwdcProject
     * @return \Illuminate\Http\Response
     */
    public function edit(PnbwdcProjects $pnbwdcProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PnbwdcProject  $pnbwdcProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PnbwdcProjects $pnbwdcProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PnbwdcProject  $pnbwdcProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(PnbwdcProjects $pnbwdcProject)
    {
        
    }
}
