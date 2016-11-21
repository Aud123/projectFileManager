<?php

$dir=dirname(__FILE__);

if(isset($_REQUEST['type'])){
  $dir .= $_REQUEST['path'];
  $dirtype = $_REQUEST['type'];
  if ($dirtype === "dir"){
    explorerFile($dir);
  }
  elseif ($dirtype === "file") {
    echo 'téléchargemnt à faire';
  }
  else {
    explorerFile(dirname(__FILE__));
  }
} else {
    explorerFile($dir);
}

function explorerFile($dir){
  echo '<div class="row">
          <p class="col-xs-6">FILE NAME</p>
          <p class="col-xs-2">SIZE</p>
          <p class="col-xs-2">TYPE</p>
          <p class="col-xs-2">Modified</p>
        </div>';
  $files = array_diff(scandir($dir),array('..', '.')); // tableau des fichiers
  if(empty($files)){
    echo 'Dossier vide.';
  }
  else{
    foreach ($files as $key => $value) {
      $infoFiles[]=$value.'|'.human_filesize(filesize($dir.'/'.$value)).'|'.filetype($dir.'/'.$value).'|'.date ("d/m/Y H:i ", filemtime($dir.'/'.$value)).PHP_EOL;
    }// On liste les informations des fichiers ou dossiers dans dir
    foreach ($infoFiles as $key => $value){
      $arrayFiles = explode("|", $value);
      generateHTML($arrayFiles[0],$arrayFiles[1],$arrayFiles[2],$arrayFiles[3]);
    }//génére les balises html qui vont bien en fonction des infos des fichiers et dossiers
  }
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
	$actionSend="onclick=\"sendName(this);sendPath(this);";
	$size='-';
	} else {
  	$classType="icon-doc-inv";
  	$actionSend="onclick=\"sendName(this);";
  }

  echo '<div class="row vignette">
    <p class="col-xs-6 '.$classType.' folderName" '.$actionSend.'">'.$folderName.'</p>
    <p class="col-xs-2">'.$size.'</p>
    <p class="col-xs-2">'.$type.'</p>
    <p class="col-xs-2">'.$modified.'</p>
  </div>';
  }
?>
