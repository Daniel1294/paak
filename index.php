<?php
/**
 * La plantilla principal del tema.
 */
get_header();
?>

<!-- Sección de Inicio -->
<section id="inicio" class="hero">
    <div class="hero-content">
        <h1>Bienvenidos a PAAK</h1>
        <p>Líderes en mecánica industrial de precisión en Ecuador</p>
        <!-- Botón de llamada a la acción -->
        <button onclick="window.location.href='#contacto'">Contáctanos</button>
    </div>
</section>

<!-- Sección Quiénes Somos -->
<section id="quienes-somos" class="about-us">
    <h2>Quiénes Somos</h2>
    <div class="about-us-content">
        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/quienes-somos.jpg" alt="Equipo de PAAK Mecánica Industrial">
        <div class="about-us-text">
            <p>
                Fundada hace más de 20 años, <strong>PAAK Mecánica Industrial</strong> ha sido sinónimo de precisión y calidad en el sector industrial ecuatoriano. Nacimos para satisfacer las necesidades de mantenimiento y creación de maquinaria para empresas dedicadas a la producción de elásticos. Con el tiempo, expandimos nuestros servicios a diversas industrias, adaptándonos a los desafíos tecnológicos y a las demandas del mercado.
            </p>
            <p>
                Nuestra misión es proporcionar soluciones mecánicas innovadoras y personalizadas que impulsen el crecimiento y eficiencia de nuestros clientes. Nos enorgullece contar con un equipo altamente calificado y maquinaria de última generación que nos permite abordar proyectos de cualquier complejidad.
            </p>
            <p>
                En PAAK, creemos en construir relaciones a largo plazo basadas en la confianza, el compromiso y la excelencia. Nuestra visión es ser la opción número uno en Ecuador para quienes buscan calidad, precisión y servicio excepcional en mecánica industrial.
            </p>
        </div>
    </div>
</section>

<!-- Sección Servicios -->
<section id="servicios" class="services">
    <h2>Servicios</h2>
    <div class="services-container">
        <!-- Servicio 1 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/torno.jpg" alt="Servicio de Torno">
            <h3>Torno</h3>
            <p>Servicio profesional de torneado para piezas de precisión.</p>
        </div>
        <!-- Servicio 2 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/fresa.jpg" alt="Servicio de Fresa">
            <h3>Fresa</h3>
            <p>Fresado de alta precisión para diversas aplicaciones industriales.</p>
        </div>
        <!-- Servicio 3 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/torno-cnc.jpg" alt="Servicio de Torno CNC">
            <h3>Torno CNC</h3>
            <p>Tecnología CNC para producción eficiente y precisa.</p>
        </div>
        <!-- Servicio 4 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/fresa-cnc.jpg" alt="Servicio de Fresa CNC">
            <h3>Fresa CNC</h3>
            <p>Fresado CNC para proyectos complejos y detallados.</p>
        </div>
        <!-- Servicio 5 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/corte-plasma.jpg" alt="Servicio de Corte Plasma">
            <h3>Corte Plasma</h3>
            <p>Cortes precisos en diversos materiales con tecnología de plasma.</p>
        </div>
        <!-- Servicio 6 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/desarrollo-piezas.jpg" alt="Desarrollo de Piezas">
            <h3>Desarrollo de Piezas</h3>
            <p>Fabricación de piezas a medida según tus necesidades.</p>
        </div>
        <!-- Servicio 7 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/desarrollo-maquinaria.jpg" alt="Desarrollo de Maquinaria">
            <h3>Desarrollo de Maquinaria</h3>
            <p>Diseño y fabricación de maquinaria especializada.</p>
        </div>
        <!-- Servicio 8 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/escaneo-3d.jpg" alt="Servicio de Escaneo 3D">
            <h3>Escaneo 3D</h3>
            <p>Digitalización de objetos para ingeniería inversa y diseño.</p>
        </div>
        <!-- Servicio 9 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imagenes/impresion-3d.jpg" alt="Servicio de Impresión 3D">
            <h3>Impresión 3D</h3>
            <p>Prototipado rápido y fabricación de piezas con impresión 3D.</p>
        </div>
    </div>
</section>

<!-- Sección Testimonios -->
<section id="testimonios" class="testimonials">
    <h2>Testimonios</h2>
    <div class="testimonials-container">
        <!-- Aquí podrás agregar testimonios cuando estén disponibles -->
        <p>Próximamente añadiremos testimonios de nuestros clientes satisfechos.</p>
    </div>
</section>

<!-- Sección Contacto -->
<section id="contacto" class="contact">
    <h2>Contacto</h2>
    <div class="contact-info">
        <p>Para consultas y cotizaciones, contáctanos a través de los siguientes medios:</p>
        <ul>
            <li><strong>Teléfono:</strong> <a href="tel:+593987654321">+593 98 765 4321</a></li>
            <li><strong>WhatsApp:</strong> <a href="https://wa.me/593987654321" target="_blank">Enviar mensaje</a></li>
            <li><strong>Correo Electrónico:</strong> <a href="mailto:info@paak.com">info@paak.com</a></li>
            <li><strong>Dirección:</strong> Av. Industrial #123, Quito, Ecuador</li>
        </ul>
        <!-- Enlaces a redes sociales -->
        <div class="social-media">
            <a href="https://www.facebook.com/paak" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/iconos/facebook.png" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/paak" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/iconos/instagram.png" alt="Instagram">
            </a>
            <a href="https://www.linkedin.com/company/paak" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/iconos/linkedin.png" alt="LinkedIn">
            </a>
            <!-- Agrega otras redes sociales si es necesario -->
        </div>
    </div>
    <!-- Mapa de Ubicación -->
    <div class="map-container">
        <!-- Reemplaza el 'src' con el enlace de tu ubicación en Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" title="Mapa de Ubicación"></iframe>
    </div>
</section>

<?php
get_footer();
?>
