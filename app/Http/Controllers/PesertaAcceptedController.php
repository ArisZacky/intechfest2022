<?php

namespace App\Http\Controllers;

use App\Models\RegisUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesertaAcceptedController extends Controller
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
                $pesertaAccepteds = RegisUser::where('status_pembayaran','diterima')->where('nama_lengkap','LIKE','%'.$request->cari.'%')->orderBy('id','desc')->get();
            }
            else{
                $pesertaAccepteds = RegisUser::where('status_pembayaran','diterima')->orderBy('id','desc')->get();
            }
            
            return view('admin.pesertaAccepteds.index',compact('pesertaAccepteds'),[
                "title" => "Peserta Diterima",
                "judul" => "Daftar Peserta Yang Sudah Diterima"
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
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function show(RegisUser $pesertaAccepted)
    {
        if(Auth::user()->level == 'admin'){
            return view('admin.pesertaAccepteds.detail',compact('pesertaAccepted'),[
                "title" => "Peserta Diterima",
                "judul" => "Detail Peserta"
            ]);
        }
        else{
            return redirect()->route('login');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisUser $regisUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisUser $regisUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisUser $pesertaAccepted)
    {
        $pesertaAccepted->delete();
        $pesertaAccepted->user->delete();
        if($pesertaAccepted->payment == NULL){
            
        }
        else{
            $pesertaAccepted->payment->delete();
        }
        return "<script>
                    alert('Sukses Hapus Peserta!');
                    location.href = '/pesertaAccepteds'
                </script>";
    }
}
