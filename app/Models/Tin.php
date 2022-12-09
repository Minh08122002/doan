<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Tin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'table_tin';
    protected $fillable = [
        'loai_tin',
        'id',
        'user_name',
        'tieu_de',
        'thoi_gian',
        'noi_dung',
        'file',
        'lien_lac',
        'report',
        'nguoi_dung_id'
    ];


}
