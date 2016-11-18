<?php

// Give the full path of the page


$crumbs = explode("/",$_SERVER["REQUEST_URI"]);
/*print_r($_SERVER["REQUEST_URI"]);*/
echo'<ol class="breadcrumb">';
foreach($crumbs as $crumb){

echo '<li><a href="#">'.$crumb.'</a></li>';


// Construct Website.com > Templates > Template Some Name instead of "website.com/templates/template_some_name.php"	
/* echo ucfirst(str_replace(array(""," "),$crumb) . '>');*/



/*echo '<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>';
*/

}
echo '</ol>';
?>


<!-- $_SERVER["REQUEST_URI" -->