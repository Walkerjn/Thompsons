<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php echo $page_title;?>
    </title>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MB99MB4');
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="google-site-verification" content="32tcJNY2CsH5bp0Q0MzFiYlKN1yAYPQnemz0NN1wGnA" />
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="Decorators,Banbury,Property,Gardening,Painting,Painters,Maintenance">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/jquery.mosaic.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="application/ld+json">
        { "@context" : "http://schema.org", "@type" : "LocalBusiness", "name" : "Thompson's Property Care", "image" : "https://www.thompsonspropertycare.co.uk/img/main-logo.png", "telephone" : "01295 258 052", "email" : "enquiries@thompsonspropertycare.co.uk" }
    </script>
    <?php include("snow.php");?>
</head>

<body>
    <div class="header-wrapper">
        <div class="header">
            <div class="headerbar">
                <div class="container">
                    <div class="header-content">
                        <div class="header-left">
                            <div class="logo">
                                <?php
                                        if (($currentDate > $snowDateBegin) && ($currentDate < $snowDateEnd)){
                                        echo "<a href='/'><img src='img/christmas-logo.png' alt='Thompsons Property Christmas Care Logo' title='Thompsons Property Care'></a>";
                                            }else{
                                        echo "<a href='/'><img src='img/main-logo.png' alt='Thompsons Property Care Logo' title='Thompsons Property Care'></a>";  
                                                }
                                    ?>
                            </div>
                        </div>
                        <div class="header-right">
                            <ul class="nav navbar-nav" style="color:white; text-align:center;" id="desktop-nav">
                                <li class="<?php if($page =='Home'){echo 'navactive';}?> nav-items"><a href="/">HOME </a></li>
                                <li class="<?php if($page =='Services'){echo 'navactive';}?> nav-items"><a href="services.php">SERVICES </a></li>
                                <li class="<?php if($page =='Contact'){echo 'navactive';}?> nav-items myBtn"><a href="contactus.php">CONTACT US</a></li>
                            </ul>
                            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="menu menu-trigger noprint " id="hamburger-icon" title="Menu">
                                <span class="line line-1"></span>
                                <span class="line line-2"></span>
                                <span class="line line-3"></span>
                                <span class="menu-text">MENU</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-collapse collapse" id="mobile-nav">
        <ul class="nav mobile-nav visible-xs " style="color:white; text-align:center;">
            <li style="-webkit-tap-highlight-color:rgba(0, 0, 0, 0.6);" class="<?php if($page=='Home' ){echo 'mobilenavactive';}?> nav-items"><a href="/">HOME</a></li>
            <li style="-webkit-tap-highlight-color:rgba(0, 0, 0, 0.6);" class="<?php if($page =='Services'){echo 'mobilenavactive';}?> nav-items"><a href="services.php">SERVICES</a></li>
            <li data-toggle="collapse" data-target=".navbar-collapse" style="-webkit-tap-highlight-color:rgba(0, 0, 0, 0.6);" class="<?php if($page =='Contact'){echo 'mobilenavactive';}?> nav-items myBtn"><a href="contactus.php">CONTACT US</a></li>
        </ul>
    </div>
    <script>
        $("#hamburger-icon").click(function () {
            $("#hamburger-icon").toggleClass("active");
        });
        $(".myBtn").click(function () {
            $("#hamburger-icon").toggleClass("active");
        });
    </script>