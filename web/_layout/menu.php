<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="height: 50px;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?php 



          if ($pagina == "home"){
            //aqui va el codigo si la regka es verdadera es decir true
            echo 'active';
          }

          //hacer si

          // == igual a
          // = asignarcion 
          // != diferente a
          // > mayor que
          // < menor que
          // >= mayor o igual a
          // <= menor igual a
      
      
      ?>">
        <a class="nav-link" href="../home/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($pagina == "contactos"){ echo "active"; } ?>">
        <a class="nav-link" href="../contact/">Contactanos</a>
      </li>
      <li class="nav-item <?php if($pagina == "quienes"){ echo "active"; } ?>">
        <a class="nav-link" href="../quienes/">Quienes Somos</a>
      </li>
      <li class="nav-item <?php if($pagina == "usuarios"){ echo "active"; } ?>">
        <a class="nav-link" href="../usuarios">Usuarios</a>
      </li>
    </ul>
  </div>
</nav>
