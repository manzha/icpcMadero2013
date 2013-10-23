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

            <h3>Contacta <small>al staff del evento.</small></h3>

            <p>Si deseas ponerte en contacto con nosotros, ya sea por alguna duda, queja o sugerencia. Lo puedes hacer mediante los siguientes medios.</p>
            <ul>
                <li>Correo electronico: <a href="mailto:chapter@itcm.acm.org">chapter@itcm.acm.org</a></li>
                <li>Twitter <a href="https://twitter.com/acm_itcm">@ACM_ITCM</a></li>
                <li>Facebook <a href="https://www.facebook.com/pages/ACM-ITCM/452008591509618?fref=ts">/ACM ITCM</a></li>
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
