(function() {
  "use strict";
  
  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  // const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  // function mobileNavToogle() {
  //   document.querySelector('body').classList.toggle('mobile-nav-active');
  //   mobileNavToggleBtn.classList.toggle('bi-list');
  //   mobileNavToggleBtn.classList.toggle('bi-x');
  // }
  // mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  // const preloader = document.querySelector('#preloader');
  // console.log("🚀 ~ preloader:", preloader)
  // if (preloader) {
  //   window.addEventListener('load', () => {
  //     preloader.remove();
  //   });
  // }

  document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => preloader.remove());
    }
  });

  document.addEventListener('DOMContentLoaded', function() {
    const scrollTop = document.querySelector('.scroll-top');
    
    if (scrollTop) {
      // Función para mostrar/ocultar el botón
      function toggleScrollTop() {
        if (window.scrollY > 100) {
          scrollTop.classList.add('active');
        } else {
          scrollTop.classList.remove('active');
        }
      }
  
      // Click para volver arriba
      scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
  
      // Eventos para detectar scroll y carga
      window.addEventListener('load', toggleScrollTop);
      window.addEventListener('scroll', toggleScrollTop);
  
      // Fuerza una primera comprobación
      toggleScrollTop();
    } else {
      console.error('ERROR: No se encontró .scroll-top en el DOM.');
    }
  });

  /**
   * COTIZADOR 
   **/

  document.addEventListener('DOMContentLoaded', function () {
    if (!window.location.pathname.includes('/precios')) {
      return; // Salir si no es la página correcta
    }

    const radios = document.querySelectorAll('input[name="paquete"]');
    const checkboxes = document.querySelectorAll('.extra');
    const totalDisplay = document.getElementById('total');
    const resumen = document.getElementById('resumen');
    const btnWhatsapp = document.getElementById('btn-whatsapp');

    const chatCheckbox = document.querySelector('input[data-label="Chat"]'); 
    const dominioCheckbox = document.querySelector('input[data-label="Dominio personalizado"]'); 
    const autoadministrableCheckbox = document.querySelector('input[data-label="Sitio autoadministrable"]'); 

  function actualizarOpciones() {
    const basicoSeleccionado = document.querySelector('input[name="paquete"][data-label="Básico"]').checked;
    const proSeleccionado = document.querySelector('input[name="paquete"][data-label="Pro"]').checked;
    const tiendaSeleccionado = document.querySelector('input[name="paquete"][data-label="Tienda Online"]').checked;
    
    // Si se selecciona Básico, deshabilitamos y desmarcamos el chat
    if (basicoSeleccionado) {
      chatCheckbox.disabled = true;
      chatCheckbox.checked = false;
      dominioCheckbox.disabled = true;
      dominioCheckbox.checked = false;
      autoadministrableCheckbox.disabled = false;
      const tooltip = document.createElement('div');
      tooltip.innerHTML = 'El paquete Básico incluye funcionalidad de chat básica';
      tooltip.className = 'tooltip-chat';
      chatCheckbox.appendChild(tooltip);



    } else if (proSeleccionado || tiendaSeleccionado){
      chatCheckbox.disabled = true;
      chatCheckbox.checked = false;
      dominioCheckbox.disabled = true;
      dominioCheckbox.checked = false;
      autoadministrableCheckbox.disabled = true;
      autoadministrableCheckbox.checked = false;
    } else {
      chatCheckbox.disabled = false;
      dominioCheckbox.disabled = false;
      autoadministrableCheckbox.disabled = false;
    }
    
    calcularTotal();
  }

  function calcularTotal() {
    let total = 0;
    let resumenHTML = "<h5>Resumen de tu selección:</h5><ul>";
    let mensajeWA = "Hola, estoy interesado en este sitio web:\n";

    radios.forEach(r => {
      if (r.checked) {
        total += parseInt(r.value);
        resumenHTML += `<li><strong>Paquete:</strong> ${r.dataset.label} ($${parseInt(r.value).toLocaleString()})</li>`;

        if (r.dataset.label == 'Básico') {
          resumenHTML += `
            <ul class="resumen-incluye"> Incluye:  
              <li>Dominio personalizado</li>
              <li>Chat</li>
            </ul>
            `;
        } else if (r.dataset.label == 'Pro' || r.dataset.label == 'Tienda Online') {
          resumenHTML += `
            <ul class="resumen-incluye"> Incluye:  
              <li>Dominio personalizado</li>
              <li>Chat</li>
              <li>Sitio autoadministrable</li>
            </ul>
         `;
        }


        mensajeWA += `• Paquete: ${r.dataset.label} ($${r.value})\n`;
      }
    });

    resumenHTML += `<li>Extras:<ul class="resumen-incluye">`;

    checkboxes.forEach(c => {
      if (c.checked && !c.disabled) { // Solo sumamos si no está deshabilitado
        total += parseInt(c.value);
        resumenHTML += `<li>${c.dataset.label} ($${parseInt(c.value).toLocaleString()})</li>`;
        mensajeWA += `• Extra: ${c.dataset.label} ($${c.value})\n`;
      }
    });

    resumenHTML += "</ul></li></ul>";
    resumenHTML += `<p class="total-estimado"><strong>Total estimado: $${total.toLocaleString()}</strong></p>`;
    mensajeWA += `\nTotal: $${total.toLocaleString()}`;

    totalDisplay.textContent = `$${total.toLocaleString()}`;
    resumen.innerHTML = resumenHTML;

    // Reemplaza el número con tu WhatsApp
    let numero = "5219223400366";
    btnWhatsapp.href = `https://wa.me/${numero}?text=${encodeURIComponent(mensajeWA)}`;
  }

  radios.forEach(r => r.addEventListener('change', actualizarOpciones));
  checkboxes.forEach(c => c.addEventListener('change', calcularTotal));

  // Inicializamos el estado al cargar la página
  actualizarOpciones();
  });

})();