<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta type="author" content="404 Code Found ali aude"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta type="description" content="file manager project"/>

  </head>

  <body>
    
    <div class="container-fluid">
      <!--   <span id='test'></span> -->
    <aside class="col-sm-2"> <h2>Mes dossiers</h2> 
      <p class="icon-folder">folder name</p> 
      <p class="icon-folder">folder name</p>
      <p class="icon-folder">folder name</p> 
      <p class="icon-folder">folder name</p> 
      <p class="icon-folder">folder name</p> 
      <p class="icon-folder">folder name</p> 
    </aside>

    <div class="col-sm-10">
      
    <header class="row">

     <h2 class="col-sm-11 icon-home">breadcrumb variable a mettre a jour</h2>

        
      <h3> <button name="up" type="" class="icon-up-big"><image></image></button></h3>

    </header>

    <main class="row">
      <div class="row">
      <p class="col-sm-4">FILE NAME</p>
      <p class="col-sm-2">SIZE</p>
      <p class="col-sm-2">TYPE</p>
      <p class="col-sm-2">Created</p>
      <p class="col-sm-2">Modified</p>
      </div>

      <?php include('generateDirectory.php');?>

    </main>
  
    </div>
    </div>
    
    



  </body>

</html>
