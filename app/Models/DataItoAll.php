<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataItoAll extends Model
{
    use HasFactory;

    protected $table = "data_ito_all";

    protected $fillable = ['ito_all_soh','ito_all_usage','ito_all_plan','ito_all_aktual','ito_all_achievement'];

    public static function getData()
    {
        $record = DB::table('data_ito_all')->select('id','ito_all_soh','ito_all_usage','ito_all_plan','ito_all_aktual','ito_all_achievement','created_at','update_at');
        return $record;
    }
}
