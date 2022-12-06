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
        'username',
        'tieu_de',
        'noi_dung',
        'file',
        'lienlac',
        'report',
        'nguoi_dung_id'
    ];


}
