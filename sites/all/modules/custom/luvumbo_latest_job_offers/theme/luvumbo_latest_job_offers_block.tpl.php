<?php

$items = $variables['items'];

/*print render($items['JOB_ONE']);
print render($items['JOB_TWO']);
print render($items['JOB_THREE']);*/
?>

<!-- Blog Start -->
                        <section id="join-us" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                                    <h5 class="fw-bold text-primary text-uppercase">Rejoignez l’aventure</h5>
                                    <h1 class="mb-0">Lire les dernieres offres d'emploi</h1>
                                </div>
                                <div class="row g-5">

                                    <?php
                                    foreach($items as $id => $job_offer) {?>
                                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                            <div class="blog-item bg-light rounded overflow-hidden">
                                                <div class="blog-img position-relative overflow-hidden">
                                                    <img class="img-fluid" width= "500" height="280" src="<?php  if(isset($job_offer->field_screenshot['und'][0]['filename'])) { print $GLOBALS['base_url'].'/sites/default/files/job-offers/'.$job_offer->field_screenshot['und'][0]['filename']; } ?>" alt="">
                                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php if(isset($job_offer->field_job_domain['und'][1]['tid'])) { print taxonomy_term_load($job_offer->field_job_domain['und'][1]['tid'])->name; } ?></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="d-flex mb-3">
                                                        <small><i class="far fa-calendar-alt text-primary me-2"></i><?php if(isset($job_offer->changed)) { print date('m/d/Y', $job_offer->changed); } ?></small>
                                                    </div>
                                                    <h4 class="mb-3"><?php print $job_offer->title; ?></h4>
                                                    <p><?php print substr($job_offer->field_job_details['und'][0]['safe_summary'], 0, 80); ?></p>
                                                    <a class="text-uppercase" href="<?php if(isset($job_offer->vid)) { print $GLOBALS['base_url'].'/node/'.$job_offer->vid; } ?>">Lire plus <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>





                                </div>
                            </div>
                        </section>
                        <!-- Blog Start -->