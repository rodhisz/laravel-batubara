<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataGr extends Model
{
    use HasFactory;

    protected $table = "data_gr";

    protected $fillable = ['gr_project_site','gr_fogc','gr_gens','gr_mdle','gr_sprt','gr_tyre','gr_grand_total'];

    public static function getData()
    {
        $record = DB::table('data_gr')->select('id','gr_project_site','gr_fogc','gr_gens','gr_mdle','gr_sprt','gr_tyre','gr_grand_total','created_at','update_at');
        return $record;
    }
}
