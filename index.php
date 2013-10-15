<?php
require(dirname(__FILE__) . "/php/header.php");
require(dirname(__FILE__) . "/php/footer.php");
w_head("Wojciaks' Web Workshop", "Hi! It's nice to meet you! If you're interested in web tech (HTML5, CSS3, JS, nodeJS, SEO, SEM) - visit us and learn something new :) - Magda & Lukasz");
?>

<body class='layout__full'>
<header class='layout__1_1 look__borderBottom'>
    <div class='layout__1_2 layout__left'>
        <nav class='layout__textCenter layout__center'>
            <a href='https://twitter.com/lukaszwojciak'>@lukaszwojciak</a>
        </nav>
    </div>
    <div class='layout__1_2 layout__right'>
        <nav class='layout__textCenter layout__center'>
            <a href='https://twitter.com/magdawojciak'> @magdawojciak </a>
        </nav>
    </div>
</header>

<div class='layout__center layout__contain'>
    <div class='look__gassyEyes look__noEyes'>
    </div>
</div>

<article class='layout__center layout__neutral'>
    <h1 class='layout__textCenter'> Wojciaks' web workshop</h1>
</article>


<article class='layout__1_2 layout__left'>
    <div class='layout__center'>
        <h2 class='layout__textCenter'><a href="/ongamestart-2013" class='look__more'>OGS 2013</a></h2>
        <section>
            <a href='/ongamestart-2013' class='look__image'
               style='background-image:url(img/00_ogs/start.jpg)'></a>

            <p><em>To be honest I wasn’t planning on going to the OGS conference this year, but after winning a ticket
                    for
                    it in a contest organized by Adam Mazur (<a href="http://twitter.com/end3r"
                                                                class="look__twitter">@end3r</a>)
                    I’ve decided to go all-in and even took part in the workshops organized the day before the big
                    event,
                    and I
                    must tell you - it was worth every single cent!</em>
            </p>
        </section>
    </div>
</article>

<article class='layout__1_2 layout__right'>
    <div class='layout__center'>
        <h2 class='layout__textCenter'><a href="/red-saturday" class='look__more'>Red Saturday</a></h2>
        <section>
            <a href='/red-saturday' class='look__image'
               style='background-image:url(img/01_red/penguin.jpg)'></a>

            <p><em>On October 5th the whole SEO industry held its breath and the owners of many
                    websites pulled their hair in disbelief as their sites vanished from Google's natural search
                    results .
                    The culprit - the Penguin . Google decided to roll out a major update to it's black-hat SEO banning
                    algorithm.</em>
            </p>
        </section>
    </div>
</article>

<footer class='layout__1_1 layout__bottom look__borderTop'>
    <div class='layout__1_2 layout__left'>
        <nav class='layout__textCenter layout__center'>
            <a href='https://twitter.com/lukaszwojciak'>@lukaszwojciak</a>
        </nav>
    </div>
    <div class='layout__1_2 layout__right'>
        <nav class='layout__textCenter layout__center'>
            <a href='https://twitter.com/magdawojciak'> @magdawojciak </a>
        </nav>
    </div>
</footer>

<?php
w_foot();
?>

</body>

</html>