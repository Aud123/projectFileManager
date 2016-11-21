<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta type="author" content="404 Code Found ali aude"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FILE EXPLORER</title>

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
     <?php include('generateBreadCrumb.php');?>
    </header>

    <main class="row">
      <?php include('generateDirectory.php');?>
    </main>

    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
    function sendName(element)// affiche les éléments générer dans generateDirectory
    {
      var ligne = element.parentElement;// on récupere l'element qui contient toutes les informations à transmettre
      var path = crumb()+'/'+ligne.children[0].innerHTML;
      var type = ligne.children[2].innerHTML;
        $.post('generateDirectory.php', {'path' : path, 'type' : type},
        function(data){document.querySelector('div main').innerHTML = data;});
    }
    function sendPath(element)
    {
      var ligne = element.parentElement;// on récupere l'element qui contient toutes les informations à transmettre
      var path = crumb()+'/'+ligne.children[0].innerHTML;
        $.post('generateBreadCrumb.php', {'path' : path},
        function(data){document.querySelector('header').innerHTML=data;});
    }
    function crumb(){
      var crumbs = document.querySelectorAll('header ol li a'); // récupere les crumbs
      var path = '';
      for(var i = 0; i<crumbs.length;i++){// ignore le premier li
        path += '/'+crumbs[i].innerHTML;
      }
      return path;
    }
  </script>
  </body>

</html>
