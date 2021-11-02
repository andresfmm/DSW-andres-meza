<!DOCTYPE html>
<html lang="es">
<head>
   <?php
     require './header-seo/headerseo.php';
   ?>
</head>
<body>
  <header> 
    <?php
      require './navbar/navbar.php';
    ?>
  </header>
  

  <main class="container-fase-3 mt-5">
     <section>
        <h2 class="h2">Algo sobre html y css</h2>
        <p>
           HTML es el lenguaje de marcado básico que describe el contenido y la estructura de las páginas web. 
           Por otro lado, CSS es la extensión del HTML que modifica el diseño y visualización de las páginas web         
        </p>

        <p>González, D. G. (2020, 23 abril). Los mejores frameworks CSS de código abierto. Linux Adictos. <a href="https://www.crehana.com/cr/blog/desarrollo-web/sabes-que-es-css-y-como-se-relaciona-con-html/" target="_blank">https://www.crehana.com/cr/blog/desarrollo-web/sabes-que-es-css-y-como-se-relaciona-con-html/</a></p>
    </section>
    

    <section>
        <p class="h2" style="margin-top: 10%;">Potcast</p>
        <audio controls>
             <source src="../assets/audios/potcast1.mp3" type="audio/mp3">
          </audio>
    </section>

    <article class="container-fase-3-autor" id="autor">
        <!-- Author-->
        <h2 class="text-center">Video contenido 1</h2>
        <div style="margin: 0 auto;">
          <iframe src="https://drive.google.com/file/d/1rf8D2aeTqfBRdfx3hQJ_6JGcf9RUwhty/preview" width="640" height="480" allow="autoplay"></iframe>            
        </div>
         
    </article>
    
    <br><br>
  </main>

  <!-- Footer -->
<footer class="bg-dark text-center text-white" >
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      skype N/A <br>
      fecha actualizacion: 06-09-2021 <br>
    <a class="text-white" href="mailto:andres230687@hotmail.com">andres230687@hotmail.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>