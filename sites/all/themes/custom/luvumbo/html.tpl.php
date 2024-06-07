<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
    "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="<?php if(isset($googleapis)) { print($googleapis); } else { print theme_get_setting('luvumbo_googleapis'); } ?>">
    <link rel="preconnect" href="<?php if(isset($gstatic)) { print($gstatic); } else { print theme_get_setting('luvumbo_gstatic'); } ?>" crossorigin>
    <link href="<?php if(isset($googleapis_family)) { print($googleapis_family); } else { print theme_get_setting('luvumbo_googleapis_family'); } ?>" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="<?php if(isset($font_awesome)) { print($font_awesome); } else { print theme_get_setting('luvumbo_font_awesome'); } ?>" rel="stylesheet">
    <link href="<?php if(isset($bootstrap_icons)) { print($bootstrap_icons); } else { print theme_get_setting('luvumbo_bootstrap_icons'); } ?>" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>


<?php if (theme_get_setting('luvumbo_snipper')): ?>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->
<?php endif; ?>

<!-- Topbar Start -->
<div id="topbar-start"  class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i><?php if(isset($map_marker)) { print($map_marker); } else { print theme_get_setting('luvumbo_map_marker'); } ?></small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><?php if(isset($phone)) { print($phone); } else { print theme_get_setting('luvumbo_phone'); } ?></small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i><?php if(isset($email)) { print($email); } else { print theme_get_setting('luvumbo_email'); } ?></small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php if(isset($twitter)) { print($twitter); } else { print theme_get_setting('luvumbo_twitter'); } ?>" target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php if(isset($facebook)) { print($facebook); } else { print theme_get_setting('luvumbo_facebook'); } ?>" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php if(isset($linkedin)) { print($linkedin); } else { print theme_get_setting('luvumbo_linkedin'); } ?>" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php if(isset($instagram)) { print($instagram); } else { print theme_get_setting('luvumbo_instagram'); } ?>" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="<?php if(isset($youtube)) { print($youtube); } else { print theme_get_setting('luvumbo_youtube'); } ?>" target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div id="navbar-carousel"  class="container-fluid position-relative p-0">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="<?php print $GLOBALS['base_url'];?>" class="navbar-brand p-0"><img class="w-100" src="<?php if(isset($logo1)) { print($logo1); } else { print theme_get_setting('luvumbo_logo1'); } ?>" alt="Image" width="95" height="95">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">

                <?php print theme('links__system_main_menu', array(
                    'links' => 'tt',
                    'attributes' => array(
                        'id' => 'main-menu-links',
                        'class' => array('links', 'clearfix'),
                    ),
                    'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                )); ?>
            </div>

            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            <a href="<?php print $GLOBALS['base_url'];?>/join-us" class="btn btn-primary py-2 px-4 ms-3">Nous rejoindre</a>
        </div>
    </nav>
    <!-- Navbar End -->
     
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?php if(isset($carousel_img1)) { print($carousel_img1); } else { print theme_get_setting('luvumbo_carousel_img1'); } ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        </br>
						<h5 class="text-white mb-2 animated slideInDown"><?php print theme_get_setting('luvumbo_carousel1_title'); ?></h5>
                        <h1 class="display-4 text-white mb-md-4 animated zoomIn"><?php print theme_get_setting('luvumbo_carousel1_text'); ?></h1>
                        <a href="<?php print $GLOBALS['base_url'];?>/join-us" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nous rejoindre</a>
                        <a href="<?php print $GLOBALS['base_url'];?>/#services" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nos services</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?php if(isset($carousel_img2)) { print($carousel_img2); } else { print theme_get_setting('luvumbo_carousel_img2'); } ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
					    </br>
                        <h5 class="text-white mb-2 animated slideInDown"><?php print theme_get_setting('luvumbo_carousel2_title'); ?></h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php print theme_get_setting('luvumbo_carousel2_text'); ?></h1>
                        <a href="<?php print $GLOBALS['base_url'];?>/page/en-savoir-plus" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                        <a href="<?php print $GLOBALS['base_url'];?>/#contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez nous</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Navbar & Carousel End -->


<!-- Full Screen Search Start -->
<div  class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input id="searchKeyword" type="text" class="form-control bg-transparent border-primary p-3" placeholder="Tapez le mot-clé de recherche">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"><a id="searchLink" href="<?php print $GLOBALS['base_url'];?>/search">search</a></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>


<!-- Footer Start -->
<section id="luvumbo-footer">
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="<?php print $GLOBALS['base_url'];?>" class="navbar-brand p-0"><img class="w-100" src="<?php if(isset($logo2)) { print($logo2); } else { print theme_get_setting('luvumbo_logo2'); } ?>" alt="Image" width="95" height="95">
                        </a>
                        <p class="mt-3 mb-4"><?php if(isset($sign_up_text)) { print($sign_up_text); } else { print theme_get_setting('luvumbo_sign_up_text'); } ?></p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Prenez contact avec nous</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0"><?php if(isset($map_marker)) { print($map_marker); } else { print theme_get_setting('luvumbo_map_marker'); } ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0"><?php if(isset($email)) { print($email); } else { print theme_get_setting('luvumbo_email'); } ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0"><?php if(isset($phone)) { print($phone); } else { print theme_get_setting('luvumbo_phone'); } ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="<?php if(isset($twitter)) { print($twitter); } else { print theme_get_setting('luvumbo_twitter'); } ?>" target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="<?php if(isset($facebook)) { print($facebook); } else { print theme_get_setting('luvumbo_facebook'); } ?>" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="<?php if(isset($linkedin)) { print($linkedin); } else { print theme_get_setting('luvumbo_linkedin'); } ?>" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="<?php if(isset($instagram)) { print($instagram); } else { print theme_get_setting('luvumbo_instagram'); } ?>" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Liens rapides</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <?php print theme('links__system_quick_menu', array(
                                    'links' => 'tt',
                                    'attributes' => array(
                                        'id' => 'main-menu-links',
                                        'class' => array('links', 'clearfix'),
                                    ),
                                    'heading' => array(
                                        'text' => t('Main menu'),
                                        'level' => 'h2',
                                        'class' => array('element-invisible'),
                                    ),
                                )); ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Liens populaires</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <?php print theme('links__system_popular_menu', array(
                                    'links' => 'tt',
                                    'attributes' => array(
                                        'id' => 'main-menu-links',
                                        'class' => array('links', 'clearfix'),
                                    ),
                                    'heading' => array(
                                        'text' => t('Main menu'),
                                        'level' => 'h2',
                                        'class' => array('element-invisible'),
                                    ),
                                )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">L.Conseil</a>. All Rights Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Developed by <a class="text-white border-bottom" href="https://blelmarouene.blog">BLEL MAROUENE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Footer End -->

<!-- Back to Top Start-->
<a id="back-to-top" href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- Back to Top END -->

<!-- JavaScript Libraries -->
<script src="<?php if(isset($bootstrap_lib)) { print($bootstrap_lib); } else { print theme_get_setting('luvumbo_bootstrap_lib'); } ?>"></script>
<script src="<?php if(isset($jquery_lib)) { print($jquery_lib); } else { print theme_get_setting('luvumbo_jquery_lib'); } ?>"></script>

<script src="<?php if(isset($wow_lib)) { print($wow_lib); } else { print theme_get_setting('luvumbo_wow_lib'); } ?>"></script>
<script src="<?php if(isset($easing_lib)) { print($easing_lib); } else { print theme_get_setting('luvumbo_easing_lib'); } ?>"></script>
<script src="<?php if(isset($waypoints_lib)) { print($waypoints_lib); } else { print theme_get_setting('luvumbo_waypoints_lib'); } ?>"></script>
<script src="<?php if(isset($counterup_lib)) { print($counterup_lib); } else { print theme_get_setting('luvumbo_counterup_lib'); } ?>"></script>
<script src="<?php if(isset($owlcarousel_lib)) { print($owlcarousel_lib); } else { print theme_get_setting('luvumbo_owlcarousel_lib'); } ?>"></script>
<!-- Template Javascript -->
<script src="<?php if(isset($main_lib)) { print($main_lib); } else { print theme_get_setting('luvumbo_main_lib'); } ?>"></script>


<script>
    document.getElementById("searchLink").onclick = function() {
        var keyword = document.getElementById("searchKeyword").value;

        var link = '<?php print $GLOBALS['base_url'];?>/search/node/' + keyword;
        //alert(link);
        window.open(link, "_self");
        return false;
    };

</script>

</body>
</html>
