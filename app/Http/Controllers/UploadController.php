<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;


class UploadController extends Controller
{
    
    public function upload(){
        if(Input::hasFile('file')){


        
        echo 'Uploadeded <br />';
        $file=Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());
        echo'<img src="uploads/'. $file->getClientOriginalName().'"/>';
    }
}
protected function downloadFile($src){
    if(is_file($src)){
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $content_type = finfo_file($finfo, $src);
        finfo_close($finfo);
        $file_name = basename($src).PHP_EOL;
        $size = filesize($src);
        header("Content-Type: $content_type");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: $size");
        readfile($src);
        return true;
    } else{
        return false;
    }
}
}