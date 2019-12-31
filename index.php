<?php $page_title ="Thompson's Property Care";?>
    <?php $pageDescription ="Based in Banbury we are a family run and operated business offering a range of property care services, including, Painting and Decorating, Gardening, Pressure Washing. We believe that it's our attention to detail that makes our work stand out.";?>
        <?php $page = "Home"; ?>
            <?php include("header.php");?>
                <div class="top-img">
                    <img style="width:100%;" src="img/new-main-header.jpeg" alt="Painting and Decorating" title="Decorated Kithcen">
                </div>
                <div class="main-content">
                    <div class="container">
                        <div class="user-info lightbg">
                            <div class="user-info-inner" style="color:#4e4e4e;">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8 col-lg-9 darktxt">
                                        <div class="home-main-content">
                                            <h1 class="home-headings">About Us</h1>
                                            <p>Thompson's Property Care is a Banbury based family business offering a comprehensive range of Property Care Services at realistic and affordable prices to Homeowners, Tenants and Landlords. Our services include, Interior and Exterior Painting & Decorating, Gardening, Pressure Cleaning and many more.</p>
                                            <p>We believe that it's our "attention to detail" that makes our work stand out.</p>
                                            <p>We are happy to offer free Estimates and Advice.</p>
                                        </div>
                                        <div style="margin-top:20px;" class="home-second-section">
                                            <div class="second-section-img">
                                                <?php
                                                echo "$normalpic"; 
                                                ?>
                                            </div>
                                            <div class="second-section-text">
                                                <h2 class="home-headings">Why Choose Us?</h2>
                                                <ul id="tick">
                                                    <li> Experienced</li>
                                                    <li> Professional</li>
                                                    <li> Affordable</li>
                                                    <li> Friendly</li>
                                                    <li> Trust worthy</li>
                                                    <li> References Available</li>
                                                    <li> Insured</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-3">
                                        <div id="sidebar">
                                            <?php include("sidebar.php");?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="margin-top:20px;" class="home-image-section">
                                            <h2 class="home-headings">Latest Projects..</h2>
                                            <div style="pointer-events:none" class="instagram">
                                                <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
                                                <iframe src="https://cdn.lightwidget.com/widgets/77639a1a52d253ccae3ec35ffbb5d2d7.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("footer.php");?>