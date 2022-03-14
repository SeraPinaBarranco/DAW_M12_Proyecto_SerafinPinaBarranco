<?php
$home= "assets/home.png";
$menu= "assets/menu.png";

echo('<nav class="navbar navbar-expand-lg navbar-dark header">');
    echo('<div class="container-fluid">');      
        echo('<ul class="nav nav-pills">');
            
            echo('<li class="nav-item dropdown">');
              echo('<a class="nav-link dropdown-toggle ms-3 fs-6 color-navbar" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">');
                echo('<img class="rrss" src="'.$menu.'" alt="">');
                
              echo('</a>');
              echo('<ul class="dropdown-menu">');
                echo('<li><a class="dropdown-item" href="#">Alimentos</a></li>');
                echo('<li><a class="dropdown-item" href="#">Recetas</a></li>');
                
                echo('<li><hr class="dropdown-divider"></li>');
                echo('<li><a class="dropdown-item" href="#">Comidas</a></li>');
                echo('<li><a class="dropdown-item" href="#">Mis recetas</a></li>');
                echo('<li><a class="dropdown-item" href="#">Mis alimentos</a></li>');
                echo('<li><a class="dropdown-item" href="#">Estadisticas</a></li>');
                echo('<li><a class="dropdown-item" href="#">Mis objetivos</a></li>');
        
                echo('<li><hr class="dropdown-divider"></li>');
                echo('<li><a class="dropdown-item" href="#">Meditación</a></li>');
        
                echo('<li><hr class="dropdown-divider"></li>');
                echo('<li><a class="dropdown-item" href="#">Cuenta</a></li>');
                echo('<li><a class="dropdown-item" href="#">Cerrar sesión</a></li>');
              echo('</ul>');
            echo('</li>');
            echo('<li class="nav-item">');
              echo('<a class="nav-link disabled ms-1 fs-6" href="#">');
                echo('<img class="rrss" src="'.$home.'" alt="">');
              echo('</a>');
            echo('</li>');
            echo('<li class="nav-item">');
              echo('<a class="nav-link disabled position-absolute end-0 me-4 fs-6" href="#" tabindex="-1" aria-disabled="true">');
                echo('<img class="rrss" src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur.png" alt="">');
              echo('</a>');
            echo('</li>');
          echo('</ul>');
    echo('</div>');
  echo('</nav>');


?>




<!-- <div class="header">
    <div class="menu">Cabecera</div> 
    
    <div class="menu-links">
        <ul>
            <li>Home</li>
            <li>User</li>
        </ul>
    </div>

</div> -->

