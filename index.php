<?php
require_once 'markdownProcessor.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MIAGE+ Aix-Marseille</title>
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- normalize core CSS -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
    <link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet">

    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- Google Fonts - Change if needed -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="js/menu.js?v=<?php echo filemtime('js/menu.js'); ?>"></script>

    <!-- Main styles of this template -->
    <link href="css/style.min.css?v=1.0.0" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="css/custom.css?v=<?php echo filemtime('css/custom.css'); ?>" rel="stylesheet">

    <!-- Initiate Owl Carousel -->
    <script src="extensions/owlcarousel/owl.carousel.js"></script>
    <link rel="stylesheet" href="extensions/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="extensions/owlcarousel/assets/owl.carousel.min.css">

    <script src="extensions/bootstrap-notify/bootstrap-notify.min.js"></script>
</head>

<body>

<iframe name='iframeNews' id='iframeNews' width='90%' height='90%'></iframe>

<div class="top-page" id="arrow-top"><i class="fa fa-arrow-up top-page-arrow" onclick="scroll_top();"></i></div>

<!-- Navigation -->
<div class="navbar navbar-default navbar-fixed-top top-nav-collapse margin-0 main-background main-border" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>
            <img class="logo" src="img/logo_nav_white.png" alt="Logo">
        </div>
        <nav class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li style="height: 54px;">
                    <a class="nav-item main-color forward" href="#presentation" id="nav_pres">Pr&eacute;sentation</a>
                    <div class="underliner"></div>
                </li>
                <li style="height: 54px;">
                    <a class="nav-item main-color forward" href="#actualites" id="nav_actu">Actualit&eacute;s</a>
                    <div class="underliner"></div>
                </li>
                <li style="height: 54px;">
                    <a class="nav-item main-color forward" href="#portfolio" id="nav_phot">Photos</a>
                    <div class="underliner"></div>
                </li>
                <li style="height: 54px;">
                    <a class="nav-item main-color forward" href="#contact" id="nav_cont">Contact</a>
                    <div class="underliner"></div>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Hero Header -->
<header class="hero-header" style="background-image: url('img/backgroundFaded.jpg');">
    <div class="container" id="top">
        <div class="intro-text">
            <!-- <div class="intro-lead-in main-color">Welcome To Elsa!</div> -->
            <!-- <div class="intro-heading main-color">A beautiful and clean HTML template</div> -->
        </div>
    </div>
</header>

<!-- Intro -->
<section class="page-section">
    <div class="container intro">
        <div class="row margin-bottom-50">
            <div class="col-md-12 text-center">
                <h1 class="title-section"><span class="title-regular"><strong>Grand Gala</strong> de la
							MIAGE</span><br />6 juillet 2019</h1>
                <hr class="title-underline-center">
                <p class="lead">Le traditionnel gala de la MIAGE, tant attendu,
                    <br />aura de nouveau lieu cette année.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div>
                <div class="col-md-3 col-sm-6">
                    <div>
                        <i class="fa fa-desktop"></i>
                        <label><strong>20h</strong>
                            <br />Ouverture</label>
                        <p>La c&eacute;r&eacute;monie commencera sur les coups de 20h, par un ap&eacute;ro !</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div>
                        <i class="fa fa-user"></i>
                        <label><strong>2543</strong>
                            <br />Participants</label>
                        <p>Joignez vous à eux, pour profiter de cet événement réputé par dela nos fronti&egrave;res !
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div>
                        <i class="fa fa-code"></i>
                        <label><strong>14489</strong>
                            <br />Placeholder</label>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div>
                        <i class="fa fa-trophy"></i>
                        <label><strong>1</strong>
                            <br />Reine du bal</label>
                        <p>Choisissez sagement, elle aura pour mission de vous repr&eacute;senter tout au long de l'ann&eacute;e
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<div id="presentation" style="height: 1px"></div>
<section class="page-section main-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4 ">
                <div class="col-md-12 margin-bottom-30">
                    <h2 class="title-section main-background"><span
                                class="title-regular main">L'ASSOCIATION</span><br />MIAGE+</h2>
                    <hr class="title-underline" />
                </div>
                <div class="row margin-bottom-30">
                    <div class="col-md-6">
                        <div class="col-xs-10">
                            <h3>Experience</h3>
                        </div>
                        <div class="col-md-12">
                            <p class="main-background justified">Depuis plus de 10 ans... In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-xs-10">
                            <h3>Savoir-faire</h3>
                        </div>
                        <div class="col-md-12">
                            <p class="main-background justified">Des &eacute;tudiants engag&eacute;s... solliudin, elementum, dictum pur quam volutpat suscipit antena.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-xs-10">
                            <h3>Vari&eacute;t&eacute;</h3>
                        </div>
                        <div class="col-md-12">
                            <p class="main-background justified">Plusieurs langages maitris&eacute;s... solliudin, elementum, dictum pur quam volutpat suscipit antena.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-xs-10">
                            <h3>Rapidit&eacute;</h3>
                        </div>
                        <div class="col-md-12">
                            <p class="main-background justified">Demandez aux clients... In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8 ">
                <img class="img-responsive" src="img/logo_white.png" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Members -->
<section class="page-section">
    <div class="container">
        <!-- Title -->
        <div class="col-md-12">
            <h2 class="title-section"><span class="title-regular main">LES MEMBRES</span><br />DU BUREAU</h2>
            <hr class="title-underline" />
        </div>
    </div>
    <div class="container">
        <!-- Line -->
        <div class="col-md-12 padding-30">
            <div class="col-md-4 col-md-push-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xs-10">
                            <h2>Paul DUBOIS</h2>
                        </div>
                        <div class="col-md-12">
                            <h3>Tr&eacute;sorier</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-pull-4">
                <img class="img-responsive" src="https://loremflickr.com/240/320/boy" alt="" />
            </div>
            <div class="col-md-4 col-md-push-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xs-10">
                            <h2>Marc DUBOIS</h2>
                        </div>
                        <div class="col-md-12">
                            <h3>Pr&eacute;sident</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-pull-4">
                <img class="img-responsive" src="https://loremflickr.com/240/320/man" alt="" />
            </div>
        </div>
        <div class="col-md-12 padding-30">
            <div class="col-md-4 col-md-push-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xs-10">
                            <h2>Camille HENRY</h2>
                        </div>
                        <div class="col-md-12">
                            <h3>Organisatrice</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-pull-4">
                <img class="img-responsive" src="https://loremflickr.com/240/320/girl" alt="" />
            </div>
            <div class="col-md-4 col-md-push-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xs-10">
                            <h2>St&eacute;phanie PAUL</h2>
                        </div>
                        <div class="col-md-12">
                            <h3>Figurante</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-pull-4">
                <img class="img-responsive" src="https://loremflickr.com/240/320/women" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Planning -->
<section class="page-section main-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h2 class="title-section main-background"><span class="title-regular main">PLANNING
								DES</span><br />EVENEMENTS A VENIR</h2>
                    <hr class="title-underline" />
                </div>
                <div class="col-md-12 padding-30">
                    <div class="col-md-12 padding-30">
                        <div class="col-md-12">
                            <h2 class="main-background">24 Décembre</h2>
                            <p class="main-background">Repas de Noël</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h2 class="main-background">31 Décembre</h2>
                        <p class="main-background">Soir&eacute;e du nouvel an</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Actualités -->
<div id="actualites" style="height: 1px"></div>
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-section"><span class="title-regular">NOS</span><br />ACTUALITES</h2>
                <hr class="title-underline" />
            </div>
        </div>

        <?php
        $news = glob('actualites/*');
        if (empty($news)) {
            echo '<h2 class="title-section title-regular margin-bottom-50">Oups, il n\'y a rien à afficher ici...</h2>';
        } else {
            echo '<div id="carousel_news" class="owl-carousel owl-theme">';

            foreach ($news as $new) {
                $creation_date = filectime($new);
                $article = substr(strrchr($new, "/"), 1);
                $tab_news[$creation_date] = $article;
            }
            krsort($tab_news); //fichier le plus récent en premier

            foreach ($tab_news as $article) {
                echo '<table><tr><td>';
                echo '<article style="margin: 0px 5px;"><img class="img-thumbnail" src="http://placehold.it/690x527" alt="" />';
                $articleData = ConvertMarkdown($article, 1);
                echo $articleData['txt'];
                echo '</article>';
                echo '</td></tr><tr><td class="text-center">';
                if (!empty($articleData['cut'])) {
                    echo '<button class="btn btn-primary" style="display: block;margin: 0px 5px;" onclick="news_onclick(\'' . $article . '\');">Lire l\'article</button>';
                }
                echo '</td></tr></table>';
            }
            echo '</div>';
        }
        ?>
    </div>
</section>

<!-- Portfolio -->
<div id="portfolio" style="height: 1px"></div>
<?php
$photos = glob('photos/*');
?>
<section class="page-section main-background">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-6">
                    <h2 class="title-section main-background"><span class="title-regular">NOS</span><br />PHOTOS
                    </h2>
                    <hr class="title-underline" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <?php
                if (empty($photos)) {
                    echo '<h2 class="title-section title-regular margin-bottom-50">Oups, il n\'y a rien à afficher ici...</h2>';
                } else {
                    echo '<div id="carousel_pictures" class="owl-carousel owl-theme" ondrag="dragged(this)">';
                    foreach ($photos as $photo) {
                        echo '<img class="img-thumbnail portfolio_pictures" src="' . $photo . '" onclick="zoom_onclick(this);"/>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us -->
<div id="contact" style="height: 1px"></div>
<section class="page-section">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 contact-container">
                            <h2 class="title-section"><span class="title-regular">NOUS</span><br />CONTACTER</h2>
                            <hr class="title-underline" />
                            <p id="result_mail">Maecenas luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.</p>
                            <form name="form_mail" id="form_mail" action="send_mail.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user" id="user" placeholder="Nom" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mail" id="mail" placeholder="Adresse mail" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message" style="resize: none"></textarea>
                                </div>
                                <div class="text-center margin-top-30">
                                    <button type="button" class="btn btn-default" id="submit_mail" onclick="send_mail();">ENVOYER&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-menu">
                <div>
                    <a href="index.php">
                        <img class="footer-logo" src="img/logo_footer.png" alt="logo">
                    </a>
                </div>
                <div>
                    <address class="margin-bottom-30">
                        <p>Adresse<br />Postale</p>
                    </address>
                </div>
                <div class="margin-bottom-30">
                    <a href="https://www.site.web">www.site.web</a>
                    <br />
                    <a href="mailto:president@miage-plus.fr">president@miage-plus.fr</a>
                </div>
                <div>
                    <a href="https://www.facebook.com/assomiageplus/" title="Facebook" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/AssoMiagePlus" title="Twitter" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Instagram" target="_blank" class="social-icon"><i
                                class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-6 footer-menu">
                <h4>A propos</h4>
                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                <!-- <a href="#">
                <button class="btn btn-primary">En savoir plus</button>
            </a> -->
            </div>
            <div class="col-md-3 footer-menu">
                <h4>Navigation</h4>
                <ul>
                    <a href="#presentation">
                        <li>Pr&eacute;sentation</li>
                    </a>
                    <a href="#actualites">
                        <li>Actualit&eacute;s</li>
                    </a>
                    <a href="#portfolio">
                        <li>Photos</li>
                    </a>
                    <a href="#contact">
                        <li>Contacts</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img_modal">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>

<!-- Scripts -->
<!-- Loads Bootstrap Main JS -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

<!-- Initiate Portoflio Script -->
<script src="extensions/portfolio/isotope.min.js"></script>
<script src="extensions/portfolio/portfolio.js"></script>

<!-- Initiate Fancybox/Lightbox Script -->
<!-- Fancybox/Lightbox -->
<script type="text/javascript" src="extensions/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="extensions/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" type="text/css" href="extensions/fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="extensions/fancybox/jquery.fancybox-media.js"></script>
<!-- Initiate Fancybox/Lightbox for Videos -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
         */
        $('.fancybox-media')
            .attr('rel', 'media-gallery')
            .fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                prevEffect: 'none',
                nextEffect: 'none',
                arrows: false,
                helpers: {
                    media: {},
                    buttons: {}
                }
            });
    });
</script>
</body>

</html>