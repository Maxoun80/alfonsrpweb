<?php 
  // Website \\
  require_once('include/data.php');

  $header = 3;
?>

<!--
  Designed by : Skyrise
  Available on : the-programmer.com
-->

<!DOCTYPE html>
<html lang="<?php echo $info_website_language; ?>">
<head>
  <!-- Title -->
  <title><?php echo "FAQ - ".$info_website_name; ?></title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/img/favicon/favicon-<?php echo $info_website_color; ?>.ico">

  <!--  Meta tags -->
  <meta name="keywords" content="<?php echo $info_website_keywords; ?>">
  <meta name="description" content="<?php echo $info_website_description; ?>">
  <meta name="author" content="Skyrise - The-Programmer">
  <meta name="robots" content="index, follow">

  <!-- Schema.org -->
  <meta itemprop="name" content="<?php echo "FAQ - ".$info_website_name; ?>">
  <meta itemprop="url" content="<?php echo $websiteUrl."faq/"; ?>">
  <meta itemprop="description" content="We answer all the frequently asked questions to help you as much as possible.">
  <meta itemprop="image" content="../assets/img/backgrounds/home.jpg">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="<?php echo $host_web_site; ?>">
  <meta name="twitter:title" content="<?php echo "FAQ - ".$info_website_name; ?>">
  <meta name="twitter:url" content="<?php echo $websiteUrl."faq/"; ?>">
  <meta name="twitter:description" content="We answer all the frequently asked questions to help you as much as possible.">
  <meta name="twitter:image" content="../assets/img/backgrounds/home.jpg">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo "FAQ - ".$info_website_name; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $websiteUrl."faq/"; ?>">
  <meta property="og:image" content="../assets/img/backgrounds/home.jpg">
  <meta property="og:description" content="We answer all the frequently asked questions to help you as much as possible.">
  <meta property="og:site_name" content="<?php echo $info_website_name; ?>">
  <meta property="og:locale" content="<?php echo $info_website_language_og; ?>">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

  <!-- CSS - Implementing Plugins -->
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- CSS - Template -->
  <link rel="stylesheet" href="../assets/css/<?php echo $info_website_color; ?>.css">
</head>
<body>
  <!-- Header -->
  <?php require_once('include/header.php'); ?>
  <!-- End - Header -->

  <!-- Promo Section -->
  <section class="duik-promo gradient-primary">
    <div class="container duik-promo-container">
      <div class="d-flex mh-25rem pt-11 py-6">
        <div class="align-self-center">
          <h1 class="animate__animated animate__fadeInUp text-white text-uppercase font-weight-light">Frequently Asked Questions</h1>
          <p class="text-light mb-0">We answer all the frequently asked questions to help you as much as possible</p>
        </div>
      </div>
    </div>

    <!-- SVG BG -->
    <svg class="position-absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve">
      <polygon fill="#ffffff" style="fill-opacity: .05;" points="-0.5,322.5 -0.5,121.5 658.3,212.3 "></polygon>
      <polygon fill="#ffffff" style="fill-opacity: .1;" points="-2,323 1920,323 1920,-1 "></polygon>
    </svg>
    <!-- End - SVG BG -->
  </section>
  <!-- End - Promo Section -->

  <main>
    <div class="container pt-11 pb-8">
      <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-3 order-lg-2">
          <div class="js-sticky-sidebar">
            <div class="list-group mb-4" id="faq" role="tablist">
              <a class="list-group-item list-group-item-action active" id="faq-inceptos-himenaeos" data-toggle="tab" href="#faq-inceptos-himenaeos-content" role="tab" aria-controls="faq-inceptos-himenaeos-content" aria-selected="true">
                <i class="fas fa-fw fa-server mr-1"></i> Inceptos himenaeos
              </a>

              <a class="list-group-item list-group-item-action" id="faq-class-aptent" data-toggle="tab" href="#faq-class-aptent-content" role="tab" aria-controls="faq-class-aptent-content" aria-selected="false">
                <i class="fa fa-fw fa-adjust mr-1"></i> Class aptent
              </a>

              <a class="list-group-item list-group-item-action" id="faq-aenean" data-toggle="tab" href="#faq-aenean-content" role="tab" aria-controls="faq-aenean-content" aria-selected="false">
                <i class="fa fa-fw fa-layer-group mr-1"></i> Aenean
              </a>

              <a class="list-group-item list-group-item-action" id="faq-quisque-non" data-toggle="tab" href="#faq-quisque-non-content" role="tab" aria-controls="faq-quisque-non-content" aria-selected="false">
                <i class="fas fa-fw fa-poll mr-1"></i> Quisque non
              </a>
            </div>

            <!-- Call To Action -->
            <a class="card border-0 bg-primary link-white text-white mb-4" href="<?php echo "ts3server://".$info_teamspeak_ip.":".$info_teamspeak_port; ?>">
              <div class="card-body z-index-1">
                <div class="d-flex align-items-center">
                  <i class="far fa-comments fa-3x mr-4"></i>
                  <p class="mb-0">Can't find what you're looking for?</p>
                </div>
              </div>

              <!-- SVG BG -->
              <svg class="position-absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve">
                <polygon fill="#ffffff" style="fill-opacity: .05;" points="-0.5,322.5 -0.5,121.5 658.3,212.3 "></polygon>
                <polygon fill="#ffffff" style="fill-opacity: .1;" points="-2,323 1920,323 1920,-1 "></polygon>
              </svg>
              <!-- End - SVG BG -->
            </a>
            <!-- End - Call To Action -->
          </div>
        </div>

        <div class="col-lg-8 pr-lg-6 order-lg-1">
          <div class="tab-content" id="faqTabContent">
            <div class="tab-pane fade show active" id="faq-inceptos-himenaeos-content" role="tabpanel" aria-labelledby="faq-inceptos-himenaeos">
              <div class="accordion" id="accordionExample-001">
                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center" id="headingOne-001" data-toggle="collapse" data-target="#collapseOne-001" aria-expanded="true" aria-controls="collapseOne-001" role="region">
                    <h6 class="mb-0">Donec sit amet consectetur diam ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>

                  <div id="collapseOne-001" class="collapse show" aria-labelledby="headingOne-001" data-parent="#accordionExample-001">
                    <div class="card-body">Phasellus sed condimentum ligula. Vivamus ex arcu, condimentum eget sem eu, tempor pretium metus. Donec pellentesque, nibh eget bibendum pellentesque, mi nisl ornare orci, eget efficitur dui mauris non risus. Quisque sed odio sodales, finibus augue quis, ullamcorper nisl. Quisque non purus ex. Vestibulum eu lacus nisl. Nam tincidunt sapien quis odio pharetra, nec commodo urna rhoncus. Nulla pretium ex vitae neque commodo, vitae pretium purus congue. Phasellus at nibh id ipsum rhoncus suscipit. Aliquam non fermentum ante, vel eleifend nunc. Etiam scelerisque, turpis vitae gravida fermentum, dui elit sodales sem, vel molestie odio lectus et lorem. Aenean et scelerisque ex, ut condimentum ex. Nunc tortor tellus, tempor interdum tincidunt in, convallis eu mi. Aliquam consectetur justo in est dapibus placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingTwo-001" data-toggle="collapse" data-target="#collapseTwo-001" aria-expanded="false" aria-controls="collapseTwo-001" role="region">
                    <h6 class="mb-0">Phasellus faucibus ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseTwo-001" class="collapse" aria-labelledby="headingTwo-001" data-parent="#accordionExample-001">
                    <div class="card-body">Praesent congue lacus et mollis commodo. Duis sit amet consequat ipsum. Praesent eleifend accumsan diam, et elementum nibh facilisis ut. Nam auctor, est non scelerisque placerat, nulla orci sollicitudin orci, sit amet molestie arcu nibh a mauris. Ut hendrerit augue sed tortor hendrerit pharetra. Quisque tortor nisi, ullamcorper sit amet volutpat vel, gravida at nisl. Duis ut arcu ipsum. Cras suscipit varius sapien, ut vehicula urna. Ut finibus ultrices fringilla.</div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingThree-001" data-toggle="collapse" data-target="#collapseThree-001" aria-expanded="false" aria-controls="collapseThree-001" role="region">
                    <h6 class="mb-0">Cras ultrices id arcu blandit congue ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseThree-001" class="collapse" aria-labelledby="headingThree-001" data-parent="#accordionExample-001">
                    <div class="card-body">Etiam vehicula tortor et nisl gravida, et dictum mauris tempus. Sed quis turpis et tortor condimentum vulputate. Nulla commodo vitae odio non bibendum. Proin vel nunc eget nibh ultrices pellentesque. Morbi nec est eu ligula gravida sollicitudin. Quisque ex ligula, luctus sed laoreet eu, consectetur accumsan tellus. Morbi egestas nibh sed efficitur luctus. Praesent feugiat nisi vitae maximus accumsan. Vivamus accumsan imperdiet ligula non pretium. Ut pellentesque tincidunt ex, in viverra nisi pulvinar quis.</div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center" id="headingFour-001" data-toggle="collapse" data-target="#collapseFour-001" aria-expanded="true" aria-controls="collapseFour-001" role="region">
                    <h6 class="mb-0">Mauris consectetur pulvinar sapien eu luctus ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>

                  <div id="collapseFour-001" class="collapse" aria-labelledby="headingFour-001" data-parent="#accordionExample-001">
                    <div class="card-body">Nullam aliquet quam ante, non eleifend ex cursus eu. Sed finibus erat nec turpis dignissim, sit amet accumsan lacus lacinia. Phasellus et nulla vel neque consectetur dignissim quis a lectus. Proin vehicula velit sed turpis vehicula dignissim. Etiam ac faucibus lorem. Sed euismod sem metus, eget convallis leo lobortis at. Aliquam posuere quis turpis vitae mattis.</div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingFive-001" data-toggle="collapse" data-target="#collapseFive-001" aria-expanded="false" aria-controls="collapseFive-001" role="region">
                    <h6 class="mb-0">Donec condimentum ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseFive-001" class="collapse" aria-labelledby="headingFive-001" data-parent="#accordionExample-001">
                    <div class="card-body">Donec semper cursus turpis nec blandit. Nunc fringilla, orci at dapibus cursus, eros urna vestibulum diam, sed eleifend ex mauris ac urna. Phasellus lacinia commodo enim. Duis sed ex neque. Fusce posuere accumsan est et porta. Integer odio lorem, tincidunt id augue id, sagittis rutrum metus. Nam consequat dolor nec pellentesque sodales. Mauris vel lectus libero. Integer faucibus justo et neque porta, at accumsan quam facilisis. Aenean diam magna, luctus vel ligula a, rhoncus dignissim quam. Sed mollis, augue ac luctus laoreet, diam lectus interdum risus, vitae lacinia diam ipsum et ligula. Donec blandit at erat at ultrices. Etiam porta diam dui.</div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingSix-001" data-toggle="collapse" data-target="#collapseSix-001" aria-expanded="false" aria-controls="collapseSix-001" role="region">
                    <h6 class="mb-0">Ut nunc quis ipsum finibus tempor ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseSix-001" class="collapse" aria-labelledby="headingSix-001" data-parent="#accordionExample-001">
                    <div class="card-body">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse maximus in odio id sollicitudin. Vivamus fringilla rutrum nibh. Vestibulum quis risus vel ante fringilla volutpat. Nam et elit arcu. Nam ut eros sed risus consequat elementum congue elementum dui. Mauris vestibulum eros eget gravida efficitur. Proin a sagittis velit.</div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingSeven-001" data-toggle="collapse" data-target="#collapseSeven-001" aria-expanded="false" aria-controls="collapseSeven-001" role="region">
                    <h6 class="mb-0">Morbi at dui ac nunc placerat convallis sed malesuada lorem ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseSeven-001" class="collapse" aria-labelledby="headingSeven-001" data-parent="#accordionExample-001">
                    <div class="card-body">Sed quis interdum neque. Ut ante nunc, congue eget porttitor in, euismod ornare purus. Phasellus mattis malesuada placerat. Ut ultricies posuere libero, dictum hendrerit sapien pharetra ac. Morbi laoreet nibh nec pharetra accumsan. Maecenas vitae hendrerit leo. Sed finibus dignissim mauris et fermentum. Quisque hendrerit, ante vel dictum rhoncus, justo augue aliquam dui, ut interdum sem arcu eget eros. Vivamus posuere ultricies pharetra. Praesent eget laoreet enim, sed rutrum metus.</div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingEight-001" data-toggle="collapse" data-target="#collapseEight-001" aria-expanded="false" aria-controls="collapseEight-001" role="region">
                    <h6 class="mb-0">Suspendisse posuere sodales venenatis?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseEight-001" class="collapse" aria-labelledby="headingEight-001" data-parent="#accordionExample-001">
                    <div class="card-body">Proin eu ultricies sem, id auctor orci. Morbi tristique mattis odio, in scelerisque nisl fringilla nec. In auctor venenatis mi. Fusce et velit at justo suscipit blandit. Phasellus ultrices mi id orci egestas, quis efficitur diam elementum. Donec vitae bibendum dolor. Nam rutrum elit eget molestie vehicula. Pellentesque sed dapibus est, vitae suscipit nisl. Ut sed nisl sit amet risus viverra sollicitudin.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="faq-class-aptent-content" role="tabpanel" aria-labelledby="faq-class-aptent">
              <div class="accordion" id="accordionExample-002">
                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center" id="headingOne-002" data-toggle="collapse" data-target="#collapseOne-002" aria-expanded="true" aria-controls="collapseOne-002" role="region">
                    <h6 class="mb-0">Quisque molestie ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>

                  <div id="collapseOne-002" class="collapse show" aria-labelledby="headingOne-002" data-parent="#accordionExample-002">
                    <div class="card-body">
                    Mauris non sodales eros, a eleifend augue. Mauris sodales, ex nec auctor dignissim, nulla lacus posuere est, tempor bibendum massa est nec arcu. Curabitur sed interdum risus, vitae gravida nulla. Etiam vestibulum tortor quam, sit amet accumsan tellus sodales eu. Suspendisse sed tortor elit. Nullam neque nibh, euismod et maximus quis, bibendum ut tellus. Suspendisse potenti. Phasellus dapibus nunc at volutpat porttitor. Nullam at ligula sit amet ante sollicitudin volutpat vel in erat. Mauris et est sit amet risus imperdiet volutpat sed in velit.
                    </div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingTwo-002" data-toggle="collapse" data-target="#collapseTwo-002" aria-expanded="false" aria-controls="collapseTwo-002" role="region">
                    <h6 class="mb-0">Pellentesque eros lectus ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseTwo-002" class="collapse" aria-labelledby="headingTwo-002" data-parent="#accordionExample-002">
                    <div class="card-body">
                      Tristique id interdum fringilla, porta dignissim dui. Vivamus ante justo, viverra elementum laoreet non, egestas nec felis. Aenean non risus non mi efficitur commodo id vitae lectus. Nunc quis imperdiet neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis hendrerit ex et mi tristique, eget consequat dui gravida. Nam vehicula mauris a ante finibus dapibus. Fusce faucibus commodo justo quis ornare. Vivamus lobortis, sapien ac tincidunt mattis, lorem eros lobortis tellus, hendrerit dignissim sapien risus eu velit. Mauris lobortis velit lorem, et sagittis dolor malesuada ac. Donec ac orci in erat ullamcorper fringilla in quis dui. Morbi accumsan, ipsum sed iaculis auctor, turpis magna aliquet sapien, sit amet elementum lacus nibh vitae elit. Donec rutrum ullamcorper turpis in placerat.
                    </div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingThree-002" data-toggle="collapse" data-target="#collapseThree-002" aria-expanded="false" aria-controls="collapseThree-002" role="region">
                    <h6 class="mb-0">Pellentesque et orci non sapien ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseThree-002" class="collapse" aria-labelledby="headingThree-002" data-parent="#accordionExample-002">
                    <div class="card-body">
                      Sed eu porta arcu. Donec pharetra in nulla sit amet fringilla. Suspendisse at ornare ipsum. Suspendisse sit amet mattis orci. Suspendisse accumsan metus quam, at efficitur turpis interdum et. Maecenas molestie, lacus placerat aliquet gravida, magna nunc tincidunt felis, vitae egestas dolor est vitae elit.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="faq-aenean-content" role="tabpanel" aria-labelledby="faq-aenean">
              <div class="accordion" id="accordionExample-003">
                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center" id="headingOne-003" data-toggle="collapse" data-target="#collapseOne-003" aria-expanded="true" aria-controls="collapseOne-003" role="region">
                    <h6 class="mb-0">Mauris mauris metus ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>

                  <div id="collapseOne-003" class="collapse show" aria-labelledby="headingOne-003" data-parent="#accordionExample-003">
                    <div class="card-body">
                      Vestibulum in justo aliquam, blandit ante non, efficitur mauris. Nunc mattis fermentum convallis. Phasellus et est venenatis, interdum nulla sed, tempor elit. Phasellus scelerisque diam odio, id iaculis risus semper eu. Sed eget aliquam lorem, non euismod ipsum. Aliquam venenatis eu risus eget vehicula. Aliquam erat volutpat. Etiam non nunc pellentesque, venenatis lectus et, ultricies quam. Duis quis suscipit felis. Morbi pellentesque malesuada urna eu varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
                    </div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingTwo-003" data-toggle="collapse" data-target="#collapseTwo-003" aria-expanded="false" aria-controls="collapseTwo-003" role="region">
                    <h6 class="mb-0">Integer mauris tortor ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseTwo-003" class="collapse" aria-labelledby="headingTwo-003" data-parent="#accordionExample-003">
                    <div class="card-body">
                      Sed aliquet tortor a leo eleifend aliquam. Nulla placerat eu ipsum at euismod. Quisque pretium odio sed metus ultrices rhoncus. Aliquam vitae lacus vitae dui varius fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla vel ipsum sodales, condimentum tellus quis, tristique risus. Aenean dignissim neque nec enim malesuada aliquet. Suspendisse dictum nisl vel nisl fringilla, eget ornare est gravida. Sed ac finibus ipsum. Donec at eros gravida, molestie diam sed, lacinia libero. Aenean sit amet semper enim, id congue orci. Maecenas pellentesque malesuada mi a scelerisque. Morbi vestibulum ultrices dictum. Vivamus lobortis a ex non pulvinar. Etiam euismod, ante non ornare porttitor, tortor turpis suscipit dui, sit amet dignissim leo libero quis libero.
                    </div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingThree-003" data-toggle="collapse" data-target="#collapseThree-003" aria-expanded="false" aria-controls="collapseThree-003" role="region">
                    <h6 class="mb-0">Curabitur vehicula ex a imperdiet pharetra ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseThree-003" class="collapse" aria-labelledby="headingThree-003" data-parent="#accordionExample-003">
                    <div class="card-body">
                      Suspendisse massa sapien, aliquet ac pulvinar sit amet, maximus non purus. Nunc ut eros faucibus, scelerisque ex vel, ultrices turpis. Nullam sodales, libero sed porttitor pulvinar, urna tellus accumsan nisi, ac egestas turpis enim a sem. Mauris sit amet ullamcorper arcu, eu egestas eros. Nam ultricies in nulla quis mattis. Maecenas nec nulla sollicitudin, tempus nunc non, scelerisque velit. Proin tellus lectus, sagittis non mauris et, condimentum laoreet nibh. In hac habitasse platea dictumst. Etiam mauris eros, pharetra ac interdum in, ultricies ut magna. Nunc mattis porta orci eu pharetra. Integer blandit ornare orci et eleifend. Etiam ex erat, posuere id lacus vitae, varius ultricies turpis. Donec volutpat imperdiet rhoncus. Quisque iaculis at leo sit amet sodales. Donec pretium turpis ac arcu rhoncus, ut eleifend nisl egestas.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="faq-quisque-non-content" role="tabpanel" aria-labelledby="faq-quisque-non">
              <div class="accordion" id="accordionExample-004">
                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center" id="headingOne-004" data-toggle="collapse" data-target="#collapseOne-004" aria-expanded="true" aria-controls="collapseOne-004" role="region">
                    <h6 class="mb-0">Duis pretium lobortis venenatis ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>

                  <div id="collapseOne-004" class="collapse show" aria-labelledby="headingOne-004" data-parent="#accordionExample-004">
                    <div class="card-body">
                      Donec tincidunt, ex maximus hendrerit auctor, orci elit accumsan velit, fringilla ultricies purus eros non lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce id dolor id ex aliquet pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales aliquam nibh, et laoreet ante efficitur id. In tincidunt enim eu tincidunt vestibulum. Praesent purus urna, rhoncus id tristique nec, imperdiet eu ante. In pellentesque ultricies eros non aliquet. Vivamus id diam nulla.
                    </div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingTwo-004" data-toggle="collapse" data-target="#collapseTwo-004" aria-expanded="false" aria-controls="collapseTwo-004" role="region">
                    <h6 class="mb-0">In in porta felis ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseTwo-004" class="collapse" aria-labelledby="headingTwo-004" data-parent="#accordionExample-004">
                    <div class="card-body">
                      Donec dapibus vulputate tortor, nec porttitor lectus imperdiet a. Maecenas luctus eleifend ligula. In hac habitasse platea dictumst. Morbi scelerisque pretium malesuada. Praesent a blandit ligula, vel varius magna. Mauris sagittis quam tellus, sit amet hendrerit mauris auctor vel. Morbi sodales tempus ornare. Sed hendrerit mattis urna, vitae eleifend dui luctus at. Duis vitae pretium urna. Fusce maximus consequat dui, eget consequat neque ultricies sed. Praesent non accumsan dolor.
                    </div>
                  </div>
                </div>

                <div class="card border-bottom mb-3">
                  <div class="card-header accordion-header d-flex align-items-center collapsed" id="headingThree-004" data-toggle="collapse" data-target="#collapseThree-004" aria-expanded="false" aria-controls="collapseThree-004" role="region">
                    <h6 class="mb-0">Sed auctor ac turpis et elementum ?</h6>
                    <i class="fas fa-angle-down accordion-control ml-auto text-primary"></i>
                  </div>
                  <div id="collapseThree-004" class="collapse" aria-labelledby="headingThree-004" data-parent="#accordionExample-004">
                    <div class="card-body">
                      Nullam aliquam ipsum vitae tellus euismod, in lacinia mauris feugiat. Phasellus a ante odio. Mauris dictum semper lacus ac lacinia. Nullam pellentesque magna at rutrum malesuada. Aenean eget lectus quam. Sed eu nisl dignissim, congue leo eget, aliquam purus. Duis ut hendrerit nisi. Vivamus dui diam, suscipit vel nibh vel, elementum bibendum velit. Duis ac arcu sagittis massa condimentum pellentesque. Donec eu elit leo.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="bg-light py-11 text-center">
      <div class="container">
        <i class="fas fa-headset fa-4x text-primary mb-4"></i>
        <h2 class="h3 mb-3">Can't find what you're looking for?</h2>
        <div class="lead mb-5">Let us help you right now!</div>
        <a class="btn btn-primary px-4" href="<?php echo "ts3server://".$info_teamspeak_ip.":".$info_teamspeak_port; ?>">
          <i class="fab fa-teamspeak mr-2"></i>
          Connect to teamspeak
        </a>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php require_once('include/footer.php'); ?>
  <!-- End - Footer -->

  <!-- Go to Top -->
  <a class="js-go-to duik-go-to" href="javascript:;">
    <span class="fa fa-arrow-up duik-go-to__inner"></span>
  </a>
  <!-- End - Go to Top -->

  <?php
    // Database connection \\
    if ($database_connection == 0) {
      echo '
        <div id="modalDatabaseConnection" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalDatabaseConnection" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-uppercase">A problem has occurred</h5>
              </div>
              <div class="modal-body">
                <p>The connection to the database of your server has not been done properly, please check the information you put in the <span class="font-weight-bold">config.php</span> located in the <span class="font-weight-bold">include</span> folder.</p>
                <p class="mb-0">If the problem persists, contact The-Programmer to solve the problem.</p>
              </div>
              <div class="modal-footer">
                <button class="btn btn-sm btn-primary" type="button" onClick="window.location.reload();"><i class="fas fa-sync-alt mr-1"></i> Refresh</button>
              </div>
            </div>
          </div>
        </div>
      ';
    }
  ?>

  <!-- JS - Global Compulsory -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- JS - Implementing Plugins -->
  <script src="../assets/vendor/sticky-sidebar/dist/sticky-sidebar.min.js"></script>

  <!-- JS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/header-fixing.js"></script>
  <script src="../assets/js/sticky-sidebar.js"></script>

  <?php 
    // Database connection \\
    if ($database_connection == 0) {
      echo "
        <script>
          $('#modalDatabaseConnection').modal('toggle');

          function refresh(time)
          {
            setTimeout(function () { window.location.reload(); }, time*1000);
          }
          refresh(60);
        </script>
      ";
    }
  ?>
</body>
</html>
