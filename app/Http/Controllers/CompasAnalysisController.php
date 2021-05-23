<?php

namespace App\Http\Controllers;
use Spatie\SimpleExcel\SimpleExcelReader;

use Illuminate\Http\Request;

class CompasAnalysisController extends Controller
{
    public function  index(){
        $i = -1;
        $sampleData = [];
        $rows = SimpleExcelReader::create( public_path(). '/csv/compasAnalysis.csv' )->getRows();
        foreach ($rows as $row){
            $i++;
            $sampleData[] = array(
                'name' => $row['name'],
                'sex' =>    $row['sex'],
                'age' =>    $row['age'],
                'race' =>    $row['race'],
                'charge_degree' =>    $row['c_charge_degree'],
                'charge_desc' =>    $row['c_charge_desc'],
                'two_year_recid' =>    $row['two_year_recid'],
            );
            if($i==1000) break;
        }
        $thNames = ['#','Name','Sex','Age','Race','Charge Degree','Charge Description','Two years Recidivism'];


        return view('compas')->with(compact('sampleData','thNames'));
    }
}
