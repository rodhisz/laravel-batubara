@extends('layouts.dashboard')

@section('content')
    <div class="data dashboard">
        <div class="container-fluid ps-0">
            @include('layouts.partials.nav')
            <nav>
                <div class="nav nav-tabs d-flex flex-nowrap" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Inventory Turn Over</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Minmax</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Review Service Ratio</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                {{-- Inventory Turn Over --}}
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    <div class="ito mb-4">

                        <div class="d-flex gap-3 mb-3">
        
                            <div class="card col-md-6 shadow-sm">
                                <div class="card-body p-4">
        
                                    <h5 class="mb-2 me-5">Trend ITO</h5>
                                    {{-- <canvas id="ito-chart" class="mb-2" width="300"></canvas> --}}
        
                                </div>
                                
                            </div>
                            <div class="card col-md-6 shadow-sm">
                                <div class="card-body p-4">
        
                                    <h5 class="mb-2 me-5">Trend Inventory</h5>
                                    <canvas id="trend-chart" class="mb-2" width="300"></canvas>
        
                                </div>
                            </div>
        
                        </div>

                        {{-- table --}}
                        <div class="d-flex gap-2 overflow-auto">

                            <div class="col-md-3 d-flex">
                                <div class="card card-table flex-fill">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0 text-center">Week 1</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap custom-table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>MAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>SCH</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- USAGE --}}
                                                    <tr>
                                                        <td><strong>USAGE</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- ITO --}}
                                                    <tr>
                                                        <td><strong>ITO</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>PLAN</strong></td>
                                                        <td class="text-center">
                                                            <h2>45 Hari</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>ACHIEVMENT</strong></td>
                                                        <td class="text-center">
                                                            <h2>55.6%</h2>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3 d-flex">
                                <div class="card card-table flex-fill">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0 text-center">Week 2</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap custom-table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>MAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>SCH</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- USAGE --}}
                                                    <tr>
                                                        <td><strong>USAGE</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- ITO --}}
                                                    <tr>
                                                        <td><strong>ITO</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>PLAN</strong></td>
                                                        <td class="text-center">
                                                            <h2>45 Hari</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>ACHIEVMENT</strong></td>
                                                        <td class="text-center">
                                                            <h2>55.6%</h2>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3 d-flex">
                                <div class="card card-table flex-fill">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0 text-center">Week 3</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap custom-table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>MAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>SCH</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- USAGE --}}
                                                    <tr>
                                                        <td><strong>USAGE</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- ITO --}}
                                                    <tr>
                                                        <td><strong>ITO</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>PLAN</strong></td>
                                                        <td class="text-center">
                                                            <h2>45 Hari</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>ACHIEVMENT</strong></td>
                                                        <td class="text-center">
                                                            <h2>55.6%</h2>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3 d-flex">
                                <div class="card card-table flex-fill">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0 text-center">Week 4</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap custom-table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>MAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>SCH</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- USAGE --}}
                                                    <tr>
                                                        <td><strong>USAGE</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- ITO --}}
                                                    <tr>
                                                        <td><strong>ITO</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>PLAN</strong></td>
                                                        <td class="text-center">
                                                            <h2>45 Hari</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>ACHIEVMENT</strong></td>
                                                        <td class="text-center">
                                                            <h2>55.6%</h2>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3 d-flex">
                                <div class="card card-table flex-fill">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0 text-center">Week 5</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap custom-table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>MAS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>SCH</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- USAGE --}}
                                                    <tr>
                                                        <td><strong>USAGE</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    {{-- ITO --}}
                                                    <tr>
                                                        <td><strong>ITO</strong></td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 29.644.045.211</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>FOGC</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>GENS</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>MDLE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>SPRT</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul>
                                                                <li>TYRE</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <h2 class="d-flex gap-2">Rp<p> 800.000.023</p></h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>PLAN</strong></td>
                                                        <td class="text-center">
                                                            <h2>45 Hari</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><strong>ACHIEVMENT</strong></td>
                                                        <td class="text-center">
                                                            <h2>55.6%</h2>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>
                {{-- Minmax --}}
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    <div class="ito mb-4">
                        <div class="d-flex gap-2">
        
                            <div class="card col-md-4 shadow-sm">
                                <div class="card-body p-4">
        
                                    <h5 class="mb-2 me-5">Fast Moving</h5>
                                    <canvas id="fast-chart" width="300" height="250"></canvas>
        
                                </div>
                            </div>
                            <div class="card col-md-4 shadow-sm">
                                <div class="card-body p-4">
        
                                    <h5 class="mb-2 me-5">Medium Moving</h5>
                                    <canvas id="medium-chart" width="300" height="250"></canvas>
        
                                </div>
                            </div>
                            <div class="card col-md-4 shadow-sm">
                                <div class="card-body p-4">
                                    <h5 class="mb-2 me-5">Slow Moving</h5>
                                    <canvas id="slow-chart" width="300" height="250"></canvas>
        
                                </div>
                            </div>
                            
        
                        </div>
                    </div>

                </div>
                {{-- Review Service ratio --}}
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    
                    <div class="ito mb-4">
                        
                        <div class="d-flex gap-3">
        
                            <div class="card col shadow-sm">
                                <div class="d-flex gap-4 card-body p-4 align-items-center">
                                    <div style="width: 500px;">
                                        <h5 class="mb-2 me-5">Trend SR November</h5>
                                        {{-- <div id="sr-chart" class="mb-3"></div> --}}
                                        <canvas id="sr-chart" width="400" height="250"></canvas>
                                    </div>
        
                                    <div class="card data-table card-table flex-fill">
                                        <div class="card-body">
                                            <div class="table-responsive">	
                                                <table class="table custom-table table-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Week</th>
                                                            <th>Week 1</th>
                                                            <th>Week 2</th>
                                                            <th>Week 3</th>
                                                            <th>Week 4</th>
                                                            <th>Week 5</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Item Service Ratio</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                        <tr>
                                                            <td>Qty Service Ratio</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Time Service Ratio</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="plan-text">PLAN</td>
                                                            <td class="plan-text">80%</td>
                                                            <td class="plan-text">80%</td>
                                                            <td class="plan-text">80%</td>
                                                            <td class="plan-text">80%</td>
                                                            <td class="plan-text">80%</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="aktual-text">AKTUAL</td>
                                                            <td class="aktual-text">80%</td>
                                                            <td class="aktual-text">80%</td>
                                                            <td class="aktual-text">80%</td>
                                                            <td class="aktual-text">80%</td>
                                                            <td class="aktual-text">80%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Achivment</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
                                                            <td>80%</td>
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
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('js')}}/dataChart.js"></script>
@endsection
