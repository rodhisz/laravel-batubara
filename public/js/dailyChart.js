$(document).ready(function() {

	// Inventory all site
    // Bar Chart
    
	Morris.Bar({
		element: 'inventory-bar-charts',
		data: [
			{ y: 'AGM', a: 34748110393},
			{ y: 'MAS', a: 27951410175},
			{ y: 'COMEX AGM', a: 9874627185},
			{ y: 'PMSS', a: 6592841154},
			{ y: 'TDM', a: 4714427379},
			{ y: 'MSJ', a: 4710055423},
			{ y: 'COMEX MSJ', a: 3888978429},
			{ y: 'COMEX PALARAN', a: 2249581912},
			{ y: 'KUP', a: 1040587873},
			{ y: 'BSSR 2', a: 982939331},
			{ y: 'SMD', a: 25700000},
			{ y: 'JKT', a: 10712000},
			{ y: 'BSSR 1', a: 850000},
			{ y: 'SBB', a: 0},
		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Total Income'],
		lineColors: ['#ff9b44'],
		lineWidth: '3px',
		barColors: ['#ff9b44'],
		resize: true,
		redraw: true
	});

	// Line Chart

	Morris.Line({
		element: 'inventory-line-charts',
		data: [
			{ y: '2021-12-24', a: 50},
			{ y: '2021-12-25', a: 75},
			{ y: '2021-12-26', a: 50,},
			{ y: '2021-12-27', a: 75,},
			{ y: '2021-12-28', a: 50,},
			{ y: '2021-12-29', a: 75,},
			{ y: '2021-12-30', a: 100,}
		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Total Sales'],
		lineColors: ['#ff9b44','#fc6075'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});

    // Daily Receipt Report (GR)
    // bar chart
    Morris.Bar({
		element: 'gr-bar-charts',
		data: [
			{ y: 'COMEX AGM', a: 34748110393},
			{ y: 'BSSR 1', a: 27951410175},
			{ y: 'BSSR 2', a: 9874627185},
			{ y: 'KUP', a: 6592841154},
			{ y: 'SBB', a: 4714427379},
			{ y: 'MSJ', a: 4710055423},
			{ y: 'JKT', a: 4710055423},
			{ y: 'COMEX MSJ', a: 3888978429},
			{ y: 'COMEX PALARAN', a: 2249581912},
			{ y: 'TDM', a: 1040587873},
			{ y: 'AGM', a: 982939331},
			{ y: 'SMD', a: 25700000},
			{ y: 'MAS', a: 10712000},
			{ y: 'PMSS', a: 850000},
		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Total Income'],
		lineColors: ['#ff9b44'],
		lineWidth: '3px',
		barColors: ['#ff9b44'],
		resize: true,
		redraw: true
	});

    // Daily Issue Report (GI)
    // Bar Chart
    Morris.Bar({
		element: 'gi-bar-charts',
		data: [
			{ y: 'COMEX AGM', a: 34748110393},
			{ y: 'BSSR 1', a: 27951410175},
			{ y: 'BSSR 2', a: 9874627185},
			{ y: 'KUP', a: 6592841154},
			{ y: 'SBB', a: 4714427379},
			{ y: 'MSJ', a: 4710055423},
			{ y: 'JKT', a: 4710055423},
			{ y: 'COMEX MSJ', a: 3888978429},
			{ y: 'COMEX PALARAN', a: 2249581912},
			{ y: 'TDM', a: 1040587873},
			{ y: 'AGM', a: 982939331},
			{ y: 'SMD', a: 25700000},
			{ y: 'MAS', a: 10712000},
			{ y: 'PMSS', a: 850000},
		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Total Income'],
		lineColors: ['#ff9b44'],
		lineWidth: '3px',
		barColors: ['#ff9b44'],
		resize: true,
		redraw: true
	});

    // Inventory Turn Over (ITO)
    // Bar Chart
    Morris.Bar({
		element: 'ito-bar-charts',
		data: [
			{ y: 'AGM', a: 34748110393},
			{ y: 'MAS', a: 27951410175},
			{ y: 'COMEX AGM', a: 9874627185},
			{ y: 'PMSS', a: 6592841154},
			{ y: 'TDM', a: 4714427379},
			{ y: 'MSJ', a: 4710055423},
			{ y: 'COMEX MSJ', a: 3888978429},
			{ y: 'COMEX PALARAN', a: 2249581912},
			{ y: 'KUP', a: 1040587873},
			{ y: 'BSSR 2', a: 982939331},
			{ y: 'SMD', a: 25700000},
			{ y: 'JKT', a: 10712000},
			{ y: 'BSSR 1', a: 850000},
			{ y: 'SBB', a: 0},
		],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['Total Income'],
		lineColors: ['#ff9b44'],
		lineWidth: '3px',
		barColors: ['#ff9b44'],
		resize: true,
		redraw: true
	});
});
