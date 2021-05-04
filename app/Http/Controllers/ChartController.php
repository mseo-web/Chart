<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

  //       $grafik_rabot = array{
		// 	"object" => {
		// 		"key" => [
		// 				"Name" => Нименование действия
		// 				"date_plan_start" => 24.02.2021
		// 				"date_plan_end" => 24.02.2021
		// 				"date_fact_start" => 24.02.2021
		// 				"date_fact_end" => 24.02.2021
		// 					],
		// 		"key" => [
		// 				"Name" => Нименование действия
		// 				"date_plan_start" => 24.02.2021
		// 				"date_plan_end" => 24.02.2021
		// 				"date_fact_start" => 24.02.2021
		// 				"date_fact_end" => 24.02.2021
		// 					]
		// 		]
		// 	}
		// };

    	$json_api = '
    		{
					"data": [
						{
							"id": 1,
							"object_name": "Проект Пушкина-Тимирязева дом 6-8",
							"date_plan_start": "2013-02-01",
							"date_plan_end": "2016-12-31",
							"works": [
								{
									"id": 1,
									"name": "Земляные работы",
									"date_plan_start": "2013-02-01",
									"date_plan_end": "2014-06-30",
									"date_fact_start": "2013-02-01",
									"date_fact_end": "2014-06-30"
								},
								{
									"id": 2,
									"name": "Фундамент",
									"date_plan_start": "2014-05-01",
									"date_plan_end": "2015-09-30",
									"date_fact_start": "2014-05-01",
									"date_fact_end": "2015-09-30"
								},
								{
									"id": 3,
									"name": "Конструктив (подземная часть)",
									"date_plan_start": "2014-10-01",
									"date_plan_end": "2015-10-30",
									"date_fact_start": "2014-10-01",
									"date_fact_end": "2015-10-30"
								},
								{
									"id": 4,
									"name": "Конструктив (надземная часть)",
									"date_plan_start": "2014-11-01",
									"date_plan_end": "2016-03-30",
									"date_fact_start": "2014-11-01",
									"date_fact_end": "2016-03-30"
								},
								{
									"id": 5,
									"name": "Кровля жилого дома",
									"date_plan_start": "2016-02-01",
									"date_plan_end": "2016-04-30",
									"date_fact_start": "2016-02-01",
									"date_fact_end": "2016-04-30"
								},
								{
									"id": 6,
									"name": "Кровля стилобата",
									"date_plan_start": "2016-02-01",
									"date_plan_end": "2016-05-30",
									"date_fact_start": "2016-02-01",
									"date_fact_end": "2016-05-30"
								},
								{
									"id": 7,
									"name": "Фасады",
									"date_plan_start": "2016-03-01",
									"date_plan_end": "2016-07-30",
									"date_fact_start": "2016-03-01",
									"date_fact_end": "2016-07-30"
								},
								{
									"id": 8,
									"name": "Ограждающие конструкции, витражи, окна, двери",
									"date_plan_start": "2015-12-01",
									"date_plan_end": "2016-06-30",
									"date_fact_start": "2015-12-01",
									"date_fact_end": "2016-06-30"
								},
								{
									"id": 9,
									"name": "Внутренняя отделка",
									"date_plan_start": "2016-05-01",
									"date_plan_end": "2016-12-31",
									"date_fact_start": "2016-05-01",
									"date_fact_end": "2016-12-31"
								},
								{
									"id": 10,
									"name": "Внутренние монтажные работы (инженерные сети)",
									"date_plan_start": "2016-02-01",
									"date_plan_end": "2016-10-30",
									"date_fact_start": "2016-02-01",
									"date_fact_end": "2016-10-30"
								},
								{
									"id": 11,
									"name": "Наружные сети",
									"date_plan_start": "2016-01-01",
									"date_plan_end": "2016-08-30",
									"date_fact_start": "2016-01-01",
									"date_fact_end": "2016-08-30"
								},
								{
									"id": 12,
									"name": "Благоустройство, озеленение",
									"date_plan_start": "2016-06-01",
									"date_plan_end": "2016-10-30",
									"date_fact_start": "2016-06-01",
									"date_fact_end": "2016-10-30"
								}
							]
						},
						{
							"id": 2,
							"object_name": "Проект Пушкина-Тимирязева дом 6-7",
							"date_plan_start": "2014-04-01",
							"date_plan_end": "2016-12-31",
							"works": [
								{
									"id": 1,
									"name": "Земляные работы",
									"date_plan_start": "2014-04-01",
									"date_plan_end": "2014-08-30",
									"date_fact_start": "2014-04-01",
									"date_fact_end": "2014-08-30"
								},
								{
									"id": 2,
									"name": "Фундамент",
									"date_plan_start": "2014-08-01",
									"date_plan_end": "2014-10-30",
									"date_fact_start": "2014-08-01",
									"date_fact_end": "2014-10-30"
								},
								{
									"id": 3,
									"name": "Конструктив (подземная часть)",
									"date_plan_start": "2014-10-01",
									"date_plan_end": "2015-06-30",
									"date_fact_start": "2014-10-01",
									"date_fact_end": "2015-06-30"
								},
								{
									"id": 4,
									"name": "Конструктив (надземная часть)",
									"date_plan_start": "2015-06-01",
									"date_plan_end": "2016-05-30",
									"date_fact_start": "2015-06-01",
									"date_fact_end": "2016-05-30"
								},
								{
									"id": 5,
									"name": "Кровля жилого дома",
									"date_plan_start": "2016-04-01",
									"date_plan_end": "2016-06-30",
									"date_fact_start": "2016-04-01",
									"date_fact_end": "2016-06-30"
								},
								{
									"id": 6,
									"name": "Кровля стилобата",
									"date_plan_start": "2016-04-01",
									"date_plan_end": "2016-07-30",
									"date_fact_start": "2016-04-01",
									"date_fact_end": "2016-07-30"
								},
								{
									"id": 7,
									"name": "Фасады",
									"date_plan_start": "2016-05-01",
									"date_plan_end": "2016-09-30",
									"date_fact_start": "2016-05-01",
									"date_fact_end": "2016-09-30"
								},
								{
									"id": 8,
									"name": "Ограждающие конструкции, витражи, окна, двери",
									"date_plan_start": "2016-02-01",
									"date_plan_end": "2016-06-30",
									"date_fact_start": "2016-02-01",
									"date_fact_end": "2016-06-30"
								},
								{
									"id": 9,
									"name": "Внутренняя отделка",
									"date_plan_start": "2016-06-01",
									"date_plan_end": "2016-12-30",
									"date_fact_start": "2016-06-01",
									"date_fact_end": "2016-12-30"
								},
								{
									"id": 10,
									"name": "Внутренние монтажные работы (инженерные сети)",
									"date_plan_start": "2016-05-01",
									"date_plan_end": "2016-10-30",
									"date_fact_start": "2016-05-01",
									"date_fact_end": "2016-10-30"
								},
								{
									"id": 11,
									"name": "Наружные сети",
									"date_plan_start": "2015-11-01",
									"date_plan_end": "2016-08-30",
									"date_fact_start": "2015-11-01",
									"date_fact_end": "2016-08-30"
								},
								{
									"id": 12,
									"name": "Благоустройство, озеленение",
									"date_plan_start": "2016-07-01",
									"date_plan_end": "2016-09-30",
									"date_fact_start": "2016-07-01",
									"date_fact_end": "2016-09-30"
								},
								{
									"id": 13,
									"name": "Сдача объекта",
									"date_plan_start": "2016-08-01",
									"date_plan_end": "2016-12-31",
									"date_fact_start": "2016-08-01",
									"date_fact_end": "2016-12-31"
								}
							]
						}
					]
				}
    	';

    	$data = json_decode($json_api, true);

    	$grafik_rabot = $data['data'];

        return view('chart', compact('grafik_rabot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
