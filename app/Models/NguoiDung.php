<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class NguoiDung extends Model
{
    use HasFactory;
    protected $table = 'table_nguoidung';
     protected $fillable = [
        'nguoi_dung_id',
        'username',
        'password',
        'email',
        'avatar',
        'name',
        'dia_chi',

    ];
    public function nguoidung(){
        return $this->belongsto(NguoiDung::class);
    }
}
