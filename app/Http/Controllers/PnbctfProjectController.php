<?php

namespace App\Http\Controllers;

use App\Models\PnbctfProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PnbctfProjectController extends Controller
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
                $pnbctfProjects = PnbctfProjects::join('regis_users','pnbctf_projects.regis_user_id','=','regis_users.id')->where('regis_users.nama_team','LIKE','%'.$request->cari.'%')->orderBy('pnbctf_projects.id','desc')->get(['pnbctf_projects.*','regis_users.*']);
            }
            else{
                $pnbctfProjects = PnbctfProjects::join('regis_users','pnbctf_projects.regis_user_id','=','regis_users.id')->orderBy('pnbctf_projects.id','desc')->get(['pnbctf_projects.*','regis_users.*']);
            }
            
            
            return view('admin.pnbctfProjects.index',compact('pnbctfProjects'),[
                "title" => "Projek PNBCTF",
                "judul" => "Daftar Project PNBCTF"
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
     * @param  \App\Models\PnbctfProject  $pnbctfProject
     * @return \Illuminate\Http\Response
     */
    public function show(PnbctfProjects $pnbctfProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PnbctfProject  $pnbctfProject
     * @return \Illuminate\Http\Response
     */
    public function edit(PnbctfProjects $pnbctfProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PnbctfProject  $pnbctfProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PnbctfProjects $pnbctfProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PnbctfProject  $pnbctfProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(PnbctfProjects $pnbctfProject)
    {
        
    }
}
