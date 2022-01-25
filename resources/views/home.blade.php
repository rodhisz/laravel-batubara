@extends('layouts.dashboard')

@section('content')
    <div class="dashboard">
        <div class="container-fluid ps-0">
            @include('layouts.partials.nav')
            <div class="ito mb-4">
                <h4>Inventory Turn Over</h4>
                <div class="d-flex gap-3">

                    <div class="card col-md-6 shadow-sm">
                        <div class="card-body p-4">

							<h5 class="mb-2 me-5">Trend ITO</h5>
                            {{-- <canvas id="ito-chart" class="mb-2" width="300"></canvas> --}}

                            <div class="card data-table card-table flex-fill">
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Week</th>
													<th class="aktual-text">Aktual</th>
													<th class="plan-text">Plan</th>
													<th>Achivment</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Week 1</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
												</tr>
											<tbody>
												<tr>
													<td>Week 2</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
												</tr>
											<tbody>
												<tr>
													<td>Week 3</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
												</tr>
											<tbody>
												<tr>
													<td>Week 4</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
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
                    <div class="card col-md-6 shadow-sm">
                        <div class="card-body p-4">

							<h5 class="mb-2 me-5">Trend Inventory</h5>
                            <canvas id="trend-chart" class="mb-2" width="300"></canvas>

                            <div class="card data-table card-table flex-fill">
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Week</th>
													<th class="aktual-text">Aktual</th>
													<th class="plan-text">Plan</th>
													<th>Achivment</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Week 1</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
												</tr>
											<tbody>
												<tr>
													<td>Week 2</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
												</tr>
											<tbody>
												<tr>
													<td>Week 3</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
												</tr>
											<tbody>
												<tr>
													<td>Week 4</td>
													<td class="aktual-text">108 Hari</td>
													<td class="plan-text">45 Hari</td>
                                                    <td>-</td>
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

            <div class="ito mb-4">
                <h4>Minmax</h4>
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

            <div class="ito mb-4">
                <h4>Review Service Ratio</h4>
                <div class="d-flex gap-3">

                    <div class="card col shadow-sm">
                        <div class="d-flex gap-4 card-body p-4 align-items-center">
							<div>
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
@endsection
