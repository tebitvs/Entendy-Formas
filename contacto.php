<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <title>Contacto | Consultores contables, tributarios, Contabilidad externa, Outsorcing contable, remuneracion | AyLconsultores.CL</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php	include_once '../inc/head.php'; ?>
    </head>
    <body>
        <!-- Container -->
        <div id="container">
            <!-- Header	================================================== -->
            <?php	include_once '../inc/header.php'; ?>
            <!-- End Header -->

            <!-- contact section ================================================== -->
            <section class="contact-section">
              <div class="container">
                <div class="col-md-4">
                  <div class="contact-info">
                    <h2>INFORMACIÓN DE CONTACTO</h2>
                    <ul class="information-list">
                      <li><i class="fa fa-map-marker"></i><span>Condell #679 de 306, Providencia, Santiago, Chile.</span></li>
                      <li><i class="fa fa-phone"></i><span>+56 2 2234 4308</span><span>+1 605-315-8544</span></li>
                      <li><i class="fa fa-envelope-o"></i><a href="#">j.loyola@aylconsultores.cl</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <form id="contact-form" name="contact" method="POST" data-netlify="true">
                    <h2>ENVÍENOS UN MENSAJE</h2>
                    <div class="row">
                      <div class="col-md-4">
                        <input name="name" id="name" type="text" placeholder="Nombre completo">
                      </div>
                      <div class="col-md-4">
                        <input name="mail" id="mail" type="text" placeholder="Correo Electr&oacute;nico">
                      </div>
                      <div class="col-md-4">
                        <input name="tel-number" id="tel-number" type="text" placeholder="Numero Tel&eacute;fono">
                      </div>
                    </div>
                    <textarea name="comment" id="comment" placeholder="Mensaje aqui"></textarea>
                    <input type="submit" id="submit_contact" value="Enviar Mensaje">
                    <div id="msg" class="message"></div>
                  </form>
                </div>
              </div>
            </section>
            <!-- End contact section -->

            <!-- map ================================================== -->
            <iframe class="maps-marketingok" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.308249934338!2d-70.62999328481956!3d-33.441274780776446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5821d9484d9%3A0xed42f84ea8a84de6!2sAv.%20Condell%20679%2C%20Providencia%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1625178335342!5m2!1ses-419!2scl" allowfullscreen="" loading="lazy"></iframe>
            <!-- map -->

            <!-- footer ================================================== -->
						<?php	include_once '../inc/footer.php'; ?>
            <!-- End footer -->
        </div>
        <!-- End Container -->

        <!-- Scripts template MarketingOK.cl -->
        <?php	include_once '../inc/scripts.php'; ?>
				<!-- End Scripts template MarketingOK.cl -->
    </body>
</html>
