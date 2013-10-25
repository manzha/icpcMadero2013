<!DOCTYPE html>
<html>
    <?php
    include("header.php");
    ?>

        <!-- End Header and Nav -->

        <!-- First Band (Slider) -->

        <div class="row">
            <div class="large-12 columns">
                <!--<div id="slider">-->
                    <!--<img src="http://placehold.it/1000x400&text=[ img 1 ]" />-->
                <!--</div>-->
                <ul data-orbit>
                    <li><img src="img/banner.jpg" /></li>
                    <li><img src="img/banner1.jpg" /></li>
                    <li><img src="img/banner2.jpg" /></li>
                </ul>

                <hr />
            </div>
        </div>

        <!-- Three-up Content Blocks -->

        <div class="row">
            <div class="large-4 columns">
               <img src="img/think.jpg" />
               <h4>Think</h4>
            <h4><a href="quees.php">¿Qué es?</a></h4>
                <p>Conoce de que trata el torneo del ICPC.</p>
            </div>

            <div class="large-4 columns">
                <img src="img/create.jpg" />
                <h4>Create</h4>
                <h4><a href="sede.php">Instalaciones.</a></h4>
                <p>El torneo se llevará acabo en las instalaciones del área de sistemas del Tecnológico de Ciudad Madero.</p>
            </div>

            <div class="large-4 columns">
                <img src="img/solve.jpg" />
                <h4>Solve</h4>
                <h4><a href="reglamento.php">Reglamento.</a></h4>
                <p>Te aconsejamos leas el reglamento del torneo.</p>
            </div>

        </div>

        <!-- Call to Action Panel -->
        <div class="row">
            <div class="large-12 columns">

                <div class="panel">
                    <h4>¡Estamos para servirte!</h4>

                    <div class="row">
                        <div class="large-9 columns">
                            <p>Nos encantaría escuchar tus dudas o sugerencias del evento.</p>
                        </div>
                        <div class="large-3 columns">
                            <a href="#" class="radius button right">Contactanos</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php
        include ("footer.php");
        ?>
    
</html>
