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

            <h3>Registro <small>e información.</small></h3>

            <p>Todos los equipos deberán registrarse en la página oficial del ICPC, en Baylor.</p>

            <p>Además deberán realizar el respectivo pago a la sede (ITCM). También se recomienda lean el <a href="reglamento.php">reglamento</a> y se comuniquen cualquier
                duda.</p>

            <p><a href="http://icpc.baylor.edu/regionals/finder/mexico-central-america-2013">Registrate a The 2013 Mexico & Central America Regional Contest (2013).</a></p>
            <p>Recuerda que tienes que registrarte en la sede de ITCM.</p>

            <h5>Información de pago:</h5>
            <ul class="vcard">
                <li class="fn">Instituto Tecnológico de Ciudad Madero</li>
                <li>Banamex</li>
                <li>Cuenta: 0594-5148219</li>
                <li>Clabe: 002813059451482196 (para transferencias electronicas)</li>
            </ul>

            <h5>Notas importantes: </h5>
            <ul>
                <li>Una vez que realicen su pago deben enviar la ficha de pago escaneada a los correos que se muestran al final de la página, así como traer su ficha de pago original el día del concurso.</li>
                <li>Todos los participantes deben presentar su copia de credencial de estudiante y portar su credencial original durante todo el concurso.</li>
                <li>Para día del concurso los participantes deberán portar el gafete correspondiente y la playera del evento. (Se entregarán el día del evento).</li>
                <li>Para los equipos que requieran factura, es necesario que manden sus datos para generarla junto con su ficha escaneada a los correos que se muestran al final de la página.</li>
            </ul>
            <p>Correo electronico: <a href="mailto:chapter@itcm.acm.org">chapter@itcm.acm.org</a></p>
            <div data-alert class="alert-box alert">
                <p>Nota: Si realizas el pago en el mes de Octubre se facturará en Octubre, si realizas tu pago en Noviembre se facturará en Noviembre.</p>
            </div>

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
