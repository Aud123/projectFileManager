<?php
if (isset($_REQUEST['path'])) {
  $crumbs = explode("/",$_REQUEST['path']);
  array_shift($crumbs);
  echo'<ol class="breadcrumb col-xs-11">';
  echo '<li class="icon-home"></li>';
  foreach($crumbs as $crumb){
  echo '<li><a href="#">'.$crumb.'</a></li>';
  }
  echo '</ol>';
  echo '<button name="up" type="" class="icon-up-big col-xs-1"></button>';
}
else {
  echo'<ol class="breadcrumb col-xs-11">';
  echo '<li class="icon-home"></li>';
  echo '</ol>';
  echo '<button name="up" type="" class="icon-up-big col-xs-1"></button>';
}
?>
