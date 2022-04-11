<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
            <link rel="stylesheet" href="indexStyle.css">
        </head>
        <body>
            <div id="indexContent"> 
                <p id="indexText"> Hello, I'm <span id="color">Tom Burrows</span>,</p>
                <p id="indexText"> I'm a software engineer. </p>
                <a href="#navBar" class="button">See My Work</a>
            </div>
            <section id="about"> 
                <?php include 'header.php'?>
                <p class="homeTitle">ABOUT</p>
            </section>
            <section id="portfolio">
                <h1 class="homeTitle">PORTFOLIO</h1>
                <div id="iamtom">

                </div>
                <div class="myGrid">
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    <div class="item">
                        <img class="portfolioImg" src="img/placehold.png" alt="temp"/>
                        <h3> Placeholder </h3>
                    </div>
                    
                </div>
            </section>

            <script>
                /*---------------------------------------*/
                /*	NAVIGATION AND NAVIGATION VISIBLE ON SCROLL
                /*---------------------------------------*/
                $( window ).on( "load", function() {
                    mainNav();
                    $(window).scroll(function() {
                        mainNav();
                    });
                    function mainNav() {
                        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
                        if (top > 40) $('.navbar-fixed-top').stop().animate({
                            "opacity": '1',
                            "top": '0'
                        });
                        else $('.navbar-fixed-top').stop().animate({
                            "top": '-70',
                            "opacity": '0'
                        });

                    }
                    });
            </script>
        </body>
    </html>
