<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PnbdcProjects extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $fillable = [
        'regis_user_id',
        'project'
    ];

    public function regisuser(){
        return $this->belongsTo(RegisUser::class);
    }
}
