<?php 
/**
 * Template Name: Cotizador
 */
get_header();
?>

<!-- CALCULADORA -->
 <section id="cotizador" class="cotizador section"> 
  <h3>Selecciona tu paquete base</h3>
  <label><input type="radio" name="paquete" value="3200" data-label="Portafolio"> Portafolio ($3,200)</label>
  <label><input type="radio" name="paquete" value="5200" data-label="Básico"> Básico ($5,200)</label>
  <label><input type="radio" name="paquete" value="8100" data-label="Pro"> Pro ($8,100)</label>
  <label><input type="radio" name="paquete" value="10000" data-label="Extra"> Extra (Desde $10,000)</label>

  <h3>Funcionalidades extra</h3>
  <label><input type="checkbox" class="extra" value="1900" data-label="Sitio autoadministrable"> Sitio autoadministrable ($1,900)</label>
  <label><input type="checkbox" class="extra" value="900" data-label="Chat directo"> Chat directo ($900)</label>
  <label><input type="checkbox" class="extra" value="1100" data-label="Blog"> Blog ($1,100)</label>
  <label><input type="checkbox" class="extra" value="1100" data-label="Sistema de reservaciones"> Sistema de reservaciones ($1,100)</label>
  <label><input type="checkbox" class="extra" value="1400" data-label="Redacción de contenido"> Redacción de contenido ($1,400)</label>
  <label><input type="checkbox" class="extra" value="450" data-label="Sección extra"> Sección extra ($450)</label>
  <label><input type="checkbox" class="extra" value="280" data-label="Soporte básico mensual"> Soporte básico mensual ($280)</label>
  <label><input type="checkbox" class="extra" value="460" data-label="Soporte pro mensual"> Soporte pro mensual ($460)</label>
  <label><input type="checkbox" class="extra" value="1070" data-label="Renovación anual"> Renovación anual ($1,070)</label>

  <h2>Total: <span id="total">$0</span></h2>

  <div id="resumen"></div>

  <a id="btn-whatsapp" class="boton-whatsapp" href="#" target="_blank">Enviar por WhatsApp</a>
</section>

<script>
  const radios = document.querySelectorAll('input[name="paquete"]');
  const checkboxes = document.querySelectorAll('.extra');
  const totalDisplay = document.getElementById('total');
  const resumen = document.getElementById('resumen');
  const btnWhatsapp = document.getElementById('btn-whatsapp');

  function calcularTotal() {
    let total = 0;
    let resumenHTML = "<strong>Resumen de tu selección:</strong><ul>";
    let mensajeWA = "Hola, estoy interesado en este sitio web:\n";

    radios.forEach(r => {
      if (r.checked) {
        total += parseInt(r.value);
        resumenHTML += `<li><strong>Paquete:</strong> ${r.dataset.label} ($${parseInt(r.value).toLocaleString()})</li>`;
        mensajeWA += `• Paquete: ${r.dataset.label} ($${r.value})\n`;
      }
    });

    resumenHTML += "<li><strong>Extras:</strong><ul>";
    checkboxes.forEach(c => {
      if (c.checked) {
        total += parseInt(c.value);
        resumenHTML += `<li>${c.dataset.label} ($${parseInt(c.value).toLocaleString()})</li>`;
        mensajeWA += `• Extra: ${c.dataset.label} ($${c.value})\n`;
      }
    });
    resumenHTML += "</ul></li></ul>";
    resumenHTML += `<strong>Total estimado: $${total.toLocaleString()}</strong>`;
    mensajeWA += `\nTotal: $${total.toLocaleString()}`;

    totalDisplay.textContent = `$${total.toLocaleString()}`;
    resumen.innerHTML = resumenHTML;

    // Reemplaza el número con tu WhatsApp
    let numero = "5211234567890";
    btnWhatsapp.href = `https://wa.me/${numero}?text=${encodeURIComponent(mensajeWA)}`;
  }

  radios.forEach(r => r.addEventListener('change', calcularTotal));
  checkboxes.forEach(c => c.addEventListener('change', calcularTotal));
</script>
<!-- /CALCULADORA -->

<!-- CTA Section -->
<section id="CTA" class="section CTA">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="section-title text-center">
        <div class="">
          <h1 class="" data-aos="fade-up">¿Eres freelancer y quieres ofrecer sitios web?</h1>
          <p class="" data-aos="fade-up">
            Conviértete en socio flat latte y ofrece sitios profesionales sin preocuparte del desarrollo.
          </p>
        </div>
      </div>
      <div class=" mt-1 text-center">
        <a class="btn btn-get-started" href="<?php echo esc_url(home_url('/contacto-socio-flat-latte')); ?>" data-aos="fade-up" data-aos-delay="100">
          Quiero ser socio
        </a>
      </div>
    </div>
  </div>
</section>
<!-- / CTA Section -->



<?php get_footer(); ?>