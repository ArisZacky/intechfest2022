<?php

namespace App\Http\Controllers;

use App\Models\RegisUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaUserController extends Controller
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
                $kelolaUsers = RegisUser::where('status_pembayaran','sudah bayar')->where('no_registrasi','LIKE','%'.$request->cari.'%')->orderBy('id','desc')->get();
            }
            else{
                $kelolaUsers = RegisUser::where('status_pembayaran','sudah bayar')->orderBy('id','desc')->get();
            }
            return view('admin.kelolaUsers.index',compact('kelolaUsers'),[
                "title" => "Pembayaran",
                "judul" => "Daftar Peserta Yang Sudah Bayar"
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
    public function show(RegisUser $kelolaUser)
    {
        if(Auth::user()->level == 'admin'){
            return view('admin.kelolaUsers.detail',compact('kelolaUser'),[
                "title" => "Pembayaran",
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisUser $kelolaUser)
    {
        // dd($_POST);
        $kelolaUser->status_pembayaran = $request->status_pembayaran;
        $kelolaUser->update();
        return "<script>
                    alert('Sukses menerima peserta!');
                    location.href = '/kelolaUsers'
                </script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisUser  $regisUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisUser $kelolaUser)
    {
        $kelolaUser->delete();
        $kelolaUser->user->delete();
        if($kelolaUser->payment == NULL){
            
        }
        else{
            $kelolaUser->payment->delete();
        }
        return "<script>
                    alert('Sukses Hapus Peserta!');
                    location.href = '/kelolaUsers'
                </script>";
    }
}
