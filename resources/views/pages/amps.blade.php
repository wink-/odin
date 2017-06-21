@extends('layouts.app')

@section('content')

<div class="container-fluid canvas-holder" style="width:800px; height: 400px; background: ;">
    <canvas id ="hard_anodize"></canvas>
</div>

<div class="container-fluid canvas-holder" style="width:800px; height: 400px; background: ;">
    <canvas id ="anodize"></canvas>
</div>

<div class="container-fluid canvas-holder" style="width:800px; height: 400px; background: ;">
    <canvas id ="barrel1"></canvas>
</div>

<div class="container-fluid canvas-holder" style="width:800px; height: 400px; background: ;">
    <canvas id ="barrel2"></canvas>
</div>

<div class="container-fluid canvas-holder" style="width:800px; height: 400px; background: ;">
    <canvas id ="rack5"></canvas>
</div>

<div class="container-fluid canvas-holder" style="width:800px; height: 400px; background: ;">
    <canvas id ="rack6"></canvas>
</div>

@endsection



@section('before-scripts-end')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> 

	<script>

	var hard_anodize = document.getElementById("hard_anodize").getContext("2d");
	var LineChartDemo = new Chart(hard_anodize, {
		type: 'line',
			data: {
				labels: {!! json_encode($hard_anodize_dates) !!},
				datasets: [{
					label: 'Hard Anodize Amps for the Past 24 Hours',
					pointBorderWidth: 1,
					data: {!! json_encode($hard_anodize_amps) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Amps"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 1000
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});		
	</script>

	<script>

	var anodize = document.getElementById("anodize").getContext("2d");
	var LineChartDemo = new Chart(anodize, {
		type: 'line',
			data: {
				labels: {!! json_encode($anodize_dates) !!},
				datasets: [{
					label: 'Regular Anodize Amps for the Past 24 Hours',
					pointBorderWidth: 1,
					data: {!! json_encode($anodize_amps) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Amps"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 1000
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});		
	</script>

	<script>

	var barrel1 = document.getElementById("barrel1").getContext("2d");
	var LineChartDemo = new Chart(barrel1, {
		type: 'line',
			data: {
				labels: {!! json_encode($barrel1_dates) !!},
				datasets: [{
					label: 'Barrel Zinc 1 Amps for the Past 24 Hours',
					pointBorderWidth: 1,
					data: {!! json_encode($barrel1_amps) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Amps"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 700
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});	
	</script>

	<script>

	var barrel2 = document.getElementById("barrel2").getContext("2d");
	var LineChartDemo = new Chart(barrel2, {
		type: 'line',
			data: {
				labels: {!! json_encode($barrel2_dates) !!},
				datasets: [{
					label: 'Barrel Zinc 2 Amps for the Past 24 Hours',
					pointBorderWidth: 1,
					data: {!! json_encode($barrel2_amps) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Amps"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 700
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});	
	</script>

	<script>

	var rack5 = document.getElementById("rack5").getContext("2d");
	var LineChartDemo = new Chart(rack5, {
		type: 'line',
			data: {
				labels: {!! json_encode($rack5_dates) !!},
				datasets: [{
					label: 'Rack Zinc 5 Amps for the Past 24 Hours',
					pointBorderWidth: 1,
					data: {!! json_encode($rack5_amps) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Amps"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 500
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});	
	</script>

	<script>

	var rack5 = document.getElementById("rack6").getContext("2d");
	var LineChartDemo = new Chart(rack6, {
		type: 'line',
			data: {
				labels: {!! json_encode($rack6_dates) !!},
				datasets: [{
					label: 'Rack Zinc 6 Amps for the Past 24 Hours',
					pointBorderWidth: 1,
					data: {!! json_encode($rack6_amps) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Amps"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 500
						}
					}],
					xAxes:[{
						type: "time"

					}],				
				}
			}
	});	
	</script>	

@endsection