<?php

namespace App\Http\Controllers;

use App\Models\RegisUser;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/peserta');
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
        $regisUser = RegisUser::where('user_id', Auth::user()->id);

        $request->validate([
            'bukti_pembayaran' => 'required|mimes:jpeg,jpg,png|max:5000',
            'submit' => 'required'
        ]);

        $extensi = $request->bukti_pembayaran->getClientOriginalExtension();
        date_default_timezone_set('Asia/Singapore');
        $nama_foto = Str::replace(' ', '_', 'bpem_'.$regisUser->first()->nama_lengkap).date('_d_m_Y-H_i_s.').$extensi;

        Payment::create([
            'regis_user_id' => $regisUser->first()->id,
            'bukti_pembayaran' => $nama_foto,
        ]);

        $request->file('bukti_pembayaran')->move(public_path().'/img_pembayaran/',$nama_foto);
        $id_pembayaran = Payment::where('regis_user_id', $regisUser->first()->id)->first()->id;
        $regisUser->update(['status_pembayaran' => 'sudah bayar','payment_id' => $id_pembayaran]);

        return redirect('/peserta');
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
