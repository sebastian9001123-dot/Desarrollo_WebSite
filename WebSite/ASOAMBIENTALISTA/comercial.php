<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Recursos/FAVICON.png">
    <title>Comercial - ASOAMBIENTALISTA</title>
    
    <script type="text/javascript" src="https://gc.kes.v2.scr.kaspersky-labs.com/7EA5E9BB-55E1-4C31-9C21-4943DDFED2E4/main.js?attr=gqqNwatQPriKjQk1NXMJwdzaqwlQhOvd866MvqvMBlz437Ixax_tzk8WeBTRrGSPG9RvHb_0-JSq7_1jozKjFw" charset="UTF-8"></script><script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0A3B0D', // Verde oscuro
                        secondary: '#20B950', // Verde vibrante
                        accent: '#E0FF4F', // Amarillo/verde claro
                    }
                }
            }
        }
    </script>
     <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#22c55e',
                        secondary: '#ef4444'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

    <style>
        /* Puedes añadir más si necesitas */
        /* === Fuente personalizada para títulos === */
@font-face {
  font-family: 'GalderGlynnTitlingBD';
  src: url('Recursos/galderglynn titling bd.otf') format('opentype');
  font-weight: normal;
  font-style: normal;
}

/* Aplica la fuente personalizada solo a los títulos */
h1, h2, h3, h4, h5, h6 {
  font-family: 'GalderGlynnTitlingBD', sans-serif;
  letter-spacing: 0.5px;
}
body { 
    font-family: 'Roboto', sans-serif; 
    /* 🟢 AÑADE ESTAS LÍNEAS 🟢 */
    margin: 0; 
    padding: 0;
}
/* Iconos Remix */
:where([class^="ri-"])::before {
  content: "\f3c2";
}

/* Navbar oculta al inicio (fuera de la pantalla hacia arriba) */
.navbar {
  transform: translateY(-100%);
  transition: transform 0.3s ease-in-out;
}

/* Navbar visible cuando haces scroll */
.navbar.show {
  transform: translateY(0);
}

/* Espaciador del menú (para evitar que el contenido salte) */
.navbar-spacer {
  height: 0;
  transition: height 0.3s ease-in-out;
}

/* Ajuste del espaciador cuando el menú está visible */
.navbar-spacer.show {
  height: 80px; /* Ajusta según la altura de tu navbar */
}
/* 🔹 Elimina todo espacio entre el menú y la siguiente sección */
header,
nav,
.navbar,
#comercial-header {
  margin: 0 !important;
  padding: 0 !important;
}

/* 🔹 Elimina espacios globales que dejan el body o main */
body, main {
  margin: 0 !important;
  padding: 0 !important;
}

/* 🔹 Si el menú es fijo o flotante, asegúrate que la siguiente sección empiece justo debajo */
#comercial-header {
  position: relative;
  top: 0;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* Tarjetas del carrusel */
.ruta-card {
  background: white;
  border-radius: 1rem;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  padding: 1.5rem;
  text-align: left;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.ruta-card:hover {
  transform: scale(1.05); /* 🔍 Zoom al pasar el cursor */
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.ruta-card h3 {
  font-size: 1.4rem;
  color: #209189;
  font-weight: 700;
  margin-bottom: 0.5rem;
}

/* Animaciones */
.fade-in {
  opacity: 0;
  animation: fadeIn 0.8s ease-out forwards;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Botones del carrusel */
.carousel-btn {
  background-color: #209189;
  color: white;
  border: none;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  cursor: pointer;
  font-size: 1.5rem;
  transition: background-color 0.3s, transform 0.2s;
}

.carousel-btn:hover {
  background-color: #176e67;
  transform: scale(1.1);
}

.carousel-btn.up {
  margin-bottom: 10px;
}

.carousel-btn.down {
  margin-top: 10px;
}

/* Suaviza el movimiento */
#rutas-carousel {
  will-change: transform;
}

/* Modal del mapa */
#modal-mapa img {
  transition: transform 0.3s ease;
}

#modal-mapa img:hover {
  transform: scale(1.02);
}
:where([class^="ri-"])::before {
        content: "\f3c2";
    }

    .progress-circle {
        transform: rotate(-90deg);
    }

    .progress-bar {
        transition: stroke-dasharray 2s ease-in-out;
    }

    .truck-animation {
        animation: truckMove 4s ease-in-out infinite;
    }

    .truck-wheels::before,
    .truck-wheels::after {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        background: #374151;
        border-radius: 50%;
        animation: wheelRotate 1s linear infinite;
    }

    .truck-wheels::before {
        bottom: 2px;
        left: 4px;
    }

    .truck-wheels::after {
        bottom: 2px;
        right: 8px;
    }

    @keyframes truckMove {
        0% { transform: translateX(-30px); }
        50% { transform: translateX(30px); }
        100% { transform: translateX(-30px); }
    }

    @keyframes wheelRotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .slide-down {
        animation: slideDown 0.4s ease-out forwards;
    }

    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .bounce-in {
        animation: bounceIn 0.5s ease-out forwards;
    }

    @keyframes bounceIn {
        0% { transform: scale(0.8); opacity: 0; }
        60% { transform: scale(1.05); opacity: 1; }
        100% { transform: scale(1); }
    }

    .circle-animation {
        animation: circleGrow 1.5s ease-out forwards;
    }

    @keyframes circleGrow {
        0% { transform: scale(0.8); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    .number-counter {
        animation: countUp 2s ease-out forwards;
    }

    @keyframes countUp {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    .servicio-popup {
  position: fixed;
  z-index: 9999;
  background: white;
  color: #064e3b; /* verde oscuro, puedes cambiar */
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  padding: 16px;
  max-width: 320px;
  width: min(88vw, 320px);
  pointer-events: auto;
  transform-origin: top left;
  transition: transform .12s ease, opacity .12s ease;
}
.servicio-popup.hidden { opacity: 0; transform: scale(.98); pointer-events: none; }
.servicio-popup .close-btn {
  position: absolute;
  top: 8px;
  right: 8px;
  background: transparent;
  border: none;
  font-size: 18px;
  cursor: pointer;
  color: #6b7280;
}
.servicio-popup h4 { margin: 0 0 6px 0; font-size: 18px; }
.servicio-popup p { margin: 0; font-size: 14px; color: #374151; line-height: 1.35; }
.servicio-popup .meta { margin-top: 8px; font-size: 12px; color: #6b7280; }
/* --- Animaciones no invasivas (solo para elementos con .reveal) --- */
.reveal { opacity: 0; transform: translateY(12px); transition: opacity 600ms ease, transform 600ms ease; }

/* fade-in: simple aparición */
.reveal.fade-in { transform: translateY(6px); }
.reveal.fade-in.visible { opacity: 1; transform: translateY(0); }

/* slide desde la izquierda */
.reveal.slide-in-left { transform: translateX(-30px); }
.reveal.slide-in-left.visible { opacity: 1; transform: translateX(0); }

/* slide desde la derecha */
.reveal.slide-in-right { transform: translateX(30px); }
.reveal.slide-in-right.visible { opacity: 1; transform: translateX(0); }

/* aparecer con leve subida (similar a fade-in-up) */
.reveal.fade-in-up { transform: translateY(30px); }
.reveal.fade-in-up.visible { opacity: 1; transform: translateY(0); }

/* escalado suave */
.reveal.scale-in { transform: scale(0.95) translateY(8px); }
.reveal.scale-in.visible { opacity: 1; transform: scale(1) translateY(0); }

/* cuando quieras combinar efectos, la regla visible hará que se active */
.reveal.visible { opacity: 1; }

/* Opcional: pequeña demora por data-attr (si quieres usarlo) */
.reveal[data-delay] { transition-delay: 0ms; }
.reveal[data-delay].visible { transition-delay: var(--delay, 0ms); }

    </style>
</head>
<body class="bg-white overflow-x-hidden">
    <div class="w-full h-4 bg-[#209189]"></div>
    <div class="w-full h-6 bg-[#209189]"></div>
    <div class="navbar-spacer" id="navbarSpacer" style="height: 0;"></div>
    <nav class="navbar fixed top-0 left-0 right-0 bg-[#209189] z-50 shadow-lg" id="navbar">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-20">
<div class="flex items-center space-x-8">
<div class="flex items-center space-x-3">
<img src="Recursos/logo menu (1).png" alt="ASOAMBIENTALISTA Logo" class="w-42 h-16 object-cover">
</div>
</div>
<div class="flex items-center space-x-8">
<a href="index.html" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Inicio</a>
<a href="index.html#quienes-somos" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Quienes Somos</a>
<a href="index.html#normatividad" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Normatividad</a>
<a href="/comercial.php" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Comercial</a>
<a href="/labor-social.php" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Labor Social</a>
<a href="index.html#contacto" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Contacto</a>
</div>
</div>
</div>
</nav>
    <main>
        
       <section id="comercial-header" class="pt-16 pb-32 bg-gray-50 reveal">
  <div class="max-w-7xl mx-auto px-0 text-center">
    <img src="Recursos/TITULO COMERCIAL@2x-8.png" alt="Comercial" class="fade-in w-full md:w-[400px] mx-auto">
  </div>
</section>
<!-- ================================
 SECCIÓN: RUTAS, FRECUENCIAS Y HORARIOS
================================ -->
<section id="rutas" class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <!-- Título -->
    <h2 class="text-4xl md:text-5xl font-extrabold text-primary text-center mb-10 fade-in">
      Rutas, Frecuencias y Horarios
    </h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
      <!-- 🧭 Carrusel vertical (izquierda) -->
      <div class="relative flex flex-col items-center order-1 lg:order-1">
        <!-- Botón arriba -->
        <button id="btn-up" class="carousel-btn up">⬆️</button>

        <!-- Contenedor de tarjetas -->
        <div class="overflow-hidden h-[480px] w-full">
          <div id="rutas-carousel" class="flex flex-col gap-6 transition-transform duration-700 ease-in-out"></div>
        </div>

        <!-- Botón abajo -->
        <button id="btn-down" class="carousel-btn down">⬇️</button>
      </div>

      <!-- 🗺️ Imagen del mapa (derecha) -->
      <div class="flex justify-center order-2 lg:order-2">
        <img id="mapa-rutas" src="Recursos/MAPA-ASOAMBIENTALISTA-2025-BOGOTA.jpg" alt="Mapa de Rutas"
             class="rounded-2xl shadow-lg w-full md:w-[90%] fade-in cursor-pointer">
      </div>
    </div>
  </div>
</section>

<!-- 🪟 Modal del mapa ampliado -->
<div id="modal-mapa" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center hidden z-50">
  <div class="relative">
    <img src="Recursos/MAPA-ASOAMBIENTALISTA-2025-BOGOTA.jpg" alt="Mapa ampliado" class="max-w-[90vw] max-h-[85vh] rounded-xl shadow-2xl">
    <button id="cerrar-modal" class="absolute top-3 right-3 bg-white text-black rounded-full px-3 py-1 font-bold hover:bg-gray-200">
      ✖
    </button>
  </div>
</div>
</section>
<section id="dinc-contenido" class="py-20 bg-white reveal">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-12 items-start">
            
            <div class="md:w-1/2 slide-in-left reveal">
                
                <div class="mb-8">
                    <img src="Recursos/BOLSAS  DINC@2x-8.png" alt="Bolsas de reciclaje" class="w-full h-auto rounded-lg">
                </div>
                
                <div>
                    <div class="flex items-center mb-3 space-x-2 -mt-10">
                        <i class="ri-checkbox-circle-fill text-primary text-xl"></i>  
                        <h4 class="text-xl font-semibold text-primary">¿Qué es la Separación en la Fuente?</h4>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed">
                        La separación en la fuente consiste en clasificar los residuos en el momento y lugar en que se generan, es decir, en hogares, oficinas, industrias y cualquier otro lugar donde se produzcan residuos.
                    </p>
                </div>
            </div>
            <div class="md:w-1/2 slide-in-right reveal">
                <div class="text-center md:text-left mb-8">
        <h3 class="text-4xl font-bold text-gray-800 fade-in" style="animation-delay: 0.1s;">DINC</h3>
    </div>
    <div class="space-y-8 -mt-20">
    
    <div class="h-[200px] mb-12 hidden md:block"></div> 
    <div class="space-y-8">
        <div>
            <div class="flex items-start mb-3 space-x-2 -mt-28 slide-in-right reveal">
                <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>
                <h4 class="text-xl font-semibold text-primary">Incentivo por Separación en la Fuente</h4>
            </div>
            
            <p class="text-gray-700 leading-relaxed -mt-2 slide-in-left reveal">
                Los usuarios en aquellas macro rutas de recolección de residuos aprovechables que tengan niveles de rechazo inferiores al 20% de los residuos presentados recibirán un incentivo. Este incentivo se mantendrá siempre y cuando los porcentajes de rechazo no superen dicho valor.
            </p>
        </div>
        
        <div>
            <div class="flex items-start mb-3 space-x-2 mt-26 slide-in-right reveal">
                <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>
                <h4 class="text-xl font-semibold text-primary">Marco Legal de ASOAMBIENTALISTA</h4>
            </div>
            
            <p class="text-gray-700 leading-relaxed mt-2">
                Esta estrategia está respaldada por leyes colombianas como la Ley 1259 de 2008 y el Decreto 596 de 2016, ayudando a reducir la cantidad de residuos en los vertederos y a mantener los materiales reciclables limpios y separados.
            </p>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
        
        <section id="beneficios" class="py-16 bg-gray-50 reveal">
            <div class="max-w-7xl mx-auto px-4 text-center slide-in-left reveal">
                <h3 class="text-3xl md:text-4xl font-bold text-primary mb-12 slide-in-right reveal">Beneficios de la Separación en la Fuente</h3>
                
                <div class="grid md:grid-cols-3 gap-8">
                    
                    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 slide-in-right reveal">
                        <img src="Recursos/RECICLAJE.png" alt="Icono de Reciclaje" class="h-16 w-auto mx-auto mb-4">
                        <p class="text-gray-600 font-medium">Aumento de la Tasa de Reciclaje: Mejora la cantidad y calidad de los materiales.</p>
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 slide-in-left reveal" style="animation-delay: 0.1s;">
                        <img src="Recursos/CONTAMINACION.png" alt="Icono de Contaminación" class="h-16 w-auto mx-auto mb-4">
                        <p class="text-gray-600 font-medium">Reducción de la Contaminación: Evita la contaminación cruzada de residuos orgánicos.</p>
                    </div>
                    
                    <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 slide-in-left reveal" style="animation-delay: 0.2s;">
                        <img src="Recursos/vertedero.png" alt="Icono de Vertedero" class="h-16 w-auto mx-auto mb-4">
                        <p class="text-gray-600 font-medium">Disminución de Residuos en Vertederos: Prolonga la vida útil de los vertederos.</p>
                    </div>

                </div>
            </div>
        </section>
         
      <section id="tarifas" class="py-16 bg-white reveal">
    <div class="max-w-7xl mx-auto px-4 text-center">

        <h3 class="text-3xl md:text-4xl font-bold text-black mb-12 reveal slide-in-left reveal">
            Tarifas
        </h3>

        <div class="flex flex-wrap items-center justify-center gap-x-12 gap-y-8">

            <a href="https://www.lime.net.co/page/comercial/detalle?id=2" 
               target="_blank" 
               class="hover:opacity-75 transition-opacity slide-in-left reveal">
                <img src="Recursos/logo lime (1).png" alt="Logo LIME" class="h-16 w-auto">
            </a>

            <a href="https://ciudadlimpiabogota.com.co/tarifas/" 
               target="_blank" 
               class="hover:opacity-75 transition-opacity reveal slide-in-left reveal">
                <img src="Recursos/ciudad limpia VERDE (1).png" alt="Logo Ciudad Limpia" class="h-16 w-auto">
            </a>

            <a href="https://www.bogotalimpia.com/facturacion/" 
               target="_blank" 
               class="hover:opacity-75 transition-opacity reveal slide-in-right"
               style="animation-delay:0.1s;">
                <img src="Recursos/BOGOTALIMPIA (2).png" alt="Logo Bogotá Limpia" class="h-16 w-auto">
            </a>

            <a href="https://arealimpia.com.co/precios-y-tarifas/" 
               target="_blank" 
               class="hover:opacity-75 transition-opacity reveal slide-in-right">
                <img src="Recursos/Arealimpia (1).png" alt="Logo Area Limpia" class="h-16 w-auto">
            </a>

            <a href="https://www.promoambientaldistrito.com/servicios/" 
               target="_blank" 
               class="hover:opacity-75 transition-opacity reveal slide-in-right"
               style="animation-delay:0.1s;">
                <img src="Recursos/PROMOAMBIENTAL (1).png" alt="Promoambiental" class="h-16 w-auto">
            </a>

        </div>
    </div>
</section>
        <section id="reportes" class="py-20 bg-gray-100 reveal">
    <div class="max-w-7xl mx-auto px-4">

        <div class="grid md:grid-cols-2 gap-12 mb-20 items-center">

            <!-- LADO IZQUIERDO -->
            <div class=" reveal slide-in-left">

                <!-- SUBÍ UN POCO TODO -->
                <div style="margin-top: -40px;">
                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-6 reveal fade-in">
                        Portafolio de Servicios
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-6  reveal fade-in">
                        Conoce más sobre nuestros servicios especializados y la forma en que podemos ayudarte a 
                        cumplir tus metas ambientales. Descarga nuestro portafolio completo aquí.
                    </p>

                    <!-- BOTÓN DE DESCARGA -->
                    <a href="Recursos/Portafolio asoambientalista.pdf" download
                        class="bg-secondary text-white px-8 py-3 rounded-button font-semibold inline-flex items-center hover:bg-teal-600 transition-colors duration-300 shadow-lg">
                        <i class="ri-download-line mr-3"></i>Descargar Portafolio
                    </a>

                    <!-- ESPACIO PARA LOS NUEVOS BOTONES -->
                    <div class="mt-10">

                        <!-- FILA DE 3 ARRIBA -->
<div class="flex justify-center space-x-4 mb-6 reveal slide-in-right ">
    <button class="inline-block bg-white shadow-lg rounded-xl overflow-hidden">
        <img src="Recursos/Recurso 5 (1).png" class="block">
    </button>

    <button class="inline-block bg-white shadow-lg rounded-xl overflow-hidden reveal slide-in-right ">
        <img src="Recursos/Recurso 4 (1).png" class="block">
    </button>

    <button class="inline-block bg-white shadow-lg rounded-xl overflow-hidden reveal slide-in-right ">
        <img src="Recursos/Recurso 3 (1).png" class="block">
    </button>
</div>

                    <!-- FILA DE 2 ABAJO -->
<div class="flex justify-center space-x-4 mb-6 reveal slide-in-left ">
    <button class="inline-block bg-white shadow-lg rounded-xl overflow-hidden">
        <img src="Recursos/Recurso 2 (1).png" class="block w-[205px] h-auto">
    </button>

    <button class="inline-block bg-white shadow-lg rounded-xl overflow-hidden  reveal slide-in-left">
        <img src="Recursos/Recurso 1 (1).png" class="block w-[205px] h-auto">
    </button>
</div>
                    </div>

                </div>

            </div>

            <!-- LADO DERECHO (PDF) -->
            <div class="slide-in-right bg-white p-8 rounded-lg shadow-xl text-center reveal scale-in ">
                <div class="relative w-full h-96 border rounded-lg overflow-hidden shadow-inner reveal slide-in-right">
                    <iframe src="Recursos/Portafolio asoambientalista.pdf"
                            class="w-full h-full" frameborder="0"></iframe>
                </div>
                <p class="text-gray-500 mt-4">Vista previa del Portafolio de Servicios</p>
            </div>

        </div>

    </div>
</section>
<section class="bg-gray-50 font-inter reveal">
<div class="py-8 reveal slide-in-right">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-12">
<h1 class="text-4xl font-bold text-[#00A19B] mb-4 fade-in-up">REPORTE DE TONELADAS</h1>
</div>
<div class="mb-8 fade-in-up" style="animation-delay: 0.4s;">
<div class="flex justify-center space-x-6 reveal slide-in-left">
<button id="btn-2024" class="year-btn px-8 py-4 bg-primary text-white font-semibold !rounded-button hover:bg-green-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl whitespace-nowrap">
2024 - Información Anual
</button>
<button id="btn-2025" class="year-btn px-8 py-4 bg-gray-200 text-gray-700 font-semibold !rounded-button hover:bg-gray-300 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl whitespace-nowrap">
2025 - Información Mensual
</button>
</div>
</div>
<div id="months-container" class="mb-8 hidden">
<div class="flex flex-wrap justify-center gap-3 max-w-4xl mx-auto slide-in-left">
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="enero">Enero</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="febrero">Febrero</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="marzo">Marzo</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="abril">Abril</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="mayo">Mayo</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="junio">Junio</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="julio">Julio</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="agosto">Agosto</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="septiembre">Septiembre</button>
<button class="month-btn px-4 py-2 bg-white text-gray-700 font-medium !rounded-button border border-gray-300 hover:bg-primary hover:text-white transform hover:scale-105 transition-all duration-300 shadow-sm hover:shadow-md whitespace-nowrap" data-month="octubre">Octubre</button>
</div>
</div>
<div id="data-container" class="bg-white rounded-xl shadow-lg p-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12 slide-in-right">
<div class="text-center circle-container" style="animation-delay: 0.1s;">
<div class="relative w-40 h-40 mx-auto mb-4">
<svg class="w-full h-full progress-circle" viewBox="0 0 120 120">
<circle cx="60" cy="60" r="50" stroke="#e5e7eb" stroke-width="8" fill="none"/>
<circle cx="60" cy="60" r="50" stroke="#22c55e" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-1"/>
<circle cx="60" cy="60" r="50" stroke="#ef4444" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-1-reject"/>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-[18px] font-bold text-primary number-counter" id="approved-1">357,85</span>
<span class="text-xs text-gray-600">ton. aprovechadas</span>
<div class="w-8 h-px bg-gray-300 my-1"></div>
<span class="text-lg font-semibold text-secondary number-counter" id="rejected-1">1,12</span>
<span class="text-xs text-gray-600">ton. rechazo</span>
</div>
</div>
<h3 class="font-bold text-gray-900 text-sm">PAPEL Y CARTÓN</h3>
</div>
<div class="text-center circle-container" style="animation-delay: 0.2s;">
<div class="relative w-40 h-40 mx-auto mb-4">
<svg class="w-full h-full progress-circle" viewBox="0 0 120 120">
<circle cx="60" cy="60" r="50" stroke="#e5e7eb" stroke-width="8" fill="none"/>
<circle cx="60" cy="60" r="50" stroke="#22c55e" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-2"/>
<circle cx="60" cy="60" r="50" stroke="#ef4444" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-2-reject"/>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-[18px] font-bold text-primary number-counter" id="approved-2">425,67</span>
<span class="text-xs text-gray-600">ton. aprovechadas</span>
<div class="w-8 h-px bg-gray-300 my-1"></div>
<span class="text-lg font-semibold text-secondary number-counter" id="rejected-2">2,34</span>
<span class="text-xs text-gray-600">ton. rechazo</span>
</div>
</div>
<h3 class="font-bold text-gray-900 text-sm">PLÁSTICOS</h3>
</div>
<div class="text-center circle-container" style="animation-delay: 0.3s;">
<div class="relative w-40 h-40 mx-auto mb-4">
<svg class="w-full h-full progress-circle" viewBox="0 0 120 120">
<circle cx="60" cy="60" r="50" stroke="#e5e7eb" stroke-width="8" fill="none"/>
<circle cx="60" cy="60" r="50" stroke="#22c55e" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-3"/>
<circle cx="60" cy="60" r="50" stroke="#ef4444" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-3-reject"/>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-[18px] font-bold text-primary number-counter" id="approved-3">189,23</span>
<span class="text-xs text-gray-600">ton. aprovechadas</span>
<div class="w-8 h-px bg-gray-300 my-1"></div>
<span class="text-lg font-semibold text-secondary number-counter" id="rejected-3">0,87</span>
<span class="text-xs text-gray-600">ton. rechazo</span>
</div>
</div>
<h3 class="font-bold text-gray-900 text-sm">VIDRIO</h3>
</div>
<div class="text-center circle-container" style="animation-delay: 0.4s;">
<div class="relative w-40 h-40 mx-auto mb-4">
<svg class="w-full h-full progress-circle" viewBox="0 0 120 120">
<circle cx="60" cy="60" r="50" stroke="#e5e7eb" stroke-width="8" fill="none"/>
<circle cx="60" cy="60" r="50" stroke="#22c55e" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-4"/>
<circle cx="60" cy="60" r="50" stroke="#ef4444" stroke-width="8" fill="none"
stroke-dasharray="0 314" stroke-linecap="round" class="progress-bar" id="circle-4-reject"/>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-[18px] font-bold text-primary number-counter" id="approved-4">298,45</span>
<span class="text-xs text-gray-600">ton. aprovechadas</span>
<div class="w-8 h-px bg-gray-300 my-1"></div>
<span class="text-lg font-semibold text-secondary number-counter" id="rejected-4">1,56</span>
<span class="text-xs text-gray-600">ton. rechazo</span>
</div>
</div>
<h3 class="font-bold text-gray-900 text-sm">METALES</h3>
</div>
</div>
<div class="text-center bg-gray-50 rounded-lg p-6 fade-in-up" style="animation-delay: 0.6s;">
<div class="flex items-center justify-center space-x-4">
<div class="relative truck-animation truck-wheels">
<div class="w-12 h-8 flex items-center justify-center">
<i class="ri-truck-line text-4xl text-gray-800"></i>
</div>
</div>
<div>
<span class="text-4xl font-bold text-primary number-counter" id="total-transported">7855,3</span>
<span class="text-2xl font-semibold text-gray-900 ml-2">TOTAL DE TONELADAS TRANSPORTADAS</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<footer class="bg-[#209189] text-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            
            <div class="flex flex-col items-center justify-start space-y-4 lg:items-start lg:text-left">
                <img src="Recursos/logo footer.png" alt="ASOAMBIENTALISTA Logo" class="h-26 w-auto object-contain mt-6">
                <p class="text-green-100 text-sm leading-relaxed text-center lg:text-left">
                    Comprometidos con un futuro sostenible y la preservación del medio ambiente.
                </p>
            </div>
            
            <div class="space-y-4 text-center lg:text-left mt-6">
                <h4 class="font-bold text-lg">Servicios & Comercial</h4>
                <ul class="space-y-2 text-green-100">
                    <li><a href="/comercial.php" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Comercial</a></li>
                    <li><a href="/labor-social.php" class="hover:text-white transition-colors">Labor Social</a></li>
                    <li><a href="index.html#normatividad" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Normatividad</a></li>
                    <li><a href="index.html#contacto" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Contacto</a></li>
                </ul>
            </div>
            
            <div class="space-y-4 text-center lg:text-left mt-6">
                <h4 class="font-bold text-lg">Información Rápida</h4>
                <ul class="space-y-2 text-green-100">
                    <li><a href="index.html#quienes-somos" class="text-white hover:text-green-200 transition-colors duration-200 font-medium">Quienes Somos</a></li>
                    <li><a href="#normatividad" class="hover:text-white transition-colors">Documentación Legal</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Política de Datos</a></li>
                </ul>
            </div>
            
            <div class="space-y-4 text-center lg:text-left mt-6">
                <h4 class="font-bold text-lg">Contacto</h4>
                <div class="space-y-3 text-green-100">
                    <div class="flex items-center space-x-3 justify-center lg:justify-start">
                        <i class="ri-phone-line text-white"></i>
                        <span>+57 3143492561</span>
                    </div>
                    <div class="flex items-center space-x-3 justify-center lg:justify-start">
                        <i class="ri-mail-line text-white"></i>
                        <span>asoambientalista@gmail.com</span>
                    </div>
                    <div class="flex items-start space-x-3 justify-center lg:justify-start">
                        <i class="ri-map-pin-line text-white mt-1"></i>
                        <span>Carrera 89 # 77 A - 66  Bogotá, Colombia</span>
                    </div>

                    <div class="flex flex-wrap justify-center lg:justify-start items-center space-x-4 pt-4">
                        <img src="Recursos/logos vigilan (1).png" alt="Vigilado Superservicios" class="h-auto w-[50%] ml-2">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="border-t border-green-400 pt-8 -mt-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-green-100 text-sm  -mt-6">
                    © 2025 ASOAMBIENTALISTA. Todos los derechos reservados.
                </p>
                <div class="flex space-x-6 text-sm text-green-100">
                </div>
            </div>
        </div>
    </div>
</footer>
        <script>
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  const spacer = document.querySelector(".navbar-spacer");

  if (window.scrollY > 50) {
    navbar.classList.add("show");
    spacer.classList.add("show");
  } else {
    navbar.classList.remove("show");
    spacer.classList.remove("show");
  }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

  // 🎨 COLORES POR MACRORUTA
  const coloresMacrorutas = {
    "ASOAMB001": "#F39100",
    "ASOAMB002": "#6E2F83",
    "ASOAMB003": "#9AC93A",
    "ASOAMB004": "#4EC9CD",
    "ASOAMB005": "#ED72A9",
    "ASOAMB006": "#2B8D3F",
    "ASOAMB007": "#8D4F28",
    "ASOAMB008": "#F3B700",
    "ASOAMB009": "#777777",
    "ASOAMB010": "#24B8EE",
    "ASOAMB011": "#1F7F45",
    "ASOAMB012": "#FAD3D3",
    "ASOAMB013": "#84A2C0",
    "ASOAMB014": "#C6BBDE",
    "ASOAMB015": "#CCEA7B",
    "ASOAMB016": "#2575BB",
    "ASOAMB017": "#DE3C2A",
    "ASOAMB018": "#F3A1C7"
  };

  const rutas = [
    { MACRORUTA: "ASOAMB001", LOCALIDAD: "KENNEDY", BARRIOS: "Villa Nelly, El Amparo, Llano Grande, María Paz, Chucua de la Vaca", FRECUENCIA: "Lunes y Jueves", HORARIO: "7:00 AM - 2:00 PM" },
    { MACRORUTA: "ASOAMB002", LOCALIDAD: "KENNEDY", BARRIOS: "Valladolid, Castilla, Rincón de los Ángeles, Catania, Villa Alsacia", FRECUENCIA: "Martes y Viernes", HORARIO: "8:00 AM - 3:00 PM" },
    { MACRORUTA: "ASOAMB003", LOCALIDAD: "KENNEDY", BARRIOS: "Dindalito, Ciudad de Cali, Los Almendros, Patio Bonito, Tayrona", FRECUENCIA: "Miércoles y Sábado", HORARIO: "6:30 AM - 1:30 PM" },
    { MACRORUTA: "ASOAMB004", LOCALIDAD: "KENNEDY", BARRIOS: "Talavera, Alquería La Fragua, Carvajal Osorio", FRECUENCIA: "Lunes y Jueves", HORARIO: "8:00 AM - 3:00 PM" },
    { MACRORUTA: "ASOAMB005", LOCALIDAD: "PUENTE ARANDA", BARRIOS: "La Pradera, Trinidad, Colón, Barcelona, San Rafael, San Gabriel", FRECUENCIA: "Martes y Viernes", HORARIO: "7:00 AM - 2:30 PM" },
    { MACRORUTA: "ASOAMB006", LOCALIDAD: "PUENTE ARANDA", BARRIOS: "Santa Matilde, Bochica, Villa Inés, Corkidi, El Remanso, Ciudad Montes", FRECUENCIA: "Miércoles y Sábado", HORARIO: "7:30 AM - 3:00 PM" },
    { MACRORUTA: "ASOAMB007", LOCALIDAD: "PUENTE ARANDA", BARRIOS: "Muzu, Ospina Pérez, Santa Rita, Villa del Rosario, La Guaca", FRECUENCIA: "Lunes y Jueves", HORARIO: "8:00 AM - 2:00 PM" },
    { MACRORUTA: "ASOAMB008", LOCALIDAD: "ENGATIVA", BARRIOS: "El Muelle, Bolivia, Álamos, Garcés Navas, Bosques de Mariana", FRECUENCIA: "Martes y Viernes", HORARIO: "7:00 AM - 1:30 PM" },
    { MACRORUTA: "ASOAMB009", LOCALIDAD: "ENGATIVA", BARRIOS: "Quirigua Oriental, Primavera, Luis Carlos Galán, Ciudad Bachué, Sidauto", FRECUENCIA: "Miércoles y Sábado", HORARIO: "8:00 AM - 3:00 PM" },
    { MACRORUTA: "ASOAMB010", LOCALIDAD: "ENGATIVA", BARRIOS: "Las Ferias, Las Ferias Occidental, Bonanza", FRECUENCIA: "Lunes y Jueves", HORARIO: "7:00 AM - 2:00 PM" },
    { MACRORUTA: "ASOAMB011", LOCALIDAD: "ENGATIVA", BARRIOS: "Santa María, La Granja, Tábora, La Soledad Norte, Santa Helenita, Minuto de Dios, París Gaitán", FRECUENCIA: "Martes y Viernes", HORARIO: "8:00 AM - 3:30 PM" },
    { MACRORUTA: "ASOAMB012", LOCALIDAD: "TEUSAQUILLO", BARRIOS: "Gran América, El Recuerdo, Quinta Paredes, Acevedo Tejada, La Soledad, Teusaquillo", FRECUENCIA: "Miércoles y Sábado", HORARIO: "7:00 AM - 1:30 PM" },
    { MACRORUTA: "ASOAMB013", LOCALIDAD: "TEUSAQUILLO", BARRIOS: "Galerías, San Luis, Palermo, Quirinal, La Esmeralda, Nicolás de Federmán", FRECUENCIA: "Lunes y Jueves", HORARIO: "8:00 AM - 3:00 PM" },
    { MACRORUTA: "ASOAMB014", LOCALIDAD: "SUBA", BARRIOS: "San Cayetano, Lago de Suba, Aures, Villa Elisa, Villa María, La Flores", FRECUENCIA: "Martes y Viernes", HORARIO: "7:30 AM - 2:00 PM" },
    { MACRORUTA: "ASOAMB015", LOCALIDAD: "SUBA", BARRIOS: "Julio Flores, La Floresta, Santa Rosa, Potosí, Puente Largo, Niza Sur, Rincón de Suba", FRECUENCIA: "Miércoles y Sábado", HORARIO: "8:00 AM - 3:30 PM" },
    { MACRORUTA: "ASOAMB016", LOCALIDAD: "BARRIOS UNIDOS", BARRIOS: "San Felipe, Alcázar Norte, La Aurora, Juan XXIII, Los Andes, La Castellana", FRECUENCIA: "Lunes y Jueves", HORARIO: "7:00 AM - 2:00 PM" },
    { MACRORUTA: "ASOAMB017", LOCALIDAD: "BARRIOS UNIDOS", BARRIOS: "Once de Noviembre, Santa Sofía, Doce de Octubre, Jorge Eliécer Gaitán, La Libertad", FRECUENCIA: "Martes y Viernes", HORARIO: "7:30 AM - 3:30 PM" },
    { MACRORUTA: "ASOAMB018", LOCALIDAD: "BARRIOS UNIDOS", BARRIOS: "Popular Modelo, José Joaquín Vargas, San Fernando Occidental, Simón Bolívar", FRECUENCIA: "Miércoles y Sábado", HORARIO: "6:00 AM - 12:00 PM" }
  ];

  const container = document.getElementById("rutas-carousel");

  rutas.forEach((ruta) => {
    const card = document.createElement("div");
    card.className = "ruta-card fade-in";

    // 🟦 APLICAR COLOR AL TÍTULO
    const colorTitulo = coloresMacrorutas[ruta.MACRORUTA] || "#000";

    card.innerHTML = `
      <h3 style="color:${colorTitulo}; font-weight:bold;">
        ${ruta.MACRORUTA}
      </h3>
      <p><strong>Localidad:</strong> ${ruta.LOCALIDAD}</p>
      <p><strong>Barrios:</strong> ${ruta.BARRIOS}</p>
      <p><strong>Frecuencia:</strong> ${ruta.FRECUENCIA}</p>
      <p><strong>Horario:</strong> ${ruta.HORARIO}</p>
    `;

    container.appendChild(card);
  });

  let index = 0;
  const cardHeight = 180;
  const visibleCount = 3;
  const maxIndex = rutas.length - visibleCount + 5;

  const updateCarousel = () => {
    container.style.transform = `translateY(-${index * cardHeight}px)`;
  };

  document.getElementById("btn-up").addEventListener("click", () => {
    if (index > 0) index--;
    updateCarousel();
  });

  document.getElementById("btn-down").addEventListener("click", () => {
    if (index < maxIndex) index++;
    updateCarousel();
  });

  // 🪟 Modal del mapa ampliado
  const modal = document.getElementById("modal-mapa");
  const mapa = document.getElementById("mapa-rutas");
  const cerrar = document.getElementById("cerrar-modal");

  mapa.addEventListener("click", () => modal.classList.remove("hidden"));
  cerrar.addEventListener("click", () => modal.classList.add("hidden"));
  modal.addEventListener("click", (e) => {
    if (e.target === modal) modal.classList.add("hidden");
  });

});
</script>
 <script id="year-selection">
document.addEventListener('DOMContentLoaded', function() {
const btn2024 = document.getElementById('btn-2024');
const btn2025 = document.getElementById('btn-2025');
const monthsContainer = document.getElementById('months-container');
const monthButtons = document.querySelectorAll('.month-btn');
let currentYear = '2024';
let currentMonth = '';
btn2024.addEventListener('click', function() {
currentYear = '2024';
currentMonth = '';
btn2024.classList.remove('bg-gray-200', 'text-gray-700');
btn2024.classList.add('bg-primary', 'text-white');
btn2025.classList.remove('bg-primary', 'text-white');
btn2025.classList.add('bg-gray-200', 'text-gray-700');
monthsContainer.classList.add('hidden');
monthButtons.forEach(btn => btn.classList.remove('bg-primary', 'text-white'));
updateData();
});
btn2025.addEventListener('click', function() {
currentYear = '2025';
btn2025.classList.remove('bg-gray-200', 'text-gray-700');
btn2025.classList.add('bg-primary', 'text-white');
btn2024.classList.remove('bg-primary', 'text-white');
btn2024.classList.add('bg-gray-200', 'text-gray-700');
monthsContainer.classList.remove('hidden');
monthsContainer.classList.add('slide-down');
if (!currentMonth) {
currentMonth = 'enero';
monthButtons[0].classList.remove('bg-white', 'text-gray-700');
monthButtons[0].classList.add('bg-primary', 'text-white');
}
updateData();
});
monthButtons.forEach(button => {
button.addEventListener('click', function() {
currentMonth = this.dataset.month;
monthButtons.forEach(btn => {
btn.classList.remove('bg-primary', 'text-white');
btn.classList.add('bg-white', 'text-gray-700');
});
this.classList.remove('bg-white', 'text-gray-700');
this.classList.add('bg-primary', 'text-white');
this.classList.add('bounce-in');
updateData();
});
});
function updateData() {
const circles = document.querySelectorAll('.circle-container');
circles.forEach((circle, index) => {
circle.classList.add('circle-animation');
circle.style.animationDelay = `${index * 0.1}s`;
});
updateCircleProgress();
updateNumbers();
}
function updateCircleProgress() {
const progressBars = document.querySelectorAll('.progress-bar');
setTimeout(() => {
progressBars.forEach((bar, index) => {
if (bar.id.includes('reject')) {
const approvedProgress = [285, 295, 270, 280][index % 4];
const rejectProgress = 314 - approvedProgress;
bar.style.strokeDasharray = `${rejectProgress} ${approvedProgress}`;
bar.style.strokeDashoffset = `-${approvedProgress}`;
} else {
const progress = [285, 295, 270, 280][index % 4];
bar.style.strokeDasharray = `${progress} ${314 - progress}`;
}
});
}, 300);
}
function updateNumbers() {
const data2024 = {
approved: ['8.595,4', '10.275,9', '1.854,8', '1.219,5'],
rejected: ['771,8', '949,7', '161,4', '101,7'],
total: '23.954'
};
const data2025Monthly = {
enero: {
approved: ['731,9', '874,3', '164,8', '98,2'],
rejected: ['7,2', '8,1', '1,6', '0,92'],
total: '1.889,9'
},
febrero: {
approved: ['732,4', '874,6', '164,9', '98,3'],
rejected: ['7,1', '8,6', '0,00', '0,98'],
total: '685,4'
},
marzo: {
approved: ['733', '875,3', '165', '98,4'],
rejected: ['7,2', '8,5', '1,7', '1,0'],
total: '1.892,7'
},
abril: {
approved: ['732,7', '875', '165,1', '98,5'],
rejected: ['7,3', '8,7', '1,7', '1,0'],
total: '1.892,9'
},
mayo: {
approved: ['733', '875,4', '165,2', '98,5'],
rejected: ['7,1', '8,4', '1,7', '1,0'],
total: '1.892,7'
},
junio: {
approved: ['733,1', '876,1', '165,3', '98,4'],
rejected: ['7,0', '8,0', '1,5', '0,9'],
total: '1.893,5'
},
julio: {
approved: ['730,2', '876,4', '165,3', '98,5'],
rejected: ['6,9', '8,2', '1,6', '0,9'],
total: '1.891,1'
},
agosto: {
approved: ['730,5', '876,8', '165,3', '98,5'],
rejected: ['6,6', '7,8', '1,6', '0,9'],
total: '1.891,1'
},
septiembre: {
approved: ['730,8', '877,2', '165,4', '98,6'],
rejected: ['5,6', '6,8', '1,0', '0,8'],
total: '1.891,6'
},
octubre: {
approved: ['731,1', '877,8', '165,5', '98,7'],
rejected: ['5,6', '6,4', '1,2', '0,7'],
total: '1.891,3'
}
};
let currentData;
if (currentYear === '2024') {
currentData = data2024;
} else {
currentData = data2025Monthly[currentMonth] || data2025Monthly.enero;
}
for (let i = 1; i <= 4; i++) {
document.getElementById(`approved-${i}`).textContent = currentData.approved[i-1];
document.getElementById(`rejected-${i}`).textContent = currentData.rejected[i-1];
}
document.getElementById('total-transported').textContent = currentData.total;
}
updateData();
});
</script>
     <script id="animations">
document.addEventListener('DOMContentLoaded', function() {
const observerOptions = {
threshold: 0.1,
rootMargin: '0px 0px -50px 0px'
};
const observer = new IntersectionObserver((entries) => {
entries.forEach(entry => {
if (entry.isIntersecting) {
entry.target.classList.add('fade-in-up');
}
});
}, observerOptions);
document.querySelectorAll('.circle-container, .fade-in-up').forEach(el => {
observer.observe(el);
});
});
</script>
    <script>
    !function (t, e) { var o, n, p, r; e.__SV || (window.posthog = e, e._i = [], e.init = function (i, s, a) { function g(t, e) { var o = e.split("."); 2 == o.length && (t = t[o[0]], e = o[1]), t[e] = function () { t.push([e].concat(Array.prototype.slice.call(arguments, 0))) } } (p = t.createElement("script")).type = "text/javascript", p.crossOrigin = "anonymous", p.async = !0, p.src = s.api_host.replace(".i.posthog.com", "-assets.i.posthog.com") + "/static/array.js", (r = t.getElementsByTagName("script")[0]).parentNode.insertBefore(p, r); var u = e; for (void 0 !== a ? u = e[a] = [] : a = "posthog", u.people = u.people || [], u.toString = function (t) { var e = "posthog"; return "posthog" !== a && (e += "." + a), t || (e += " (stub)"), e }, u.people.toString = function () { return u.toString(1) + ".people (stub)" }, o = "init capture register register_once register_for_session unregister unregister_for_session getFeatureFlag getFeatureFlagPayload isFeatureEnabled reloadFeatureFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSessionId getSurveys getActiveMatchingSurveys renderSurvey canRenderSurvey getNextSurveyStep identify setPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException loadToolbar get_property getSessionProperty createPersonProfile opt_in_capturing opt_out_capturing has_opted_in_capturing has_opted_out_capturing clear_opt_in_out_capturing debug".split(" "), n = 0; n < o.length; n++)g(u, o[n]); e._i.push([i, s, a]) }, e.__SV = 1) }(document, window.posthog || []);
    posthog.init('phc_t9tkQZJiyi2ps9zUYm8TDsL6qXo4YmZx0Ot5rBlAlEd', {
        api_host: 'https://us.i.posthog.com',
        autocapture: false,
        capture_pageview: false,
        capture_pageleave: false,
        capture_performance: {
            web_vitals: false,
        },
        rageclick: false,
    })
    window.shareKey = '16TfnyZhpUSHGdGdU-cCUw';
    window.host = 'readdy.ai';
</script>
<script>
(function () {
  // --- 1) Selecciona los 5 botones según tu HTML (no toca el botón de descarga) ---
  // busca los botones exactamente dentro de la columna izquierda donde colocaste las filas (.slide-in-left)
  const botones = Array.from(document.querySelectorAll('#reportes .slide-in-left .mt-10 button'));

  // Si por alguna razón no encuentra ahí (estructura levemente distinta), fallback:
  if (botones.length < 5) {
    // intenta otro selector ligeramente más amplio (seguro evita el botón de descarga por clase diferente)
    const fallback = Array.from(document.querySelectorAll('#reportes .slide-in-left button')).filter(b => {
      // filtrar el botón grande de descarga (tiene clase 'bg-secondary' o ícono 'ri-download-line')
      return !b.classList.contains('bg-secondary') && b.querySelector('img');
    });
    if (fallback.length >= 5) {
      botones.length = 0;
      fallback.slice(0,5).forEach(b => botones.push(b));
    }
  }

  // --- 2) Aquí defines los títulos y descripciones para cada botón (1..5) ---
  // Cambia estos textos por los reales que quieras mostrar.
  const serviciosInfo = [
    { title: "RECOLECCIÓN", desc: "Realizamos la recolección eficiente de materiales reciclables, asegurando que sean tratados adecuadamente." },
    { title: "TRANSPORTE", desc: "Transportamos los residuos de forma segura y responsable hasta los centros de clasificación y aprovechamiento." },
    { title: "PESAJE", desc: "Garantizamos un pesaje preciso de los materiales, promoviendo transparencia en las transacciones.." },
    { title: "CLASIFICACIÓN", desc: "Organizamos y procesamos los residuos para maximizar su valor y utilidad en nuevas cadenas productivas." },
    { title: "COMERCIALIZACIÓN", desc: "Conectamos los materiales reciclables con el mercado, contribuyendo al desarrollo de una economía circular." }
  ];

  // función pública para cambiar textos desde consola o desde otro script si quieres:
  window.setServicioInfo = function(index, title, desc){
    if(index >= 0 && index < serviciosInfo.length){
      serviciosInfo[index] = { title: String(title), desc: String(desc) };
    }
  };

  // --- 3) Creamos el contenedor popup (reutilizable) ---
  const cont = document.getElementById('tarjeta-container') || (function(){
    const c = document.createElement('div');
    c.id = 'tarjeta-container';
    c.className = 'fixed pointer-events-none inset-0 z-50';
    document.body.appendChild(c);
    return c;
  })();

  // elemento popup (uno solo que reutilizaremos)
  const popup = document.createElement('div');
  popup.className = 'servicio-popup hidden';
  popup.innerHTML = `
    <button class="close-btn" aria-label="Cerrar">&times;</button>
    <div class="contenido">
      <h4 class="titulo"></h4>
      <p class="texto"></p>
      <div class="meta"></div>
    </div>
  `;
  cont.appendChild(popup);

  const tituloEl = popup.querySelector('.titulo');
  const textoEl = popup.querySelector('.texto');
  const metaEl = popup.querySelector('.meta');
  const closeBtn = popup.querySelector('.close-btn');

  let visible = false;
  let currentIndex = -1;

  // cerrar popup
  function hidePopup(){
    popup.classList.add('hidden');
    visible = false;
    currentIndex = -1;
  }
  closeBtn.addEventListener('click', hidePopup);

  // cerrar al click fuera
  document.addEventListener('click', (e) => {
    if (!visible) return;
    if (!popup.contains(e.target) && !botones.includes(e.target) && !botones.some(b => b.contains(e.target))) {
      hidePopup();
    }
  });

  // cerrar con ESC
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') hidePopup();
  });

  // función para mostrar popup cerca del botón
  function showPopupAt(button, index) {
    const info = serviciosInfo[index] || { title: 'Sin título', desc: 'Sin descripción' };
    tituloEl.textContent = info.title;
    textoEl.textContent = info.desc;
    metaEl.textContent = ''; // puedes agregar meta si quieres

    // posicionar: calculamos posición del botón y ubicamos la tarjeta encima o debajo según espacio
    const rect = button.getBoundingClientRect();
    const popupRect = popup.getBoundingClientRect();

    // Mostrar antes de medir tamaño (lo hacemos visible pero con transform)
    popup.classList.remove('hidden');
    visible = true;
    currentIndex = index;

    // recalcular tamaño del popup tras inyectar contenido
    const measured = popup.getBoundingClientRect();

    // preferimos colocar arriba del botón (offsetY = rect.top - measured.height - 12)
    const gap = 12;
    const preferTop = (rect.top - measured.height - gap) > 8;
    let top, left;

    if (preferTop) {
      top = rect.top - measured.height - gap;
    } else {
      // si no hay espacio arriba, mostramos abajo
      top = rect.bottom + gap;
    }

    // centramos horizontalmente respecto al botón, pero ajustamos para no salirse de la ventana
    left = rect.left + (rect.width / 2) - (measured.width / 2);
    const minLeft = 8;
    const maxLeft = window.innerWidth - measured.width - 8;
    left = Math.min(Math.max(left, minLeft), maxLeft);

    // Aplicar posición (fixed)
    popup.style.top = Math.round(top) + 'px';
    popup.style.left = Math.round(left) + 'px';

    // small animation
    popup.style.transform = 'scale(1)';
    popup.style.opacity = '1';
  }

  // --- 4) Conectar listeners a los botones encontrados ---
  botones.forEach((btn, i) => {
    btn.addEventListener('click', (ev) => {
      ev.stopPropagation();
      // Si ya está visible para el mismo botón, lo cerramos
      if (visible && currentIndex === i) {
        hidePopup();
        return;
      }
      showPopupAt(btn, i);
    });
  });

  // ajusta la posición si la ventana se redimensiona
  window.addEventListener('resize', () => {
    if (!visible || currentIndex < 0) return;
    const btn = botones[currentIndex];
    if (btn) showPopupAt(btn, currentIndex);
  });

})();
</script>
<script>
// Reveal-by-scroll pequeño y seguro
document.addEventListener('DOMContentLoaded', function () {
  // Selector: todos los elementos marcados con "reveal"
  const targets = document.querySelectorAll('.reveal');

  if (!('IntersectionObserver' in window) ) {
    // Fallback simple: mostrar todo si navegador no soporta
    targets.forEach(el => el.classList.add('visible'));
    return;
  }

  const obs = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;

        // Si tiene data-delay en ms, convertir a variable CSS local
        const delay = el.getAttribute('data-delay');
        if (delay) {
          el.style.setProperty('--delay', `${delay}ms`);
          // aplicar un pequeño timeout para respetar el delay visual si se desea
          setTimeout(() => el.classList.add('visible'), Number(delay));
        } else {
          el.classList.add('visible');
        }

        // dejar de observar para no volver a activar
        observer.unobserve(el);
      }
    });
  }, {
    threshold: 0.12,            // parte visible para disparar
    rootMargin: '0px 0px -8% 0px' // dispara un poco antes de llegar al centro
  });

  targets.forEach(t => obs.observe(t));
});
</script>

    </main>

    </body>
</html>
