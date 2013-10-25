<!DOCTYPE html>
<html>
    <?php
    include("header.php");
    ?>

    <!-- End Header and Nav -->


    <div class="row">    

        <!-- Main Content Section -->
        <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
        <div class="large-9 push-3 columns">

            <h3>Instalaciones <small>del ITCM.</small></h3>

            <p>El torneo se llevará acabo en el Laboratorio de Computo del Tecnológico, este se encuentra localizado en el Campus II, frente al Centro de Información.</p>
            
            <p>También habrá oportunidad de conocer el campus I del instituto, pues la ceremonia de clausura se realizará en el Gran Salón T2.</p>
            <ul class="large-block-grid-2">
                <li><img alt="Laboratorio de Computo"src="img/edificiolab.jpg"/></li>
                <li><img alt="Unidad Academica de Sistemas" src="img/sistemas.jpg"/></li>
            </ul>
            


        </div>


        <!-- Nav Sidebar -->
        <!-- This is source ordered to be pulled to the left on larger screens -->
        <?php include ("sidebar.php"); ?>

    </div>
    <!-- Footer -->
    <?php
    include ("footer.php");
    ?>

</html>
