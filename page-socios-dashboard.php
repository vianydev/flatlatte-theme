<?php
/*
Template Name: Panel Socios Revendedores
*/
if ( ! is_user_logged_in() ) {
  wp_redirect( wp_login_url() );
  exit;
}
get_header();
$current_user = wp_get_current_user();
?>

<!-- Precios Section -->
<section id="pricing" class="pricing section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <div class="col-10">
      <h1 data-aos="fade-up">Bienvenido Socio</h1>
    </div>
  </div>
  <!-- End Section Title -->
<div style="max-width: 800px; margin: auto; padding: 2rem; border-radius: 12px; background: #f8f8f8; box-shadow: 0 4px 20px rgba(0,0,0,0.05); font-family: sans-serif;">

  <h2 style="font-size: 28px;">👋 Hola, <?php echo esc_html( $current_user->display_name ); ?></h2>
  <p>Bienvenido al panel exclusivo para revendedores de <strong>Flat Latte</strong>. Aquí tienes acceso a tus herramientas:</p>

  <hr style="margin: 1.5rem 0;">

  <h3>📊 Calculadora de precios</h3>
  <p><a href="/calculadora" target="_blank">Haz clic aquí para usar la calculadora de precios</a></p>

  <h3>📁 Recursos</h3>
  <ul>
    <li><a href="/archivos/guia-de-reventa.pdf" target="_blank">Guía para revender sitios web</a></li>
    <li><a href="/archivos/plantilla-presupuesto.docx" target="_blank">Plantilla de presupuesto editable</a></li>
  </ul>

  <h3>📬 Novedades</h3>
  <p>🆕 Próximamente: Calculadora en tiempo real + Kit de propuestas.</p>

  <h3>🔗 Enlaces útiles</h3>
  <ul>
    <li><a href="/contacto">Soporte</a></li>
    <li><a href="/blog">Blog</a></li>
  </ul>

  <p><a href="<?php echo esc_url( wp_logout_url( home_url( '/acceso' ) ) ); ?>">🔓 Cerrar sesión</a></p>

</div>




  <!-- TABLA PRECIOS -->
  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item featured">
        <!-- <p class="popular">Popular</p> -->
          <h3>🎯 Básico</h3>
          <p class="description">Ideal para freelancers o pequeños negocios que necesitan presencia en internet.</p>
          <h4 class="my-1">
            <sup>$</sup>3,500
            <span class="fs-6">MXN</span>
          </h4>
          <ul>
            <li class=""><i class="bi bi-check"></i> <span>Hospedaje y dominio (tumarca.com)<sup>*</sup></span></li>
            <li class=""><i class="bi bi-check"></i> <span>1 página</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Hasta 5 secciones</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Tarjeta digital estilo "Linktree"</span></li>
            <li class=""><i class="bi bi-check"></i> <span> Optimizado para cualquier dispositivo</span></li>
            <li class=""><i class="bi bi-check"></i> <span>2 revisiones</span></li>
            <li class=""><i class="bi bi-check"></i> <span>10 días de soporte</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Chat (WhatsApp / Messenger)</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Autoadministrable</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Tienda en línea</span></li>
          </ul>
          <p class="mt-5 text-center" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?php echo esc_url(home_url('/precios#cotizador')); ?>" class="btn btn-get-started mx-auto">
              Lo quiero
            </a>
          </p>
        </div>
      </div>
      <!-- End Pricing Item -->

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item featured">
        <p class="popular">Popular</p>
          <h3>🚀 Pro</h3>
          <p class="description"> Perfecto para emprendedores, consultores o pequeñas empresas que ofrecen servicios o productos.</p>
          <h4 class="my-1">
            <sup>$</sup>5,100
            <span class="fs-6">MXN</span>
          </h4>
          <ul>
            <li class=""><i class="bi bi-check"></i> <span>Hospedaje y dominio (tumarca.com)<sup>*</sup></span></li>
            <li class=""><i class="bi bi-check"></i> <span>Hasta 3 páginas</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Hasta 7 secciones</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Tarjeta digital estilo "Linktree"</span></li>
            <li class=""><i class="bi bi-check"></i> <span> Optimizado para cualquier dispositivo</span></li>
            <li class=""><i class="bi bi-check"></i> <span>3 revisiones</span></li>
            <li class=""><i class="bi bi-check"></i> <span>30 días de soporte</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Chat (WhatsApp / Messenger)</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Autoadministrable</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Tienda en línea</span></li>
          </ul>
          <p class="mt-5 text-center" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?php echo esc_url(home_url('/precios#cotizador')); ?>" class="btn btn-get-started mx-auto">
              Lo quiero
            </a>
          </p>
          <!-- <p class="text-center small">No credit card required</p> -->
        </div>
      </div>
      <!-- End Pricing Item -->

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item featured">
        <!-- <p class="popular">Popular</p> -->
          <h3>🛒 Tienda Online</h3>
          <p class="description">Ideal comenzar a tu sucursal digital y vender por internet</p>
          <h4 class="my-1">
            <sup>$</sup>9,800 <span class="fs-6">MXN</span>
          </h4>
          <ul>
            <li class=""><i class="bi bi-check"></i> <span>Hospedaje y dominio (tumarca.com)<sup>*</sup></span></li>
            <li class=""><i class="bi bi-check"></i> <span>Páginas ilimitadas</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Hasta 7 secciones</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Tarjeta digital estilo "Linktree"</span></li>
            <li class=""><i class="bi bi-check"></i> <span> Optimizado para cualquier dispositivo</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Cambios ilimitados</span></li>
            <li class=""><i class="bi bi-check"></i> <span>60 días de soporte</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Chat (WhatsApp / Messenger)</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Autoadministrable</span></li>
            <li class=""><i class="bi bi-check"></i> <span>Tienda en línea</span></li>
          </ul>
          <p class="mt-5 text-center" data-aos="zoom-in" data-aos-delay="100">
            <a href="<?php echo esc_url(home_url('/precios#cotizador')); ?>" class="btn btn-get-started mx-auto">
              Lo quiero
            </a>
          </p>
        </div>
      </div>
      <!-- End Pricing Item -->    
    </div>
    
  </div>
  <!-- /TABLA PRECIOS -->
  <!-- PRECIOS LINK TREE -->
  <div class="section pb-0">
    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
      <div class="row col-10 mx-auto">
        <h2 data-aos="fade-up">Especial para músicos, artistas y creadores</h2>
      </div>
    </div>
    <!-- End Section Title -->
   
    <div class="container">
      <div class="row gy-4 justify-content-center">
  
        <div class="col-lg-7 imagen-pricing" data-aos="zoom-in" data-aos-delay="100"  style="background-image: url('<?php echo esc_url(get_theme_mod('about_image', get_template_directory_uri() . '/assets/img/mockup-linktree-800.png')); ?>')" >
       
        </div>
  
        <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item featured">
          <!-- <p class="popular">Popular</p> -->
            <h3>🌴 Portafolio-un-solo-link</h3>
            <p class="description">Todos tus enlaces en un solo sitio: redes sociales, música, portafolio, contacto y más.</p>
            <h4 class="my-1">
              <sup>$</sup>1,900
              <span class="fs-6">MXN</span>
            </h4>
            <ul>
              <li class=""><i class="bi bi-check"></i> <span>Enlace personalizado gratuito (tumarca.flatlatte.com)<sup>*</sup></span></li>
              <li class=""><i class="bi bi-check"></i> <span>1 página</span></li>
              <li class=""><i class="bi bi-check"></i> <span>Hasta 3 secciones</span></li>
              <li class=""><i class="bi bi-check"></i> <span>Tarjeta digital estilo "Linktree"</span></li>
              <li class=""><i class="bi bi-check"></i> <span> Optimizado para todos los dispositivos</span></li>
              <li class=""><i class="bi bi-check"></i> <span>2 revisiones</span></li>
            </ul>
            <p class="mt-5 text-center" data-aos="zoom-in" data-aos-delay="100">
              <a href="<?php echo esc_url(home_url('/precios#cotizador')); ?>" class="btn btn-get-started mx-auto">
                Lo quiero
              </a>
          </p>
          </div>
        </div>
        <!-- End Pricing Item -->
       
      </div>
    </div>
  </div>
  <!-- / PRECIOS LINK TREE -->
  <!-- Modulos Extra Section -->
  <div class="section extra pb-0">
    <h2 class="text-center mb-5" data-aos="zoom-in" data-aos-delay="100">Agrega funcionalidades</h2>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-pencil-square fs-3"></i>
              <h5 class="card-title">Autoadministrable</h5>
              <p class="card-text">Cambia textos e imágenes tú mismo, sin necesidad de tocar el código.</p>
              <span class="fs-6">$1,500 MXN</span>
            </div>
          </div>
        </div>
  
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-pencil fs-3"></i>
              <h5 class="card-title">Blog</h5>
              <p class="card-text">Agrega una sección de blog para compartir noticias, artículos o novedades que puedes actualizar tú mismo.</p>
              <span class="fs-6">$1,500 MXN</span>
            </div>
          </div>
        </div>
        
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-chat-left-text fs-3"></i>
              <h5 class="card-title">Chat</h5>
              <p class="card-text">Conecta con tus clientes en tiempo real a través de WhatsApp o Messenger.</p>
              <span class="fs-6">$900 MXN</span>
            </div>
          </div>
        </div>
        
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-calendar2-check fs-3"></i>
              <h5 class="card-title">Sistema de reservaciones</h5>
              <p class="card-text">Permite a tus clientes agendar citas, clases o servicios directamente desde tu sitio.</p>
              <span class="fs-6">$1,500 MXN</span>
            </div>
          </div>
        </div>
  
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-file-earmark-text fs-3"></i>
              <h5 class="card-title">Redacción de contenido </h5>
              <p class="card-text">Creamos el texto de tu sitio usando tu estilo y objetivos.</p>
              <span class="fs-6">$1,500 MXN</span>
            </div>
          </div>
        </div>
  
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
              <i class="bi bi-globe fs-3"></i>
              <h5 class="card-title">Dominio personalizado</h5>
              <p class="card-text">Agrega un dominio (tumarca.com) y hospedaje por 1 año.</p>
              <span class="fs-6">$700 MXN</span>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </div>
  <!-- /Modulos Extra Section -->
  <!-- Soporte y mantenimiento Section -->
  <div class="section soporte pb-0">
    <div class="container">
      <h2 class="text-center mb-5" data-aos="zoom-in" data-aos-delay="100">Soporte y mantenimiento</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
        
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <i class="bi bi-gear fs-3"></i>
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Soporte mensual básico </h5>
                <p class="fs-6">$300<sup>**</sup> MXN</p>
              </div>
              <ul class="">
                <li class="na"><i class="bi bi-x"></i> <span>Actualización de texto o blog (máximo 4 artículos)</span></li>
                <li class=""><i class="bi bi-check"></i> <span>Mantenimiento técnico</span></li>
                <li class=""><i class="bi bi-check"></i> <span>Respaldo de seguridad</span></li>
                <li class=""><i class="bi bi-check"></i> <span> Renovación anual (tumarca.com) </span></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <i class="bi bi-wrench-adjustable-circle fs-3"></i>
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Soporte mensual Pro</h5>
                <p class="fs-6">$550<sup>**</sup> MXN</p>
              </div>
              <ul class="">
                <li class=""><i class="bi bi-check"></i> <span>Actualización de texto o blog (máximo 4 artículos)</span></li>
                <li class=""><i class="bi bi-check"></i> <span>Mantenimiento técnico</span></li>
                <li class=""><i class="bi bi-check"></i> <span>Respaldo de seguridad</span></li>
                <li class=""><i class="bi bi-check"></i> <span> Renovación anual (tumarca.com)</span></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <i class="bi bi-repeat fs-3"></i>
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Renovación anual <br><span class="fs-6">(🌴 Portfolio-un-solo-link)</span></h5>
                <p class="fs-6">$400<sup>**</sup> MXN</p>
              </div>
              <ul class="">
                <li class=""><i class="bi bi-check"></i> <span>Enlace personalizado por 1 año (tumarca.flatlatte.com) </span></li>
                <li class=""><i class="bi bi-check"></i> <span>Mantenimiento técnico</span></li>
                <li class=""><i class="bi bi-check"></i> <span>Respaldo de seguridad</span></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <i class="bi bi-repeat fs-3"></i>
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Renovación anual</h5>
                <p class="fs-6">$1,200<sup>**</sup> MXN</p>
              </div>
              <ul class="">
                <li class=""><i class="bi bi-check"></i> <span>Dominio y hospedaje por 1 año (tumarca.com) </span></li>
                <li class=""><i class="bi bi-check"></i> <span>Mantenimiento técnico</span></li>
                <li class=""><i class="bi bi-check"></i> <span>Respaldo de seguridad</span></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- notas al pie -->
        <div>
          <ul class="nota-al-pie">
            <li data-aos="zoom-in-right" data-aos-delay="" class="mb-0 primera-nota">Dominio y hospedaje gratis por un año</li>
            <li data-aos="zoom-in-right" data-aos-delay="" class="mb-0 segunda-nota">Precio sujeto a cambio</li>
            <li data-aos="zoom-in-right" data-aos-delay="100" class="m-0">Todos los precios incluyen I.V.A.</li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <!-- /Soporte y mantenimiento Section -->
</section>
<!-- /Pricing Section -->

<!-- COTIZADOR -->
<section class="section cotizador">
  <div id="cotizador" class="container">
    <h1 class="text-md-center mb-5" data-aos="zoom-in" data-aos-delay="100">Cotiza tu proyecto</h1>
    <div class="row row-cols-1 align-items-strench">
      <div class="col col-lg-6">
        <div class="cotizador-box">
          <h3>Elige tu paquete base:</h3>
          <label><input type="radio" name="paquete" value="1900" data-label="Portafolio-un-solo-link">🌴 Portafolio-un-solo-link ($1,900)</label>
          <label><input type="radio" name="paquete" value="3500" data-label="Básico">🎯 Básico ($3,500)</label>
          <label><input type="radio" name="paquete" value="5100" data-label="Pro">🚀 Pro ($5,100)</label>
          <label><input type="radio" name="paquete" value="9800" data-label="Tienda Online">🛒 Tienda Online ($9,800)</label>
        </div>     
        <div class="cotizador-box">
          <h3>Agrega:</h3>
          <label><input type="checkbox" class="extra" value="700" data-label="Dominio personalizado">Dominio personalizado($700)</label>
          <label><input type="checkbox" class="extra" value="900" data-label="Chat">Chat ($900)</label>
          <label><input type="checkbox" class="extra" value="1500" data-label="Sitio autoadministrable">Sitio autoadministrable ($1,500)</label>
          <label><input type="checkbox" class="extra" value="1500" data-label="Blog">Blog ($1,500)</label>
          <label><input type="checkbox" class="extra" value="1500" data-label="Sistema de reservaciones">Sistema de reservaciones ($1,500)</label>
          <label><input type="checkbox" class="extra" value="1500" data-label="Redacción de contenido">Redacción de contenido ($1,500)</label>
        </div>
      </div>
      <div class="col col-lg-6"> 
        <div class="resumen row align-content-between">
          <div id="resumen" class="">
            <h3 class=" text-center">Total estimado: <span id="total">$0</span></h3>
          </div>
          <div class="">
            <a id="btn-whatsapp" class="btn-whatsapp mb-1" href="#" target="_blank">Enviar por WhatsApp</a>
          </div>
        </div>

      </div>

    </div>

 </div>

</section>
<!-- /COTIZADOR -->

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