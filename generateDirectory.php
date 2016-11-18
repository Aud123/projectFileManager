<?php

$dir=dirname(__FILE__);




if(isset($_REQUEST['type'])){
  $dirtype = $_REQUEST['type'];
  if ($dirtype==="dir") {

  	$dir .= '/..';
  	/*$dir=;*/
  	
  }

} else {
	//include function for fil download
	/*$file=$_REQUEST['file'];*/
}

explorerFile($dir);
function explorerFile($dir){
  $files = array_diff(scandir($dir),array('..', '.')); // tableau des fichiers
  foreach ($files as $key => $value) {
    $infoFiles[]=$value.'|'.human_filesize(filesize($value)).'|'.filetype($value).'|'.date ("d/m/Y H:i ", filemtime($value)).PHP_EOL;
  }// On liste les informations des fichiers ou dossiers dans dir
  foreach ($infoFiles as $key => $value){
    $arrayFiles = explode("|", $value);
    generateHTML($arrayFiles[0],$arrayFiles[1],$arrayFiles[2],$arrayFiles[3]);
  }//génére les balises html qui vont bien en fonction des infos des fichiers et dossiers
}
/*print_r($file);	*/

 function human_filesize($bytes, $decimals = 2) {
        $sz = 'BKMGTP';
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
      }


  function generateHTML($folderName,$size,$type,$modified){

  	if ($type === "dir") {
  	$classType="icon-folder";
  	$actionSend="onclick=\"sendName();sendPath();";
  	$size='-';
 	 } else {
  	$classType="icon-doc-inv";
  	$actionSend="onclick=\"sendName();";
  }
 	

  echo '<div class="row vignette">
              <p class="col-sm-3 '.$classType.' folderName" '.$actionSend.'">'.$folderName.'</p>
              <p class="col-sm-3">'.$size.'</p>
              <p class="col-sm-3">'.$type.'</p>
              <p class="col-sm-3">'.$modified.'</p>
              </div>';
  }


  /*print_r($infoFiles);*/




/*foreach ($file as $key => $value) {
	
}*/

?>


