<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UserController extends Controller{
     
    
protected function downloadFile($src){
	if(is_file($src)){
		
		$file_name = basename($src).PHP_EOL;
		$size =filesize($src);
		header("Content-Type: $content_type");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: $size");
		readfile($src);
		return true;
	}else{
		return false;
	}
	}
	public function documentos(){
		if(!$this->downloadFile(app_path()."/documentos/doc.pdf")){
			return redirect()->back();
		}
	}
}