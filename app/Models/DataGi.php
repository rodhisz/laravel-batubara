<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataGi extends Model
{
    use HasFactory;

    protected $table = "data_gi";

    protected $fillable = ['gi_project_site','gi_fogc','gi_gens','gi_mdle','gi_sprt','gi_tyre','gi_grand_total'];

    public static function getData()
    {
        $record = DB::table('data_gi')->select('id','gi_project_site','gi_fogc','gi_gens','gi_mdle','gi_sprt','gi_tyre','gi_grand_total','created_at','update_at');
        return $record;
    }
}
