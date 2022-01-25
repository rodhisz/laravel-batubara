<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AmountTerbesar extends Model
{
    use HasFactory;

    protected $table = "amount_terbesar";

    protected $fillable = ['amount_terbesar_site','pertama','kedua','ketiga','keempat','kelima','keenam','ketujuh'];

    public static function getData()
    {
        $record = DB::table('amount_terbesar')->select('id','amount_terbesar_site','pertama','kedua','ketiga','keempat','kelima','keenam','ketujuh','created_at','update_at');
        return $record;
    }
}
