<?php

$dir=dirname(__FILE__); 
$file=scandir($dir);
/*print_r($file);	*/


 function human_filesize($bytes, $decimals = 2) {
        $sz = 'BKMGTP';
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
      }

  foreach ($file as $key => $value) {
  	$infoFiles[]=$value.'|'.human_filesize(filesize($value)).'|'.filetype($value).'|'.date ("d/m/Y H:i ", filemtime($value)).PHP_EOL;
  }

  foreach ($infoFiles as $key => $value){
  	$arrayFiles = explode("|", $value);
     generateHTML($arrayFiles[0],$arrayFiles[1],$arrayFiles[2],$arrayFiles[3]);
  }

  function generateHTML($folderName,$size,$type,$modified){

  	if ($type === "dir") {
  	$classType="icon-folder";
  	$size='-';
 	 } else {
  	$classType="icon-doc-inv";
 	}




  	echo '<div class="row vignette">
              <p class="col-sm-3 '.$classType.' folderName">'.$folderName.'</p>
              <p class="col-sm-3">'.$size.'</p>
              <p class="col-sm-3">'.$type.'</p>
              <p class="col-sm-3">'.$modified.'</p>
              </div>';
  }


  /*print_r($infoFiles);*/




/*foreach ($file as $key => $value) {
	
}*/

?>


