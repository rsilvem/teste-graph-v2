<?php

namespace App\Http\Controllers;

use App\Charts\SampleChart;


class ChartController extends Controller
{
	
	public function geraGrafico() {
		
		$chart = new SampleChart();
		$chart->labels(['JANEIRO', 'FEVEREIRO', 'MARCO', 'ABRIL', "MAIO", "JUNHO", "JULHO", "AGOSTO", "SETEMBRO", "OUTUBRO", "NOVEMBRO", "DEZEMBRO"]);
		$chart->dataset('Plataforma', 'bar', [3092, 4050, 1820, 3874, 5920, 3029, 6387, 9281, 5839, 6758, 1723, 2233])->backgroundColor("#19B7A2");
		$chart->dataset('Integracao', 'bar', [2190, 4502, 3800, 2987, 6278, 8594, 7256, 1726, 5768, 8746, 1792, 8276])->backgroundColor("#3E08A9");
		//$chart->loaderColor("#00FFFF");
		$chart->height(300);
		$chart->width(300);
		$chart->minimalist(false);
		$chart->title("Cadastros realizados por canal de entrada");
		
		$chart2 = new SampleChart();
		$chart2->labels(["ATIVOS", "INATIVOS", "CANCELADOS"]);
		$chart2->dataset("Plataforma", 'pie', [50921,18728,293]);
		$chart2->height(300);
		$chart2->width(300);
		$chart2->title("Indice de atividade Plataforma");
		
		$chart3 = new SampleChart();
		$chart3->labels(["ATIVOS", "INATIVOS", "CANCELADOS"]);
		$chart3->dataset("Integracao", 'pie', [44935,8458,93]);
		$chart3->height(300);
		$chart3->width(300);
		$chart3->title("Indice de atividade Integracoes");
		
		return view('teste_grafico', ['chart' => $chart, 'chart2' => $chart2, 'chart3' => $chart3]);
	}
	
}