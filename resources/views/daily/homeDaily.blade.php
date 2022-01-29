@extends('layouts.dashboard')

@section('content')

<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "dashboard_sm");
$query = "SELECT * FROM data";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
    $chart_data .= "{ project_site:'".$row["project_site"]."', grand_total:".$row["grand_total"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
// return dd($chart_data)
?>

<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "dashboard_sm");
$query = "SELECT * FROM data_gi";
$result = mysqli_query($connect, $query);
$chart_dataGi = '';
while($row = mysqli_fetch_array($result))
{
    $chart_dataGi .= "{ gi_project_site:'".$row["gi_project_site"]."', gi_grand_total:".$row["gi_grand_total"]."}, ";
}
$chart_dataGi = substr($chart_dataGi, 0, -2);
// return dd($chart_data)
?>

<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "dashboard_sm");
$query = "SELECT * FROM data_gr";
$result = mysqli_query($connect, $query);
$chart_dataGr = '';
while($row = mysqli_fetch_array($result))
{
    $chart_dataGr .= "{ gr_project_site:'".$row["gr_project_site"]."', gr_grand_total:".$row["gr_grand_total"]."}, ";
}
$chart_datagr = substr($chart_dataGr, 0, -2);
// return dd($chart_data)
?>

<?php
$chart_grand = '';
foreach ($grand as $item) {
    $chart_grand .= "{ y: '".$item["created_at"]."', a: ".$item["grand_total"]."},";
}
// return dd($chart_grand);
?>

<div class="dashboard daily">
    <div class="container-fluid ps-0">

        {{-- Navbar --}}
        <nav class="mb-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class="left">
                    <h1>Daily Report</h1>
                    <h5>Supply Management</h5>
                </div>
                <div class="center">
                    <p class="mb-0">Periodic review:</p>
                    <div class="d-flex">
                        <p class="start">Date: <span>{{ $date }}
                            </span></p>
                        {{-- <p class="end">End Date: <span>20 desember 2021</span></p> --}}
                    </div>
                </div>

                <div class="form-group">
                    <form action="/date" method="post">
                        @csrf
                        @method('POST')
                        <input type='date' name='date' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <button type="submit">Go</button>
                    </form>
                </div>


                <div class="right">
                    <div class="d-flex align-items-center">
                        <div class="me-2">
                            <img src="{{url('img')}}/user.svg" width="45" alt="">
                        </div>
                        <div>
                            <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                            <p class="mb-0">admin account</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{-- EndNavbar --}}

        {{-- {{ number_format($past) }} --}}

        {{-- {{ $collect }} --}}

        @foreach ($grand as $item)
        {{ Carbon\Carbon::parse($item['created_at'])->format('d M Y') }}
        {{ number_format($item['grand_total']) }} <br>
        @endforeach

        {{-- @foreach ($past as $item)
        {{ $item->grand_total }}
        {{ Carbon\Carbon::parse($item['created_at'])->format('Y m d') }}
        @endforeach --}}

        <div class="ito mb-4">
            <h4>Inventory All Site</h4>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        <div class="card data-table card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Project All Site</th>
                                                <th>FOGC</th>
                                                <th>GENS</th>
                                                <th>MDLE</th>
                                                <th>SPRT</th>
                                                <th>TYRE</th>
                                                <th>Grand Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $row)
                                            <tr>
                                                <td>{{$row->project_site}}</td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->fogc)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gens)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->mdle)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->sprt)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->tyre)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->grand_total)}}
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr class="grand-total">
                                                <td>Grand Total</td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($totalfogc)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($totalgens)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($totalmdle)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($totalsprt)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($totaltyre)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($totalgrandtotal)}}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                    </div>
                </div>

            </div>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        {{-- <canvas id="ias" class="mb-2" width="300"></canvas> --}}
                        <div id="inventory-bar-charts" style="height: 100%"></div>

                    </div>
                </div>

            </div>

            <div class="d-flex gap-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        {{-- <canvas id="ias" class="mb-2" width="300"></canvas> --}}
                        <div id="inventory-line-charts" style="height: 100%"></div>

                    </div>
                </div>

            </div>

        </div>

        <div class="ito mb-4">
            <h4>Daily Receipt Report (GR)</h4>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        <div class="card data-table card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Row Labels</th>
                                                <th>FOGC</th>
                                                <th>GENS</th>
                                                <th>MDLE</th>
                                                <th>SPRT</th>
                                                <th>TYRE</th>
                                                <th>Grand Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_gr as $row)
                                            <tr>
                                                <td>{{$row->gr_project_site}}</td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gr_fogc)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gr_gens)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gr_mdle)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gr_sprt)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gr_tyre)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gr_grand_total)}}
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr class="grand-total">
                                                <td>Grand Total</td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gr_totalfogc)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gr_totalgens)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gr_totalmdle)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gr_totalsprt)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gr_totaltyre)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gr_totalgrandtotal)}}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                    </div>
                </div>

            </div>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        {{-- <canvas id="ias" class="mb-2" width="300"></canvas> --}}
                        <div id="gr-bar-charts" style="height: 100%"></div>

                    </div>
                </div>

            </div>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        <div class="card data-table card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h4>Amount Terbesar</h4>
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Site</th>
                                                <th>Pertama (1)</th>
                                                <th>Ke Dua (2)</th>
                                                <th>Ke Tiga (3)</th>
                                                <th>Ke Empat (4)</th>
                                                <th>Ke Lima (5)</th>
                                                <th>Ke Enam (6)</th>
                                                <th>Ke Tujuh (7)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($amount_terbesar as $row)
                                            <tr>
                                                <td>{{$row->amount_terbesar_site}}</td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->pertama)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->kedua)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->ketiga)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->keempat)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->kelima)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->keenam)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->ketujuh)}}</div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="ito mb-4">
            <h4>Daily Issue Report (GI)</h4>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        <div class="card data-table card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Row Labels</th>
                                                <th>FOGC</th>
                                                <th>GENS</th>
                                                <th>MDLE</th>
                                                <th>SPRT</th>
                                                <th>TYRE</th>
                                                <th>Grand Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_gi as $row)
                                            <tr>
                                                <td>{{$row->gi_project_site}}</td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gi_fogc)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gi_gens)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gi_mdle)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gi_sprt)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gi_tyre)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($row->gi_grand_total)}}
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr class="grand-total">
                                                <td>Grand Total</td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gi_totalfogc)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gi_totalgens)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gi_totalmdle)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gi_totalsprt)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gi_totaltyre)}}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">Rp {{number_format($gi_totalgrandtotal)}}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                    </div>
                </div>

            </div>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        {{-- <canvas id="ias" class="mb-2" width="300"></canvas> --}}
                        <div id="gi-bar-charts" style="height: 100%"></div>

                    </div>
                </div>

            </div>

        </div>

        <div class="ito mb-4">
            <h4>Inventory Turn Over (ITO) All Site</h4>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        <div class="card data-table card-table flex-fill mb-3" style="max-width: 400px;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="table-inventory text-center">
                                                <th>All Site</th>
                                                <th>20 Nov 2022</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SOH</td>
                                                @foreach ($data_ito_all->slice(0,1) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->ito_all_soh)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>USAGE</td>
                                                @foreach ($data_ito_all->slice(0,1) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->ito_all_usage)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>PLAN</td>
                                                @foreach ($data_ito_all->slice(0,1) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">
                                                        {{$row->ito_all_plan}} <p>Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>AKTUAL</td>
                                                @foreach ($data_ito_all->slice(0,1) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">
                                                        {{$row->ito_all_aktual}} <p>Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="grand-total">
                                                <td class="text-center">ACHIEVEMENT</td>
                                                @foreach ($data_ito_all->slice(0,1) as $row)
                                                <td class="text-center">{{number_format($row->ito_all_achievement*100,
                                                    2)}} %</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                        {{-- 1-4 --}}
                        <div class="card data-table card-table flex-fill mb-2">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SITE</th>
                                                <th>AGM</th>
                                                <th>SMD</th>
                                                <th>MAS</th>
                                                <th>PMSS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>SOH</td>
                                                @foreach ($data_ito->slice(0, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->soh)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>USAGE</td>
                                                @foreach ($data_ito->slice(0, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->usage)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>PLAN</td>
                                                @foreach ($data_ito->slice(0, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->plan}} <p>
                                                            Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>AKTUAL</td>
                                                @foreach ($data_ito->slice(0, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->aktual}}
                                                        <p>Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="grand-total">
                                                <td>ACHIEVMENT</td>
                                                @foreach ($data_ito->slice(0, 4) as $row)
                                                <td class="text-center">{{number_format($row->achievement*100, 2)}} %
                                                </td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                        {{-- 5-8 --}}
                        <div class="card data-table card-table flex-fill mb-2">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SITE</th>
                                                <th>COMEX AGM</th>
                                                <th>COMEX PALARAN</th>
                                                <th>COMEX MSJ</th>
                                                <th>JKT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SOH</td>
                                                @foreach ($data_ito->slice(4, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->soh)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>USAGE</td>
                                                @foreach ($data_ito->slice(4, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->usage)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>PLAN</td>
                                                @foreach ($data_ito->slice(4, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->plan}} <p>
                                                            Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>AKTUAL</td>
                                                @foreach ($data_ito->slice(4, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->aktual}}
                                                        <p>Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="grand-total">
                                                <td>ACHIEVMENT</td>
                                                @foreach ($data_ito->slice(4, 4) as $row)
                                                <td class="text-center">{{number_format($row->achievement*100, 2)}} %
                                                </td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                        {{-- 9-12 --}}
                        <div class="card data-table card-table flex-fill mb-2">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SITE</th>
                                                <th>MSJ</th>
                                                <th>TDM</th>
                                                <th>KUP</th>
                                                <th>BSSR 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SOH</td>
                                                @foreach ($data_ito->slice(8, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->soh)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>USAGE</td>
                                                @foreach ($data_ito->slice(8, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->usage)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>PLAN</td>
                                                @foreach ($data_ito->slice(8, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->plan}} <p>
                                                            Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>AKTUAL</td>
                                                @foreach ($data_ito->slice(8, 4) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->aktual}}
                                                        <p>Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="grand-total">
                                                <td>ACHIEVMENT</td>
                                                @foreach ($data_ito->slice(8, 4) as $row)
                                                <td class="text-center">{{number_format($row->achievement*100, 2)}} %
                                                </td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                        {{-- 13-14 --}}
                        <div class="card data-table card-table flex-fill mb-2" style="max-width: 600px">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>SITE</th>
                                                <th>BSSR 2</th>
                                                <th>SBB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SOH</td>
                                                @foreach ($data_ito->slice(12) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->soh)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>USAGE</td>
                                                @foreach ($data_ito->slice(12) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3">Rp
                                                        {{number_format($row->usage)}}</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <td>PLAN</td>
                                                @foreach ($data_ito->slice(12) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->plan}} <p>
                                                            Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>AKTUAL</td>
                                                @foreach ($data_ito->slice(12) as $row)
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">{{$row->aktual}}
                                                        <p>Hari</p>
                                                    </div>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="grand-total">
                                                <td>ACHIEVMENT</td>
                                                @foreach ($data_ito->slice(12) as $row)
                                                <td class="text-center">{{number_format($row->achievement*100, 2)}} %
                                                </td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>



                    </div>
                </div>

            </div>
            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        {{-- <canvas id="ias" class="mb-2" width="300"></canvas> --}}
                        <div id="ito-bar-charts" style="height: 100%"></div>

                    </div>
                </div>

            </div>
            <div class="d-flex gap-3 mb-3">

                <div class="card col-md-5 shadow-sm">
                    <div class="card-body p-4 align-items-center">

                        <div class="card data-table card-table flex-fill">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Rank</th>
                                                <th>Site</th>
                                                <th>Achievment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ito_terbesar as $row)
                                            <tr>
                                                <td class="text-center">{{$i++}}</td>
                                                <td class="text-center">{{$row->ito_site}}</td>
                                                <td class="text-center"><strong>{{number_format($row->achievement*100,
                                                        2)}} %</strong></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <a href="payments.html">View all</a>
                            </div> --}}
                        </div>

                    </div>
                </div>

                <div class="card col shadow-sm p-3">
                    <div class="card-body">
                        <h4 style="color: #747474">Perhatian!</h4>
                        <ul>
                            <li class="mb-2">Untuk project dengan Achievement ITO di atas 100 % diharapkan untuk
                                konsisten dalam menjaga performancenya.</li>
                            <li class="mb-2">Untuk project dengan Achievement ITO di bawah 100% harap segera mengejar
                                ketertinggalan dan fokus terhadap
                                peningkatan performance.</li>
                            <li class="mb-2">Untuk project yang berada di posisi 3 terbawah harap segera melakukan
                                langkah korektif.</li>
                        </ul>
                        <p>Ex : Melakukan eksekusi parts schedule & verifikasi permintaan pembelian.</p>
                    </div>
                </div>

            </div>

            <div class="d-flex gap-3 mb-3">

                <div class="card col shadow-sm p-3">
                    <div class="card-body">
                        <h4 style="color: #747474">Note :</h4>
                        <ul>
                            <li class="mb-2">Data nilai inventory di atas, belum termasuk kategori FUEL.</li>
                            <li class="mb-2">SOH di ambil dari update data harian.</li>
                            <li class="mb-2">USAGE di ambil dari Update data per bulan (1 Periode)</li>
                            <li class="mb-2">PLAN Standar dari Target Nasional</li>
                            <li class="mb-2">Aktual adalah hasil perhitungan SOH yang berbanding dengan USAGE</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/json2/20160511/json2.min.js"></script>

<script>
    Morris.Bar({
		element: 'inventory-bar-charts',
		data: [<?php echo $chart_data; ?>],
		xkey: 'project_site',
		ykeys: ['grand_total'],
		labels: ['Total Income'],
        dataLabels: 'true',
		lineColors: ['#ff9b44'],
		lineWidth: '3px',
		barColors: ['#ff9b44'],
        hideHover:'auto',
        resize:'true',
        parseTime: false,
        preUnits: 'Rp ',
    });
</script>

<script>
    Morris.Bar({
		element: 'gr-bar-charts',
		data: [<?php echo $chart_dataGr; ?>],
		xkey: 'gr_project_site',
		ykeys: ['gr_grand_total'],
		labels: ['Total Income'],
		lineColors: ['#ff9b44'],
		lineWidth: '3px',
		barColors: ['#ff9b44'],
		resize: true,
		redraw: true
    });
</script>

<script>
    Morris.Bar({
		element: 'gi-bar-charts',
		data: [<?php echo $chart_dataGi; ?>],
		xkey: 'gi_project_site',
		ykeys: ['gi_grand_total'],
		labels: ['Total Income'],
		lineColors: ['#ff9b44'],
		lineWidth: '3px',
		barColors: ['#ff9b44'],
		resize: true,
		redraw: true
    });
</script>

<script>
    Morris.Line({
		element: 'inventory-line-charts',
		data: [<?php echo $chart_grand; ?>],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Total Sales'],
		lineColors: ['#ff9b44','#fc6075'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});

</script>

<script type="text/javascript">
    $(function() {
            $('#datetimepicker').datetimepicker();
        });
</script>
@endsection
