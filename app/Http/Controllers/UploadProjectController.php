<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisUser;
use App\Models\PnbdcProjects;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        if (!PnbdcProjects::where(['regis_user_id' => $user->id])->exists() && $user->competition_id == 2) {
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
        if (!PnbdcProjects::where(['regis_user_id' => $user->id])->exists() && $user->competition_id == 2){
            // dd($_POST);
            $request->validate([
                'nama' => 'required',
                'project' => 'required',
                'submit' => 'required'
            ]);

            date_default_timezone_set('Asia/Singapore');
            $nama_project = Str::replace(' ', '_', $request->nama).date('_d_m_Y-H_i_s').".zip";

            $proses = PnbdcProjects::create([
                'regis_user_id' => $user->id,
                'project' => $nama_project
            ]);

            $request->file('project')->move(public_path().'/project_pnbdc/',$nama_project);
            

            if ($proses){
                return "<script>
                        alert('Upload Project Sukses');
                        location.href = '/peserta'
                        </script>";
            }
            else return "<script>
                        alert('Upload Project Gagal');
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
        $user = RegisUser::where(['user_id' => Auth::user()->id])->first();
        if (PnbdcProjects::where(['regis_user_id' => $user->id])->exists() && $user->competition_id == 2) {
            //dd($_POST);
            $request->validate([
                'nama' => 'required',
                'project' => 'required',
                'submit' => 'required'
            ]);

            date_default_timezone_set('Asia/Singapore');
            $nama_project = Str::replace(' ', '_', $request->nama).date('_d_m_Y-H_i_s').".zip";
            
            $proses = PnbdcProjects::query()->update([
                'regis_user_id' => $user->id,
                'project' => $nama_project
            ]);

            $request->file('project')->move(public_path().'/project_pnbdc/',$nama_project);
            // dd($proses);
            if ($proses) {
                return "<script>
                        alert('Upload Project sukses');
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
