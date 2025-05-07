<?php 
/**
 * Template Name: Página de Contacto
 */
get_header(); ?>

  <!-- Contact Section -->
  <section id="contact" class="contact section p-0">
    <div class="container fullScreenView d-flex align-items-center" data-aos="fade">
      <div class="row justify-content-center ">
        <div class="col-12 col-lg-10 text-center">
          <div class="mb-5">
            <h1>Vamos a prepararte un buen sitio ☕</h1>
            <p class="col-xl-8 mx-auto my-3">
              Cuéntanos sobre tu proyecto
            </p>
          </div>
        </div>

        <div class="col-12 col-lg-8 d-md-flex justify-content-center text-center gap-2">
            <div class="contact-btn">
              <a class="btn-get-started d-inline-flex justify-content-center align-items-center mb-2" href="https://wa.me/529223400366?text=Hola%20¿Me%20podrías%20dar%20información%20sobre%20..." target="_blank" data-bs-toggle="modal" data-bs-target="#bookVideocall">
              <i class="bi bi-calendar-event me-2 fs-3"></i>
              <!-- mobile version -->
              <span class="d-flex">Agenda videollamada</span>
            </a>
            <!-- Modal -->
            <div class="modal fade" id="bookVideocall" tabindex="-1" aria-labelledby="agendar-videollamada" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <!-- Principio del widget integrado de Calendly -->
                    <div class="calendly-inline-widget" data-url="https://calendly.com/flatlatte/hablemos-de-tu-proyecto?hide_event_type_details=1&hide_gdpr_banner=1" style="min-width:320px;height:500px;"></div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    <!-- Final del widget integrado de Calendly -->
                  </div>
                  <div class="modal-footer">

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="contact-btn">
            <a class="btn-get-started d-inline-flex justify-content-center align-items-center mb-4" href="https://wa.me/529223400366?text=Hola%20¿Me%20podrías%20dar%20información%20sobre%20..." target="_blank">
              <i class="bi bi-whatsapp me-2 fs-3"></i>
              <!-- mobile version -->
              <span class="d-flex d-md-none">WhatsApp</span>
              <!-- desktop version -->
              <span class="d-none d-md-block"
                >Escríbeme por WhatsApp</span
              >
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /Contact Section -->

<?php get_footer(); ?>
