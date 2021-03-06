<?php $title = "Home"; include('classes.php'); ?>
<!doctype html>
<!-- BETA VERSION -->
<!-- This site was written and developed by Brendan Boyle of DBZ Technology -->
<html>
    <head>
        <title>DBZ Technology | Home</title>
        <?php include('includes.php'); ?>
        <script async src="/JS/index.js"></script>
    </head>
    <body onload="load();">
        <?php include('analyticstracking.php'); ?>
        <?php $index = true; include('nav.php'); ?>
        <div class="view" id="view1">
            <!-- DBZ Technology -->
            <div class="indexlogo">
                <div class="logo">
                    <h1>DBZ</h1>
                    <h2>Technology</h2>
                </div>
                <div class="indexbuttons">
                    <a href="Design.php" class="roundbutton"><span class="glyphicon glyphicon-pencil roundbuttonicon"></span><br />Design</a>
                    <a href="Technology.php" class="roundbutton"><span class="glyphicon glyphicon-flash roundbuttonicon"></span><br />Technology</a>
                    <a href="Innovation.php" class="roundbutton"><span class="glyphicon glyphicon-certificate roundbuttonicon"></span><br />Innovation</a>
                    <a href="Apps.php" class="roundbutton"><span class="glyphicon glyphicon-phone roundbuttonicon"></span><br />Apps</a>
                    <a href="Portfolio.php" class="roundbutton"><span class="glyphicon glyphicon-user roundbuttonicon"></span><br />Portfolio</a>
                    <a href="Contact.php" class="roundbutton"><span class="glyphicon glyphicon-send roundbuttonicon"></span><br />Contact</a>
                </div>
                <a href="#view2"><img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" /></a>
            </div>
        </div>
        <div class="view" id="view2">
            <!-- Design -->
            <div class="dbzpanel">
                <div class="panelrect" id="panel1">
                    <div class="panelpadding">
                        <h1>Compelling Design</h1>
                        <h2>Simple. Flexible. Elegant.</h2>
                        <p>Design is at the core of what we do at DBZ Technology. We focus heavily on user experience and interaction to make sure your organization's new website is easy to understand and use, both from a user and administrator standpoint. We strive to make your organization known and we strongly and thoroughly incorporate your brand into everything we create. Don't have a brand? No problem! DBZ Technology is more than happy to work with your organization to develop strong branding and design elements for future products. Once we create a brand, we make sure you get the vector files, colors, and logos so that you can develop your brand later with no hassle.</p>
                        <a href="/Design" class="btn btn-success viewbutton"><span class="glyphicon glyphicon-pencil roundbuttonicon"></span><br />Design</a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner.svg" class="panelcorner" alt="Corner" />
            </div>
            <div class="ribbon"></div>
        </div>
        <div class="view" id="view3">
            <!-- Technology -->
            <div class="dbzpanel panelleft" style="">
                <div class="panelrect" id="panel2">
                    <div class="panelpadding">
                        <h1>Technology Experts</h1>
                        <h2>Website Development, Programming, and Computer consulting one click away</h2>
                        <p>DBZ Technology also specializes in end-to-end product solutions. Whether your computer needs a quick tune up or you need a web application designed to handle massive amounts of data, DBZ Technology is always there for support. We work with you one-on-one to ensure that our solution fits your needs perfectly. Let's say that you need a new IT infrastructure with minimal cost. No Problem! DBZ Technology can analyze your current situation, make a plan, build new computers for almost 50% off retail, make the switch in under 3 days, and transfer all of your information to the new system.</p>
                        <a href="/Technology" class="btn btn-success viewbutton"><span class="glyphicon glyphicon-flash roundbuttonicon"></span><br />Technology</a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner2.svg" class="panelcorner panelcornerleft" alt="Corner" />
            </div>
            <div class="ribbon" style="height:50px;"></div>
            <div class="ribbon" style="left: 0px; margin-top: 250px; height: 350px;"></div>
            <div class="ribbon horizontal" style=""><div class="block" style="width: 283px;"><img src="Resources/Images/FoldDown.svg" alt="Fold Down" style="margin-left: 83px" /></div><div class="block" style="width: 283px; float: right; margin-top: -200px;"><img src="Resources/Images/FoldLeft.svg" alt="Fold Left" style="margin-right: 83px" /></div></div>
        </div>
        <div class="view" id="view4">
            <!-- Innovation -->
            <a href="/Innovation" class="btn btn-success viewbutton mainviewbutton centerviewbutton"><h1 class="viewtitle"><span class="glyphicon glyphicon-certificate roundbuttonicon"></span>Always Innovating</h1></a>
            <br />
        </div>
        <div class="view" id="view5">
            <!-- Apps -->
            <a href="/Apps" class="btn btn-success viewbutton mainviewbutton"><h1 class="viewtitle"><span class="glyphicon glyphicon-phone roundbuttonicon"></span>Apps Made Simple</h1></a>
            <br />
            <img src="/Resources/Images/iPhone.png" class="apple iphone" alt="iPhone Website" />
            <img src="/Resources/Images/iPhone-Overwatch.png" class="apple iphone" alt="iPhone Website" />
            <img src="/Resources/Images/iPad.png" class="apple ipad" alt="iPad Website" />
            <img src="/Resources/Images/iPad-Overwatch.png" class="apple ipad" alt="iPad Website" />
        </div>
    </body>
</html>
