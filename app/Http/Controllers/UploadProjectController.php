<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisUser;
use App\Models\PnbdcProjects;
use Illuminate\Support\Facades\Auth;

class UploadProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = RegisUser::where(['user_id' => Auth::user()->id])->first();
        if (!PnbdcProjects::where(['regis_user_id' => $user->id])->exists() && $user->competition_id == 3) {
            return view('peserta.form_uploadproject');
        }
        else return "<script>
                        location.href = '/peserta'
                    </script>";
        
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
        $user = RegisUser::where(['user_id' => Auth::user()->id])->first();
        if (!PnbdcProjects::where(['regis_user_id' => $user->id])->exists() && $user->competition_id == 3) {
            $request->validate([
                'link_figma' => 'required|url',
                'submit' => 'required'
            ]);

            $proses = PnbdcProjects::create([
                'regis_user_id' => $user->id,
                'link' => $request->link_figma
            ]);

            if ($proses) {
                return "<script>
                        alert('Upload Link sukses');
                        location.href = '/peserta'
                    </script>";
            }
            else return "<script>
                            alert('Upload Link Gagal');
                            location.href = '/peserta'
                        </script>";
        }
        else return "<script>
                        location.href = '/peserta'
                    </script>";
        
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
