<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DataController extends Controller
{
    public function imagerouting (Request $request) {
        $fisiere = array('Folder1','Folder2','Folder3','Folder4','Folder5');
        $bazadedate = array('image-folder-1','image-folder-2','image-folder-3','image-folder-4','image-folder-5');
        $folder = $request->foldere;
        $db = $request->baze_de_date;
        //delete all data from table
        DB::table($bazadedate[$db-1])->truncate();
        //get file names in selected folder
        $files = [];
        $filesInFolder = \File::files('Public-Assets/'.$fisiere[$folder -1]);

        foreach($filesInFolder as $path)
        {
            $aux = pathinfo($path);
            $files[] = $aux['basename'];
        }

        //insert file names in database

        foreach($files as $entry)
        {
            $data=array("path"=>$fisiere[$folder -1].'/'.$entry);
            DB::table($bazadedate[$db - 1])->insert($data);
        }
        
        return redirect('alfa-geani/');
    }
}