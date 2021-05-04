@extends('layouts.front')

@section('title','График')

@section('content')

<div class="container-fluid">

		<div class="p-2 text-primary"><h1>График выполнения работ</h1></div>

		{{-- @php
			echo "<pre>";
				print_r($grafik_rabot);
			echo "</pre>";
			die;
		@endphp --}}

		<?php 
    	$grafik_years = [];
    	$date_plan_start_arr = [];
    	$date_plan_end_arr = [];
    	$min_date_start = 0;
    	$max_date_end = 0;
			foreach ($grafik_rabot as $obj) {
		    array_push($date_plan_start_arr, strtotime($obj['date_plan_start']));
		    array_push($date_plan_end_arr, strtotime($obj['date_plan_end']));
			}
			$min_date_start = min($date_plan_start_arr);
			$max_date_end = max($date_plan_end_arr);

			$min_year = date('Y', $min_date_start);
			$max_year = date('Y', $max_date_end);

			$year_amount = ($max_year - $min_year) + 1;

			array_push($grafik_years, $min_year);

			for ($n = 1; $n < $year_amount; $n++) {
				$min_year = $min_year + 1;
	    	array_push($grafik_years, $min_year);
			}
    ?>

		<table class="table table-responsive table-bordered grafik-table">
		  <thead>
		  	<tr>
		      <th colspan="<?php echo ((count($grafik_years)*12)+2) ?>" class="text-center">План организации строительства</th>
		    </tr>
		    <tr>
		      <th colspan="<?php echo ((count($grafik_years)*12)+2) ?>" class="text-center">
		      @foreach ($grafik_rabot as $obj)
		      {{ $obj['object_name'] }}, 
		      @endforeach
		    	</th>
		    </tr>
		    <tr>
		      <th colspan="<?php echo ((count($grafik_years)*12)+2) ?>" class="text-center">Вид работ (Строительство, Реконструкция и т.д.)</th>
		    </tr>
		    <tr>
		      <td rowspan="3">№</td>
		      <td rowspan="3">Наименование работ</td>
		      @foreach ($grafik_years as $year_item)
		      	<td colspan="12" class="text-center">{{ $year_item }}</td>
					@endforeach
				</tr>
				<tr>
					@for ($i = 0; $i < count($grafik_years); $i++)
			      <td colspan="3" class="text-center">I квартал</td>
			      <td colspan="3" class="text-center">II квартал</td>
			      <td colspan="3" class="text-center">III квартал</td>
			      <td colspan="3" class="text-center">IV квартал</td>
		      @endfor
		    </tr>
		    <tr>
					@for ($i = 0; $i < count($grafik_years); $i++)
			      <td class="text-center month-td">янв</td>
			      <td class="text-center month-td">фев</td>
			      <td class="text-center month-td">мар</td>
			      <td class="text-center month-td">апр</td>
			      <td class="text-center month-td">май</td>
			      <td class="text-center month-td">июн</td>
			      <td class="text-center month-td">июл</td>
			      <td class="text-center month-td">авг</td>
			      <td class="text-center month-td">сен</td>
			      <td class="text-center month-td">окт</td>
			      <td class="text-center month-td">ноя</td>
			      <td class="text-center month-td">дек</td>
		      @endfor
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($grafik_rabot as $obj)
		  		<tr>
			      <th colspan="2">{{ $obj['object_name'] }}</th>
			      @foreach ($grafik_years as $grafik_year)
			      <td id="obj_id_{{ $obj['id'] }}_01.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_02.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_03.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_04.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_05.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_06.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_07.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_08.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_09.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_10.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_11.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_12.{{ $grafik_year }}"></td>
			      @endforeach
		      </tr>
		  		@foreach ($obj['works'] as $rabota)
		  	  <tr>
			      <th rowspan="2">{{ $rabota['id'] }}</th>
			      <td rowspan="2">{{ $rabota['name'] }}</td>
			      @foreach ($grafik_years as $grafik_year)
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_01.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_02.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_03.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_04.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_05.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_06.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_07.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_08.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_09.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_10.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_11.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_plan_12.{{ $grafik_year }}"></td>
			      @endforeach
			    </tr>
			    <tr>
			      @foreach ($grafik_years as $grafik_year)
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_01.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_02.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_03.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_04.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_05.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_06.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_07.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_08.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_09.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_10.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_11.{{ $grafik_year }}"></td>
			      <td id="obj_id_{{ $obj['id'] }}_work_id_{{ $rabota['id'] }}_fact_12.{{ $grafik_year }}"></td>
			      @endforeach
			    </tr>
		    	@endforeach
		    @endforeach
		  </tbody>
		</table>

</div><!-- container -->

@endsection

<script type="text/javascript" src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>

<script type="text/javascript">

	console.log(moment().format());

  var grafik_rabot = <?php echo json_encode($grafik_rabot); ?>;
	console.log("grafik_rabot: ", grafik_rabot);



	// var date_plan_start_arr = <?php echo json_encode($date_plan_start_arr); ?>;
	// console.log("date_plan_start_arr: ", date_plan_start_arr);

	var min_date_start = <?php echo $min_date_start; ?>;
	console.log("min_date_start: ", min_date_start);

	var max_date_end = <?php echo $max_date_end; ?>;
	console.log("max_date_end: ", max_date_end);

	// var min_year = <?php echo $min_year; ?>;
	// console.log("min_year: ", min_year);

	// var max_year = <?php echo $max_year; ?>;
	// console.log("max_year: ", max_year);

	var grafik_years = <?php echo json_encode($grafik_years); ?>;
	console.log("grafik_years: ", grafik_years);

	var grafik_years_count = <?php echo count($grafik_years); ?>;
	console.log("grafik_years_count: ", grafik_years_count);

	// Количество месяцев между двумя датами
	function getTheNumberOfMonths(date_start, date_end) {
		var date1=new Date(date_start);
		var date2=new Date(date_end);
		var year1=date1.getFullYear();
		var year2=date2.getFullYear();
		var month1=date1.getMonth();
		console.log("month1", month1);
		var month2=date2.getMonth();
		console.log("month2", month2);
		if(month1===0){
		  month1++;
		  month2++;
		}
		var numberOfMonths;
		numberOfMonths = (year2 - year1) * 12 + (month2 - month1) + 1;

		return numberOfMonths;
	}

	// Создать массив из месяцев для любого графика
	function createArrOfMonths(date_start, date_end) {
		var arrOfMonths = [];
		var month_count = getTheNumberOfMonths(date_start, date_end);
		console.log("month_count: ", month_count);

		var start_year = new Date(date_start).getFullYear();
		var start_month = new Date(date_start).getMonth();
		var full_date = start_month+'.'+start_year;
		console.log("full_date: ", full_date);

		var startDate = moment(date_start);
		console.log("startDate", startDate);
		var stopDate = moment(date_end);
		console.log("stopDate", stopDate);

		while (startDate <= stopDate) {
	      arrOfMonths.push(moment(startDate).format('MM.YYYY'));
	      startDate = moment(startDate).add(1, 'M');
	  }
	  return arrOfMonths;
	  console.log("arrOfMonths: ", arrOfMonths);
	}

	// Создать график в таблице
	function createSchedule() {
		for(var i = 0; i < grafik_rabot.length; i++) {
			var obj = grafik_rabot[i];
			var obj_months = createArrOfMonths(obj.date_plan_start, obj.date_plan_end);
			console.log("obj_months: ", obj_months);

			for(var m = 0; m < obj_months.length; m++) {
				var table_cell = document.getElementById('obj_id_'+obj.id+'_'+obj_months[m]);
				table_cell.classList.add("obj-plan-color");
			}

			var obj_works = obj.works;

			for(var w = 0; w < obj_works.length; w++) {
				var work = obj_works[w];
				var work_plan_months = createArrOfMonths(work.date_plan_start, work.date_plan_end);
				var work_fact_months = createArrOfMonths(work.date_fact_start, work.date_fact_end);

				for(var pm = 0; pm < work_plan_months.length; pm++) {
					var plan_table_cell = document.getElementById('obj_id_'+obj.id+'_work_id_'+work.id+'_plan_'+work_plan_months[pm]);
					plan_table_cell.classList.add("work-plan-color");
				}

				for(var fm = 0; fm < work_fact_months.length; fm++) {
					var fact_table_cell = document.getElementById('obj_id_'+obj.id+'_work_id_'+work.id+'_fact_'+work_fact_months[fm]);
					fact_table_cell.classList.add("work-fact-color");
				}
			}
		}
	}

	document.onreadystatechange = function () {
		if (document.readyState == "complete") {
		 createSchedule();
		}
	}
	
</script>