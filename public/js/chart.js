const ctx = document.getElementById('sr-chart').getContext('2d');

const chart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
		datasets: [{
			label: 'Aktual',
			data: [12, 18, 22, 30, 10],
			borderWidth: 1,
			backgroundColor: 'rgb(253 110 107)'
		},
		{
			label: 'Plan',
			data: [12, 2, 13, 20, 13],
			borderWidth: 1,
			backgroundColor: '#FF9947'
		}
		],
	},
	options: {
		scales: {
		yAxes: [{
			ticks: {
			beginAtZero: true
			}
		}]
		},
	}
});
const trend = document.getElementById('trend-chart').getContext('2d');

const trendChart = new Chart(trend, {
	type: 'line',
	data: {
		labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
		datasets: [{
			label: 'Aktual',
			data: [12, 18, 22, 30, 10],
			borderWidth: 1,
			backgroundColor: 'rgb(253 110 107)'
		},
		{
			label: 'Plan',
			data: [12, 2, 13, 20, 13],
			borderWidth: 1,
			backgroundColor: '#FF9947'
		}
		],
	},
	options: {
		scales: {
		yAxes: [{
			ticks: {
			beginAtZero: true
			}
		}]
		},
	}
});
const ito = document.getElementById('ito-chart').getContext('2d');

const itoChart = new Chart(ito, {
	type: 'bar',
	data: {
		labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
		datasets: [{
			label: 'Aktual',
			data: [12, 18, 22, 30, 10],
			borderWidth: 1,
			backgroundColor: 'rgb(253 110 107)'
		},
		{
			label: 'Plan',
			data: [12, 2, 13, 20, 13],
			borderWidth: 1,
			backgroundColor: '#FF9947'
		}
		],
	},
	options: {
		scales: {
		yAxes: [{
			ticks: {
			beginAtZero: true
			}
		}]
		},
	}
});
const slow = document.getElementById('slow-chart').getContext('2d');

const slowChart = new Chart(slow, {
	type: 'doughnut',
	data: {
		labels: ['Over', 'Under', 'Balance'],
		datasets: [{
			label: 'Aktual',
			data: [12, 18, 22],
			borderWidth: 1,
			backgroundColor: ['#D0413E', '#FE7664', '#FF9947']
		}
		],
	},
	options: {
		scales: {
		yAxes: [{
			ticks: {
			beginAtZero: true
			}
		}]
		},
	}
});
const medium = document.getElementById('medium-chart').getContext('2d');

const mediumChart = new Chart(medium, {
	type: 'doughnut',
	data: {
		labels: ['Over', 'Under', 'Balance'],
		datasets: [{
			label: 'Aktual',
			data: [12, 18, 22],
			borderWidth: 1,
			backgroundColor: ['#D0413E', '#FE7664', '#FF9947']
		}
		],
	},
	options: {
		scales: {
		yAxes: [{
			ticks: {
			beginAtZero: true
			}
		}]
		},
	}
});
const fast = document.getElementById('fast-chart').getContext('2d');

const fastChart = new Chart(fast, {
	type: 'doughnut',
	data: {
		labels: ['Over', 'Under', 'Balance'],
		datasets: [{
			label: 'Aktual',
			data: [12, 18, 22],
			borderWidth: 1,
			backgroundColor: ['#D0413E', '#FE7664', '#FF9947']
		}
		],
	},
	width: 1,
	options: {
		scales: {
		yAxes: [{
			ticks: {
			beginAtZero: true
			}
		}]
		},
	}
});