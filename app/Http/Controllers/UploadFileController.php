<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelReader;

class UploadFileController extends Controller
{
    public function uploadFile(Request $request)
    {

        $keys = [];
        if ($request->file('file')) {
            $file = $request->file('file');
            $file_extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

            if ($file_extension != 'csv') {
                return Redirect::back()->withErrors(['The file must be a csv!']);
            }

            $file = $request->file('file');
            $filename = $file->getClientOriginalName();

            Session::put('filename', $filename);
            // File upload location
            $location = 'files';

            $file->move($location, $filename);


            $rows = SimpleExcelReader::create($location .'/' . $filename)->getRows();

            if (!empty($rows)) {
                foreach ($rows as $row) {
                    $keys = array_keys($row);
                    break;

                }
            }


            Session::flash('message', 'Upload Successfully.');
            Session::flash('alert-class', 'alert-success');
        } else {
            Session::flash('message', 'File not uploaded.');
            Session::flash('alert-class', 'alert-danger');
        }

        return Redirect::back()->with(['keys' => $keys]);
    }

    public function postToDjango(Request $request)
    {
        $location = 'files';
        $rows = SimpleExcelReader::create($location .'/' . Session::get('filename'))->getRows();
        $keys = [];
        if (!empty($rows)) {
            foreach ($rows as $row) {
                $keys = array_keys($row);
                break;

            }
        }
        $dataToSend = [
            'filename' => Session::get('filename'),
            'target' => $request->get('TargetInput'),
            'sensitive' => $request->get('Sensitive'),
            'privileged' => $request->get('Privileged'),
            'unprivileged' => $request->get('Unprivileged'),
            'analysis' => $request->get('Analysis')
        ];

        $i = -1;
        $sampleData = [];

        foreach ($rows as $row){
            $sampleData[] = $row;
            $i++;
            if($i==1000) break;
        }
        foreach ($keys as $key)
        {
            $thNames[] = $key;
        }


        return view('custom')->with(compact('sampleData', 'thNames' , 'dataToSend'));

    }

    public function returnSensitive($column_name)
    {
        $location = 'files';
        $already_set = [];
        $attributes_to_show = [];
        $rows = SimpleExcelReader::create($location .'/' . Session::get('filename'))->getRows();
        foreach ($rows as $key => $row)
        {

                if(!in_array($row[$column_name],$already_set))
                {
                    $attributes_to_show[] = $row[$column_name];
                    $already_set[] = $row[$column_name];
                }

        }

        return response()->json($attributes_to_show);
    }

}
