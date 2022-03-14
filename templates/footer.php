
<?php

    $user = "assets/user.png";
    $twitter= "assets/twitter.png";
    $instagram="assets/instagram.png";
    $linkedin= "assets/linkedin.png";

    echo ("<div class='footer'>");
        echo("<div>");
            echo('<div class="text-rrss">');
                echo('<span><img class="rrss" src= "'.$instagram.'"  alt="Redes Sociales" srcset=""></span>');
                echo('<span><img class="rrss" src= "'.$twitter.'"  alt="Redes Sociales" srcset=""></span>');
                echo('<span><img class="rrss" src= "'.$linkedin.'"  alt="Redes Sociales" srcset=""></span>');

                echo('<span><img class="rrss" src= "' . $user .'"  alt="Redes Sociales" srcset=""></span>');
              
            echo('</div>');
        echo('</div>');
        echo('<div class="box-footer">');
            echo('<span>Política de Privacidad</span>');
            echo('<span>|</span>');
            echo('<span>Política de Cookies</span>');
            echo('<span>|</span>');
            echo('<span>Aviso Legal</span>');
        
            echo('<span class="me-2 ms-2">@SerafínPiñaBarranco</span>');
        echo('</div>');
    echo('</div>');


  ?>