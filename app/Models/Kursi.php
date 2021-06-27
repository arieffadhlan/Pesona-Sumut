<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kursi extends Model
{
    use HasFactory;
    protected $fillable = ['nomor_kursi'];

    // public function getNokur($value)
    // {
    //     $value = DB::table('kursi')->get();
    // }
}
