<!DOCTYPE html>
<html>
<head>
    
    <?php include_once './View/Plantillas/cabecera.php'; ?>

      <!-- Script / Estilos CSS / Recursos de la página actual -->

    <script src="View/Scripts/mi-portafolio.js"></script> 
    <script src="Recursos/js/jquery.bxslider.min.js"></script> 
          
    <script>
    $(document).ready(function(){
    $('select').formSelect();
  });
    </script>

    <style>

        /* ul:not(.nomclase)>li  */
        #precios ul>li {
         list-style-type: disc !important;
         color: #424242;
         margin-left: 25px;
        }       


    </style>

</head>
<body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="Recursos/js/materialize.min.js"></script>

    <!-- preloader  -->
    <?php 
    include_once './View/Plantillas/preload.php';
    ?>
    <!-- --> 

    <?php 
    include_once './View/Plantillas/menu.php';
    ?>

    <!-- Botón flotante de mensajeria  -->
    <?php 
    include_once './View/Plantillas/mensajeria.php';
    ?>

    <!-- Inicio de contenido de página -->
    <section class="container right-align" style="min-height:30px;margin-top: 30px;margin-bottom: 0px;">
         <div class="row">
          <div class="input-field col s12 m12  ">
            <p><a href="#embarazo" class="chip" style="background-color: #b56289; color: white;">Embarazo</a>
               <a href="#newborn" class="chip" style="background-color: #dfbbcc; color: white;">Newborn</a>
               <a href="#smashcake" class="chip" style="background-color: #dfbbcc; color: white;">Smashcake</a>
               <a href="#otras" class="chip" style="background-color: #dfbbcc; color: white;">Otras sesiones</a>
            <p/>
         </div> 
    </section>  

    <section class="container" id="embarazo" style="min-height: 350px;margin-top: 20px;margin-bottom: 0px;">

          <div class="row">
                <div class="col m12 s12" style="">
                    <h3 class="letra" style="color: #e59691;">Embarazo</h3>
                    <hr align="left" width="80%" style="background-color: #e59691; height: 1px; border: 0;">                                   
                    <p></p>      
                </div>    
                
          </div>

        <!-- fotos  -->  

          <div class="row">
        
            <div class="col m6 s12">
                    <a href="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_01.jpg" data-lightbox="example-image-link"><img src="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_01.jpg" alt="" class="example-1 letra responsive-img"/></a>
                    <a href="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_05.jpg" data-lightbox="example-image-link"><img src="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_05.jpg" alt="" class="example-1 letra responsive-img"/></a>
            </div>

            <div class="col m6 s12">

                   <a href="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_02.jpg" data-lightbox="example-image-link"><img src="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_02.jpg" alt="" class="example-1 letra responsive-img"/></a>

            </div>

            <div class="col m6 s12">
            <a href="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_03.jpg" data-lightbox="example-image-link"><img src="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_03.jpg" alt="" class="example-1 letra responsive-img"/></a>
            </div>

            <div class="col m6 s12">
            <a href="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_04.jpg" data-lightbox="example-image-link"><img src="./Recursos/img/galeria/miportafolio/embarazo/Port_emb_04.jpg" alt="" class="example-1 letra responsive-img"/></a>
            </div>

          </div>


          <!-- fotos  -->

          
    </section>  
 
    <section class="container right-align" style="min-height: 5px;margin-top: 5px;margin-bottom: 0px;">

        <div class="row">
            <div class="col m12 s12" style="">
                <p><a href="./embarazo.php" class="waves-effect waves-light btn" style="background-color: #b56289;">Más info</a></p>
            </div>    
        </div>
    </section>


    <section class="container" id="newborn" style="min-height: 350px;margin-top: 70px;margin-bottom: 0px;">

          <div class="row">
                <div class="col m12 s12 left-align" style="">
                    <h3 class="letra" style="color: #e59691;">Newborn</h3>
                    <hr align="left" width="80%" style="background-color: #e59691; height: 1px; border: 0;">                                   
                    <p></p>      
                </div>    
                
          </div>

          <!-- fotos  -->  

          <div class="row">
        
            <div class="col m6 s12">
                    <a href="./Recursos/img/galeria/miportafolio/newborn/Port_new_01.jpg" data-lightbox="example-image-link2"><img src="./Recursos/img/galeria/miportafolio/newborn/Port_new_01.jpg" alt="" class="letra responsive-img"/></a>
                    <a href="./Recursos/img/galeria/miportafolio/newborn/Port_new_03.jpg" data-lightbox="example-image-link2"><img src="./Recursos/img/galeria/miportafolio/newborn/Port_new_03.jpg" alt="" class="letra responsive-img"/></a>
                    <a href="./Recursos/img/galeria/miportafolio/newborn/Port_new_04.jpg" data-lightbox="example-image-link2"><img src="./Recursos/img/galeria/miportafolio/newborn/Port_new_04.jpg" alt="" class="letra responsive-img"/></a>
            </div>

            <div class="col m6 s12">

                   <a href="./Recursos/img/galeria/miportafolio/newborn/Port_new_02.jpg" data-lightbox="example-image-link2"><img src="./Recursos/img/galeria/miportafolio/newborn/Port_new_02.jpg" alt="" class="letra responsive-img"/></a>

            </div>

            <div class="col m6 s12">
                  
                <a href="./Recursos/img/galeria/miportafolio/newborn/Port_new_05.jpg" data-lightbox="example-image-link2"><img src="./Recursos/img/galeria/miportafolio/newborn/Port_new_05.jpg" alt="" class="letra responsive-img"/></a>
            </div>

            <div class="col m6 s12">
                
            </div>

          </div>


          <!-- fotos  -->

          
    </section>   

    <section class="container right-align" style="min-height: 5px;margin-top: 5px;margin-bottom: 0px;">

            <div class="row">
                <div class="col m12 s12" style="">
                    <p><a href="./newborn.php" class="waves-effect waves-light btn" style="background-color: #b56289;">Más info</a></p>
                </div>    
            </div>
    </section>


    <section class="container" id="smashcake" style="min-height: 350px;margin-top: 70px;margin-bottom: 0px;">

          <div class="row">
                <div class="col m12 s12" style="">
                    <h3 class="letra" style="color: #e59691;">Smash cake</h3>
                    <hr align="left" width="80%" style="background-color: #e59691; height: 1px; border: 0;">                                   
                    <p></p>      
                </div>    
                
          </div>

          <!-- fotos  -->  

          <div class="row">
        
            <div class="col m6 s12">
                    <a href="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_01.jpg" data-lightbox="example-image-link3"><img src="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_01.jpg" alt="" class="example-1 letra responsive-img"/></a>
                    <a href="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_04.jpg" data-lightbox="example-image-link3"><img src="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_04.jpg" alt="" class="example-1 letra responsive-img"/></a>
                    <a href="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_05.jpg" data-lightbox="example-image-link3"><img src="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_05.jpg" alt="" class="example-1 letra responsive-img"/></a>
            </div>

            <div class="col m6 s12">

                   <a href="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_06.jpg" data-lightbox="example-image-link3"><img src="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_06.jpg" alt="" class="example-1 letra responsive-img"/></a>

            </div>

            <div class="col m6 s12">
            <a href="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_02.jpg" data-lightbox="example-image-link3"><img src="./Recursos/img/galeria/miportafolio/smashcake/Port_smash_02.jpg" alt="" class="example-1 letra responsive-img"/></a>
            </div>

            <div class="col m6 s12">
            
            </div>

          </div>


          <!-- fotos  -->

          
    </section>  

        <section class="container right-align" style="min-height: 5px;margin-top: 5px;margin-bottom: 0px;">

            <div class="row">
                <div class="col m12 s12" style="">
                    <p><a href="./smashcake.php" class="waves-effect waves-light btn" style="background-color: #b56289;">Más info</a></p>
                </div>    
            </div>
    </section>

    <section class="container" id="otras" style="min-height: 350px;margin-top: 70px;margin-bottom: 0px;">

          <div class="row">
                <div class="col m12 s12 left-align" style="">
                    <h3 class="letra" style="color: #e59691;">Otras sesiones</h3>
                    <hr align="left" width="80%" style="background-color: #e59691; height: 1px; border: 0;">                                   
                    <p></p>      
                </div>    
                
          </div>

          <!-- fotos  -->  
    </section> 
         
    <section class="container right-align" style="min-height: 5px;margin-top: 5px;margin-bottom: 0px;">

        <div class="row">
            <div class="col m12 s12" style="">
                <p><a href="./newborn.php" class="waves-effect waves-light btn" style="background-color: #b56289;">Más info</a></p>
            </div>    
        </div>
    </section>
         



    <!-- Fin de contenido de página -->

    <?php 
    include_once './View/Plantillas/pie.php';
    ?>

</body>
</html>