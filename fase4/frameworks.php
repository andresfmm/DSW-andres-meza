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
        <h2 class="h2">¿Qué es un framework CSS?</h2>
        <p>Los frameworks CSS son herramientas utilizadas por los desarrolladores de interfaces de usuario 
           para hacer más rápido su trabajo. En lugar de crear soluciones desde cero cada vez que surge un 
           nuevo proyecto, los frameworks brindan a los desarrolladores las herramientas para crear rápidamente 
           interfaces de usuario que se pueden ajustar e iterar  a medida que se necesitan.        
        </p>
        <p>González, D. G. (2020, 23 abril). Los mejores frameworks CSS de código abierto. Linux Adictos. <a href=" https://www.linuxadictos.com/los-mejores-frameworks-css-de-codigo-abierto.html" target="_blank"> https://www.linuxadictos.com/los-mejores-frameworks-css-de-codigo-abierto.html</a></p>
     </section>


     <article id="frameworks-css" style="margin-top: 10%;">
      <h4 class="h4">Frameworks CSS</h4>
      <p>Básicamente un framework css es una librería que tiene muchas clases ya definidas y es solo usarlas, esto 
        ahorra mucho tiempo y las librerías son mantenidas por comunidades de programadores que tienen mucha experiencia
        y creo que es una exelente opción usarlas ya que vienen con soporte para dispositivos moviles y diferentes navegadores,
        existen muchas como por ejemplo </p>
     
     <br>
     <ul class="list-group">
      <li class="list-group-item">1. <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
      <li class="list-group-item">2. <a href="https://materializecss.com/" target="_blank">Materialize</a></li>
      <li class="list-group-item">3. <a href="https://bulma.io/" target="_blank">Bulma css</a></li>
      <li class="list-group-item">4. <a href="https://tailwindcss.com/" target="_blank">TilWind css</a></li>
      <li class="list-group-item">5. <a href="https://purecss.io/" target="_blank">Pure css</a></li>	
    </ul>
    <br>
    <p>Entre otros siendo Bootstrap en de mayor uso y con la comunidad más grande.</p>
    <p>Básicamente lo que nos ahorra es tiempo y nos ayuda con buenas prácticas, ademas vienen listos para que las páginas
       se adapten a los dispositivos móviles, s se utilizan las grids o rejillas donde se
       dividen los tamaños de las pantallas por columnas ya los Frameworks traen ese problema resulto por ejemplo:</p>


<pre class="code">  
  &lt;div class="row"&gt;
    &lt;div class="col-lg-6 col-md-6 col-sm-12"&gt;
      columna 1
    &lt;/div&gt;
    &lt;div class="col-lg-6 col-md-6 col-sm-12"&gt;
      columna 2
    &lt;/div&gt;
  &lt;/div&gt;
</pre>
  <br>
  <p>En este caso Bootstrap cuando la pantalla sea grande cada columna ocupara 6 columnas de las 12
     que tiene por defecto la pantalla, al igual que cuando sea mediana y cuando sea small ocupara 12
     columnas cada columna, ya todas esas clases vienen echas con el framework al igual que tipos de
     letra tamaños colores y demás estilos </p>

    </article>


    <article class="container-fase-3-autor" id="autor">
        <!-- Author-->
        <h2 class="text-center">SIN CSS / CON CSS</h2>
        <div style="margin: 0 auto;">
            <img src="https://i.ytimg.com/vi/TmltkTIAX0c/maxresdefault.jpg" alt="Andres f meza">
            <p>Imagen recuperada de: <a href="https://i.ytimg.com/vi/TmltkTIAX0c/maxresdefault.jpg" target="_blank">https://i.ytimg.com/vi/TmltkTIAX0c/maxresdefault.jpg</a> </p> 
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