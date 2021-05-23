<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelReader;

class GermanAnalysisController extends Controller
{
    public function index()
    {
        $i = -1;
        $sampleData = [];
        $rows = SimpleExcelReader::create(public_path() . '/csv/german_credit_data.csv')->getRows();

        foreach ($rows as $row) {

            $job = '';
            $age = '';

            switch ($row['Job']) {
                case 0:
                    $job = 'Unskilled and Non-Resident';
                    break;
                case 1:
                    $job = 'Unskilled and Resident';
                    break;
                case 2:
                    $job = 'Skilled';
                    break;
                case 3:
                    $job = 'Highly Skilled';
                    break;
                default:
            }

            if($row['Age'] >= 18 && $row['Age']<=35)
            {
                $age = 'Young';
            }elseif ($row['Age'] > 35){
                $age = 'Old';
            }

            $i++;
            $sampleData[] = array(
                'age' => $row['Age'] .' ['. $age . ']',
                'sex' => $row['Sex'],
                'job' => $job,
                'housing' => $row['Housing'],
                'saving_accounts' => $row['Saving accounts'],
                'checking_account' => $row['Checking account'],
                'credit_amount' => $row['Credit amount'],
                'duration' => $row['Duration'],
                'purpose' => $row['Purpose'],
                'risk' => $row['Risk']
            );
            if ($i == 1000) break;
        }
        $thNames = ['#', 'Age', 'Sex', 'Job', 'Housing', 'Saving accounts', 'Checking account', 'Credit amount', 'Duration', 'Purpose', 'Risk'];


        return view('german')->with(compact('sampleData', 'thNames'));
    }
}
