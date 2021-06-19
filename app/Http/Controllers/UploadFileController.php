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
        $data = [
            'filename' => Session::get('filename'),
            'target' => $request->get('TargetInput'),
            'privileged' => $request->get('Privileged'),
            'unprivileged' => $request->get('Unprivileged'),
            'analysis' => $request->get('Analysis')
        ];

        return Redirect::back();
    }

}
