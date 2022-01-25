<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataIto extends Model
{
    use HasFactory;

    protected $table = "data_ito";

    protected $fillable = ['ito_site','soh','usage','plan','aktual','achievement'];

    public static function getData()
    {
        $record = DB::table('data_ito')->select('id','ito_site','soh','usage','plan','aktual','achievement','created_at','updated_at');
        return $record;
    }
}
