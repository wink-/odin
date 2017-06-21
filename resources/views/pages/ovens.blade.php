@extends('layouts.app')
@section('css')
	<style>
			.hot{
				font-weight: 900;
				color: red;
			}
	</style>
@endsection
@section('content')
<div class="col-xs-3" style="height: 200px">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Current Temperatures</strong></caption>
            <thead>
                <tr>
                    <th>Name</th><th>Temperature</th><th>Reading Time</th>
                </tr>
            </thead>
            <tbody>

                {!! $grieve->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Grieve</td>
                    <td>{{$grieve->temperature}}</td>
                    <td>{{$grieve->created_at->toDayDateTimeString()}}</td>
                </tr>
                {!! $quincy->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Quincy</td>
                    <td>{{$quincy->temperature}}</td>
                    <td>{{$quincy->created_at->toDayDateTimeString()}}</td>
                </tr>
                {!! $lindberg->temperature < 150 ? '<tr>' : '<tr class="hot">'!!}
                    <td>Lindberg</td>
                    <td>{{$lindberg->temperature}}</td>
                    <td>{{$lindberg->created_at->toDayDateTimeString()}}</td>
                </tr>
            </tbody>   
        </table>
    </div>
    <div class="col-xs-9"></div>
</div>


	<div class="container-fluid canvas-holder" style="width:800px; height: 450px; background: ;">
	    <canvas id ="grieve"></canvas>
	</div>

	<div class="container-fluid canvas-holder" style="width:800px; height: 450px; background: ;">
	    <canvas id ="quincy"></canvas>
	</div>

	<div class="container-fluid canvas-holder" style="width:800px; height: 450px; background: ;">
	    <canvas id ="lindberg"></canvas>
	</div>

@endsection



@section('before-scripts-end')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> 
	<script>

	var grieve = document.getElementById("grieve").getContext("2d");
	var LineChartDemo = new Chart(grieve, {
		type: 'line',
			data: {
				labels: {!! json_encode($dates_grieve) !!},
				datasets: [{
					label: 'Temperature of Grieve for the Past 24 Hours',
					pointBorderWidth: 1,
					data: {!! json_encode($temperatures_grieve) !!}

				}]
			},
			options:{

				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Degrees Fahrenheit"
						},
						ticks:{
							beginAtZero:true,
							suggestedMax: 600
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
	var quincy = document.getElementById("quincy").getContext("2d");
	var LineChartDemo = new Chart(quincy, {
		type: 'line',
			data: {
				labels: {!! json_encode($dates_quincy) !!},
				datasets: [{
					label: 'Temperature of Quincy for the Past 24 Hours',
					data: {!! json_encode($temperatures_quincy) !!},
					pointBorderWidth: 0
				}]
			},
			options:{
				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Degrees Fahrenheit"
						},						
						ticks:{
							beginAtZero:true,
							suggestedMax: 600
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
	var lindberg = document.getElementById("lindberg").getContext("2d");
	var LineChartDemo = new Chart(lindberg, {
		type: 'line',
			data: {
				labels: {!! json_encode($dates_lindberg) !!},
				datasets: [{
					label: 'Temperature of Lindberg for the Past 24 Hours',
					data: {!! json_encode($temperatures_lindberg) !!},
					pointBorderWidth: 0
				}]
			},
			options:{
				scales:{
					yAxes:[{
						type: "linear",
						scaleLabel:{
							display:true,
							labelString: "Degrees Fahrenheit"
						},						
						ticks:{
							beginAtZero:true,
							suggestedMax: 600
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