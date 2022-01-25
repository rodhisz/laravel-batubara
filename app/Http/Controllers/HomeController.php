<?php

namespace App\Http\Controllers;

use App\Models\AmountTerbesar;
use App\Models\Data;
use App\Models\DataGi;
use App\Models\DataGr;
use App\Models\DataIto;
use App\Models\DataItoAll;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $i = 1;

        $date = Carbon::now()->toString();

        $data = Data::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_gr = DataGr::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $amount_terbesar = AmountTerbesar:: whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_gi = DataGi:: whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_ito = DataIto::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_ito_all = DataItoAll::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();

        $ito_terbesar = DataIto::orderBy('achievement', 'desc')->get();

        $totalfogc = DB::table('data')->sum('fogc');
        $totalgens = DB::table('data')->sum('gens');
        $totalmdle = DB::table('data')->sum('mdle');
        $totalsprt = DB::table('data')->sum('sprt');
        $totaltyre = DB::table('data')->sum('tyre');
        $totalgrandtotal = DB::table('data')->sum('grand_total');

        $gr_totalfogc = DB::table('data_gr')->sum('gr_fogc');
        $gr_totalgens = DB::table('data_gr')->sum('gr_gens');
        $gr_totalmdle = DB::table('data_gr')->sum('gr_mdle');
        $gr_totalsprt = DB::table('data_gr')->sum('gr_sprt');
        $gr_totaltyre = DB::table('data_gr')->sum('gr_tyre');
        $gr_totalgrandtotal = DB::table('data_gr')->sum('gr_grand_total');

        $gi_totalfogc = DB::table('data_gi')->sum('gi_fogc');
        $gi_totalgens = DB::table('data_gi')->sum('gi_gens');
        $gi_totalmdle = DB::table('data_gi')->sum('gi_mdle');
        $gi_totalsprt = DB::table('data_gi')->sum('gi_sprt');
        $gi_totaltyre = DB::table('data_gi')->sum('gi_tyre');
        $gi_totalgrandtotal = DB::table('data_gi')->sum('gi_grand_total');

        // return dd();

        return view('daily/homeDaily', compact(
            'i',
            // 'date',
            'data',
            'data_gr',
            'amount_terbesar',
            'data_gi',
            'data_ito',
            'data_ito_all',
            'ito_terbesar',
            'totalfogc',
            'totalgens',
            'totalmdle',
            'totalsprt',
            'totaltyre',
            'totalgrandtotal',
            'gr_totalfogc',
            'gr_totalgens',
            'gr_totalmdle',
            'gr_totalsprt',
            'gr_totaltyre',
            'gr_totalgrandtotal',
            'gi_totalfogc',
            'gi_totalgens',
            'gi_totalmdle',
            'gi_totalsprt',
            'gi_totaltyre',
            'gi_totalgrandtotal'
        ));
    }

    public function date(Request $request)
    {
        // dd(Data::where($request->date)->get());

        $i = 1;

        $date= $request->date;
        $data = Data::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_gr = DataGr::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $amount_terbesar = AmountTerbesar:: whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_gi = DataGi:: whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_ito = DataIto::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();
        $data_ito_all = DataItoAll::whereBetween('created_at', [$date. " 00:00:00", $date. " 23:59:59"])->get();

        $ito_terbesar = DataIto::orderBy('achievement', 'desc')->get();

        $totalfogc = DB::table('data')->sum('fogc');
        $totalgens = DB::table('data')->sum('gens');
        $totalmdle = DB::table('data')->sum('mdle');
        $totalsprt = DB::table('data')->sum('sprt');
        $totaltyre = DB::table('data')->sum('tyre');
        $totalgrandtotal = DB::table('data')->sum('grand_total');

        $gr_totalfogc = DB::table('data_gr')->sum('gr_fogc');
        $gr_totalgens = DB::table('data_gr')->sum('gr_gens');
        $gr_totalmdle = DB::table('data_gr')->sum('gr_mdle');
        $gr_totalsprt = DB::table('data_gr')->sum('gr_sprt');
        $gr_totaltyre = DB::table('data_gr')->sum('gr_tyre');
        $gr_totalgrandtotal = DB::table('data_gr')->sum('gr_grand_total');

        $gi_totalfogc = DB::table('data_gi')->sum('gi_fogc');
        $gi_totalgens = DB::table('data_gi')->sum('gi_gens');
        $gi_totalmdle = DB::table('data_gi')->sum('gi_mdle');
        $gi_totalsprt = DB::table('data_gi')->sum('gi_sprt');
        $gi_totaltyre = DB::table('data_gi')->sum('gi_tyre');
        $gi_totalgrandtotal = DB::table('data_gi')->sum('gi_grand_total');



        return view('daily/date', compact(
            'i',
            'date',
            'data',
            'data_gr',
            'amount_terbesar',
            'data_gi',
            'data_ito',
            'data_ito_all',
            'ito_terbesar',
            'totalfogc',
            'totalgens',
            'totalmdle',
            'totalsprt',
            'totaltyre',
            'totalgrandtotal',
            'gr_totalfogc',
            'gr_totalgens',
            'gr_totalmdle',
            'gr_totalsprt',
            'gr_totaltyre',
            'gr_totalgrandtotal',
            'gi_totalfogc',
            'gi_totalgens',
            'gi_totalmdle',
            'gi_totalsprt',
            'gi_totaltyre',
            'gi_totalgrandtotal'
        ));
    }
}
