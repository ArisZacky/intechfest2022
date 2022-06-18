<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisUser extends Model
{
    use HasFactory;


    protected $guarded = ['id'];
    
    protected $fillable = [
        'user_id',
        'competition_id',
        'no_registrasi',
        'nama_lengkap',
        'nim_nis_nik',
        'nim_nis_nik',
        'foto_ktm_ks_ktp',
        'jurusan',
        'jenis_kelamin',
        'no_hp',
        'line_telegram',
        'email',
        'alamat',
        'provinsi',
        'instansi',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function competition(){
        return $this->belongsTo(Competition::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    
    public function pnbdcproject(){
        return $this->hasOne(PnbdcProjects::class);
    }
}
