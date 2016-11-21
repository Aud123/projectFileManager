<?php
if (isset($_REQUEST['path'])&&(!empty($_REQUEST['path']))) {
  $crumbs = explode("/",$_REQUEST['path']);
  array_shift($crumbs);
  $lastCrumbs = count($crumbs);
  $i = 0;
  echo'<ol class="breadcrumb col-xs-11">';
  echo '<li class="icon-home"></li>';
  foreach($crumbs as $crumb){
    if (++$i === $lastCrumbs) {
      echo '<li><a href="#">'.$crumb.'</a></li>';
    }
    else{
      echo '<li onclick="sendPathBreadCrumbs(this);"><a href="#">'.$crumb.'</a></li>';  
    }
  }
  echo '</ol>';
  echo '<button name="up" type="" onclick="sendPathBreadCrumb();" class="icon-up-big col-xs-1"></button>';
}
else {
  echo'<ol class="breadcrumb">';
  echo '<li class="icon-home"></li>';
  echo '</ol>';
  /*echo '<button name="up" type="" class="icon-up-big col-xs-1"></button>';*/
}
?>

