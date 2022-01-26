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
        // dd(Carbon::now()->toArray());
        $i = 1;

        $date = Carbon::today()->toDateString();
        $currentDate = Carbon::now();
        // $week = Carbon::now()->subWeek()->toDateString();
        $week = $currentDate->subDays($currentDate->dayOfWeek - 1);

        $past = Data::whereBetween('created_at', [$week . " 00:00:00", $date . " 23:59:59"])->get();

        // $collect = collect($past);


        $data = Data::whereDate('created_at', $date)->get();
        $data_gr = DataGr::whereDate('created_at', $date)->get();
        $amount_terbesar = AmountTerbesar::whereDate('created_at', $date)->get();
        $data_gi = DataGi::whereDate('created_at', $date)->get();
        $data_ito = DataIto::whereDate('created_at', $date)->get();
        $data_ito_all = DataItoAll::whereDate('created_at', $date)->get();

        $ito_terbesar = DataIto::orderBy('achievement', 'desc')->get();

        $totalfogc = Data::whereDate('created_at', $date)->sum('fogc');
        $totalgens = Data::whereDate('created_at', $date)->sum('gens');
        $totalmdle = Data::whereDate('created_at', $date)->sum('mdle');
        $totalsprt = Data::whereDate('created_at', $date)->sum('sprt');
        $totaltyre = Data::whereDate('created_at', $date)->sum('tyre');
        $totalgrandtotal = Data::whereDate('created_at', $date)->sum('grand_total');

        $gr_totalfogc = DataGr::whereDate('created_at', $date)->sum('gr_fogc');
        $gr_totalgens = DataGr::whereDate('created_at', $date)->sum('gr_gens');
        $gr_totalmdle = DataGr::whereDate('created_at', $date)->sum('gr_mdle');
        $gr_totalsprt = DataGr::whereDate('created_at', $date)->sum('gr_sprt');
        $gr_totaltyre = DataGr::whereDate('created_at', $date)->sum('gr_tyre');
        $gr_totalgrandtotal = DataGr::whereDate('created_at', $date)->sum('gr_grand_total');

        $gi_totalfogc = DataGi::whereDate('created_at', $date)->sum('gi_fogc');
        $gi_totalgens = DataGi::whereDate('created_at', $date)->sum('gi_gens');
        $gi_totalmdle = DataGi::whereDate('created_at', $date)->sum('gi_mdle');
        $gi_totalsprt = DataGi::whereDate('created_at', $date)->sum('gi_sprt');
        $gi_totaltyre = DataGi::whereDate('created_at', $date)->sum('gi_tyre');
        $gi_totalgrandtotal = DataGi::whereDate('created_at', $date)->sum('gi_grand_total');

        // return dd();

        return view('daily/homeDaily', compact(
            'i',
            'date',
            'past',
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

        $date = $request->date;
        $data = Data::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->get();
        $data_gr = DataGr::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->get();
        $amount_terbesar = AmountTerbesar::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->get();
        $data_gi = DataGi::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->get();
        $data_ito = DataIto::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->get();
        $data_ito_all = DataItoAll::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->get();

        $ito_terbesar = DataIto::orderBy('achievement', 'desc')->get();

        $totalfogc = Data::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('fogc');
        $totalgens = Data::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gens');
        $totalmdle = Data::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('mdle');
        $totalsprt = Data::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('sprt');
        $totaltyre = Data::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('tyre');
        $totalgrandtotal = Data::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('grand_total');

        $gr_totalfogc = DataGr::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gr_fogc');
        $gr_totalgens = DataGr::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gr_gens');
        $gr_totalmdle = DataGr::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gr_mdle');
        $gr_totalsprt = DataGr::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gr_sprt');
        $gr_totaltyre = DataGr::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gr_tyre');
        $gr_totalgrandtotal = DataGr::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gr_grand_total');

        $gi_totalfogc = DataGi::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gi_fogc');
        $gi_totalgens = DataGi::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gi_gens');
        $gi_totalmdle = DataGi::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gi_mdle');
        $gi_totalsprt = DataGi::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gi_sprt');
        $gi_totaltyre = DataGi::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gi_tyre');
        $gi_totalgrandtotal = DataGi::whereBetween('created_at', [$date . " 00:00:00", $date . " 23:59:59"])->sum('gi_grand_total');



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
