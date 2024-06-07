<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div id="page-wrapper"><div id="page">

        <div id="header"><div class="section clearfix">
                <?php print render($page['header']); ?>
        </div></div> <!-- /.section, /#header -->

        <?php print $messages; ?>

        <div id="main-wrapper"><div id="main" class="clearfix">
                <div id="content" class="column"><div class="section">

                        <!-- Facts Start -->
                        <section id="facts" class="container-fluid facts py-5 pt-lg-0">
                            <div class="container py-5 pt-lg-0">
                                <div class="row gx-0">
                                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                                        <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                            <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                                <i class="fa fa-check text-white"></i>
                                            </div>
                                            <div class="ps-4">
                                                <h5 class="text-primary mb-0">Projets termin&eacute;es</h5>
                                                <h1 class="mb-0" data-toggle="counter-up"><?php if(isset($projects_done)) { print($projects_done); } else { print theme_get_setting('luvumbo_projects_done'); } ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                                        <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                                <i class="fa fa-award text-primary"></i>
                                            </div>
                                            <div class="ps-4">
                                                <h5 class="text-white mb-0">R&eacute;compenses</h5>
                                                <h1 class="text-white mb-0" data-toggle="counter-up"><?php if(isset($win_awards)) { print($win_awards); } else { print theme_get_setting('luvumbo_win_awards'); } ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Facts Start -->


                        <!-- About Start -->
                        <section  id="about-us" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="row g-5">
                                    <div class="col-lg-7">
                                        <div class="section-title position-relative pb-3 mb-5">
                                            <h5 class="fw-bold text-primary text-uppercase">A propos de nous</h5>
                                            <h1 class="mb-0"><?php if(isset($about_us_title)) { print($about_us_title); } else { print theme_get_setting('luvumbo_about_us_title'); } ?></h1>
                                        </div>
                                        <p class="mb-4"><?php if(isset($about_us_text)) { print($about_us_text); } else { print theme_get_setting('luvumbo_about_us_text'); } ?></p>
                                        <div class="row g-0 mb-3">
                                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>R&eacute;compens&eacute;</h5>
                                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Personnel professionnel</h5>
                                            </div>
                                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Soutien 24/7</h5>
                                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Prix adapté à votre budget</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                                            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <div class="ps-4">
                                                <h5 class="mb-2">Contactez nous dès maintenant au</h5>
                                                <h4 class="text-primary mb-0"><?php if(isset($phone)) { print($phone); } else { print theme_get_setting('luvumbo_phone'); } ?></h4>
                                            </div>
                                        </div>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contactez-nous</a>
                                    </div>
                                    <div class="col-lg-5" style="min-height: 500px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php if(isset($about_img)) { print($about_img); } else { print theme_get_setting('luvumbo_about_img'); } ?>" style="object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- About End -->


                        <!-- Features Start -->
                        <section id="features" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                                    <h5 class="fw-bold text-primary text-uppercase">POURQUOI NOUS CHOISIR</h5>
                                    <h1 class="mb-0">Nous sommes là pour faire croître votre entreprise de façon exponentielle</h1>
                                </div>
                                <div class="row g-5">
                                    <div class="col-lg-4">
                                        <div class="row g-5">
                                            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                    <i class="fa fa-cubes text-white"></i>
                                                </div>
                                                <h4>L’innovation</h4>
                                                <p class="mb-0">Nos équipes se forment au quotidien pour toujours être au cœur des dernièreS innovationS numériqueS.</p>
                                            </div>
                                            <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                    <i class="fa fa-award text-white"></i>
                                                </div>
                                                <h4>Le bon Profil pour le bon Projet</h4>
                                                <p class="mb-0">Avec des consultants sur tout le territoire, nous vous faisons avancer avec les interlocuteurs qui comprennent vos besoins.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?php if(isset($feature_img)) { print($feature_img); } else { print theme_get_setting('luvumbo_feature_img'); } ?>" style="object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row g-5">
                                            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                    <i class="fa fa-users-cog text-white"></i>
                                                </div>
                                                <h4>Tarif sur mesure</h4>
                                                <p class="mb-0">Nous nous adaptons à votre budget avec avec des solutions innovantes et sans mauvaises surprises.</p>
                                            </div>
                                            <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                    <i class="fa fa-phone-alt text-white"></i>
                                                </div>
                                                <h4>Une expertise globale de l’IT</h4>
                                                <p class="mb-0">Nous intervenons sur tous les métiers de l’IT.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Features Start -->


                        <!-- Service Start -->
                        <section id="services" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                                    <h5 class="fw-bold text-primary text-uppercase">Nos services</h5>
                                    <h1 class="mb-0">Des solutions personnalisées pour votre entreprise</h1>
                                </div>
                                <div class="row g-5">
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="service-icon">
                                                <i class="fa fa-shield-alt text-white"></i>
                                            </div>
                                            <h4 class="mb-3">Cybersécurité</h4>
                                            <p class="m-0">On vous accompagne dans la sécurisation de vos données et systèmes pour lutter et prévenir des menaces potentielles.</p>
                                            <a class="btn btn-lg btn-primary rounded" href="<?php print $GLOBALS['base_url'];?>/domain/cyber-security">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="service-icon">
                                                <i class="fa fa-chart-pie text-white"></i>
                                            </div>
                                            <h4 class="mb-3">Data</h4>
                                            <p class="m-0">Data scientist, Data analyst, Data Engineer.</p>
                                            <a class="btn btn-lg btn-primary rounded" href="<?php print $GLOBALS['base_url'];?>/domain/data-analytics">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="service-icon">
                                                <i class="fa fa-code text-white"></i>
                                            </div>
                                            <h4 class="mb-3">Développement web</h4>
                                            <p class="m-0">Un accompagnement de A jusqu'à Z sur tous vos projets web</p>
                                            <a class="btn btn-lg btn-primary rounded" href="<?php print $GLOBALS['base_url'];?>/domain/web-development">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="service-icon">
                                                <i class="fab fa-android text-white"></i>
                                            </div>
                                            <h4 class="mb-3">Développement des applications & interfaces web</h4>
                                            <p class="m-0">Création d’application sur mesure</p>
                                            <a class="btn btn-lg btn-primary rounded" href="<?php print $GLOBALS['base_url'];?>/domain/apps-development">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="service-icon">
                                                <i class="fa fa-search text-white"></i>
                                            </div>
                                            <h4 class="mb-3">Dev Ops</h4>
                                            <p class="m-0">Améliorer la gestion de vos projets.</p>
                                            <a class="btn btn-lg btn-primary rounded" href="<?php print $GLOBALS['base_url'];?>/domain/seo-optimization">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="service-icon">
                                                <i class="fa fa-search text-white"></i>
                                            </div>
                                            <h4 class="mb-3">SAP Contrôle Gestion</h4>
                                            <p class="m-0">Modéliser vos données.</p>
                                            <a class="btn btn-lg btn-primary rounded" href="<?php print $GLOBALS['base_url'];?>/domain/seo-optimization">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Service End -->


                        <!-- Quote Start -->
                        <section id="contact" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="row g-5">
                                    <div class="col-lg-7">
                                        <div class="section-title position-relative pb-3 mb-5">
                                            <h5 class="fw-bold text-primary text-uppercase">Nous sommes à votre écoute</h5>
                                            <h1 class="mb-0">Besoin de support? N'h&eacute;sitez pas à nous contacter</h1>
                                        </div>
                                        <div class="row gx-3">
                                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                                <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Réponse dans 24h</h5>
                                            </div>
                                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                                <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Assistance téléphonique 24h/24</h5>
                                            </div>
                                        </div>
                                        <p class="mb-4">Chez LConseil on aime vous aider et vous donnez un petit coup de pouce, alors n'hésitez pas à nous contacter.</p>
                                        <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <div class="ps-4">
                                                <h5 class="mb-2">Contactez nous dès maintenant au</h5>
                                                <h4 class="text-primary mb-0"><?php if(isset($phone)) { print($phone); } else { print theme_get_setting('luvumbo_phone'); } ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>

                                        <!--<div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                                            <form>
                                                <div class="row g-3">
                                                    <div class="col-xl-12">
                                                        <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                                    </div>
                                                    <div class="col-12">
                                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                                            <option selected>Select A Service</option>
                                                            <option value="1">Service 1</option>
                                                            <option value="2">Service 2</option>
                                                            <option value="3">Service 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Quote End -->


						
						
						
						<!-- Vendor Start -->
						<section id="testimonial" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
							<div class="container py-5 mb-5">
							    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                                    <h5 class="fw-bold text-primary text-uppercase">TÉMOIGNAGE</h5>
                                    <h1 class="mb-0">Ils nous font confiance</h1>
                                </div>
								</br>
								<div class="bg-white">
									<div class="owl-carousel vendor-carousel">
										<img src="<?php if(isset($vendor1)) { print($vendor1); } else { print theme_get_setting('luvumbo_vendor1'); } ?>" alt="">
										<img src="<?php if(isset($vendor2)) { print($vendor2); } else { print theme_get_setting('luvumbo_vendor2'); } ?>" alt="">
										<img src="<?php if(isset($vendor3)) { print($vendor3); } else { print theme_get_setting('luvumbo_vendor3'); } ?>" alt="">
									</div>
								</div>
							</div>
						</section>
						<!-- Vendor End -->


                        <!-- Team Start -->
                        <section id="team" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                                    <h5 class="fw-bold text-primary text-uppercase">Membres de l'équipe</h5>
                                    <h1 class="mb-0">Des pros pour faire décoller votre business</h1>
                                </div>
                                <div class="row g-5">
                                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                        <div class="team-item bg-light rounded overflow-hidden">
                                            <div class="team-img position-relative overflow-hidden">
                                                <img class="img-fluid w-100" src="<?php if(isset($team1)) { print($team1); } else { print theme_get_setting('luvumbo_team1'); } ?>" alt="">
                                                <div class="team-social">
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center py-4">
                                                <h4 class="text-primary">Manuel (Business Développeur)</h4>
                                                <p class="text-uppercase m-0">C'est notre business développer, donnez lui 45 sec et 3 mots clés et le tour est joué</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                                        <div class="team-item bg-light rounded overflow-hidden">
                                            <div class="team-img position-relative overflow-hidden">
                                                <img class="img-fluid w-100" src="<?php if(isset($team2)) { print($team2); } else { print theme_get_setting('luvumbo_team2'); } ?>" alt="">
                                                <div class="team-social">
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center py-4">
                                                <h4 class="text-primary">Houssem (Data scientist / Dev.Ops)</h4>
                                                <p class="text-uppercase m-0">Notre CERVEAU, le web et l'IA n'a aucun secret pour lui, avec lui impossible is NO-THING</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                                        <div class="team-item bg-light rounded overflow-hidden">
                                            <div class="team-img position-relative overflow-hidden">
                                                <img class="img-fluid w-100" src="<?php if(isset($team3)) { print($team3); } else { print theme_get_setting('luvumbo_team3'); } ?>" alt="">
                                                <div class="team-social">
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-center py-4">
                                                <h4 class="text-primary">Marouene (Développeur)</h4>
                                                <p class="text-uppercase m-0">Notre Magicien, c'est lui qui donne vie à vos envies… sur le web bien sûr!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Team End -->


                        <a id="main-content"></a>
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['help']); ?>
                        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                        <?php print render($page['content']); ?>
                        <?php print $feed_icons; ?>
                    </div></div> <!-- /.section, /#content -->

                <?php if ($page['sidebar_first']): ?>
                    <div id="sidebar-first" class="column sidebar"><div class="section">
                            <?php print render($page['sidebar_first']); ?>
                        </div></div> <!-- /.section, /#sidebar-first -->
                <?php endif; ?>

                <?php if ($page['sidebar_second']): ?>
                    <div id="sidebar-second" class="column sidebar"><div class="section">
                            <?php print render($page['sidebar_second']); ?>
                        </div></div> <!-- /.section, /#sidebar-second -->
                <?php endif; ?>

            </div></div> <!-- /#main, /#main-wrapper -->

        <div id="footer"><div class="section">
                <?php print render($page['footer']); ?>
            </div></div> <!-- /.section, /#footer -->
    </div></div> <!-- /#page, /#page-wrapper -->
