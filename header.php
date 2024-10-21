<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="PAAK es líder en soluciones de mecánica industrial de precisión en Ecuador. Ofrecemos servicios de torno, fresa, CNC, corte plasma, escaneo e impresión 3D.">
    <meta name="keywords" content="mecánica industrial, torno, fresa, CNC, corte plasma, escaneo 3D, impresión 3D, Ecuador, PAAK">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta etiquetas Open Graph -->
    <meta property="og:title" content="PAAK - Mecánica Industrial de Precisión">
    <meta property="og:description" content="Tu aliado en soluciones de mecánica industrial en Ecuador.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/imagenes/compartir.jpg"> <!-- Reemplaza con la URL de una imagen representativa -->
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:type" content="website">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Encabezado -->
    <header>
        <nav>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/imagenes/logo.png" alt="Logotipo de PAAK">
            </div>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'nav-links',
            ));
            ?>
        </nav>
    </header>
