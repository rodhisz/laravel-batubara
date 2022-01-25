<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data extends Model
{
    use HasFactory;

    protected $table = "data";

    protected $fillable = ['project_site','fogc','gens','mdle','sprt','tyre','grand_total'];

    public static function getData()
    {
        $record = DB::table('data')->select('id','project_site','fogc','gens','mdle','sprt','tyre','grand_total','created_at','update_at');
        return $record;
    }
}
