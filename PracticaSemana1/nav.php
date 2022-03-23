<?php
echo "<h1>Programacion Computacional IV</h1>";

if(isset($_POST["enviar"])){
   //echo "<script>alert('Clic')</script>";
    $idioma = $_POST["idioma"];
    //echo $idioma;
    INCLUDE "pages/". $idioma . ".php";

}else{

    INCLUDE "pages/es.php";

}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>        
        
        <li class="nav-item">
        <form action="" method="POST">
        <select name="idioma" id="">
            <option value="en">English</option>
            <option value="es">Spanish</option>
         </select>
         <input type="submit" name="enviar" value="Seleccionar" />
        </li>
      </ul>
     
    </div>
  </div>
</nav>


