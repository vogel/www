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
        <h2 class='layout__textCenter'><a href="/detach-process-from-terminal" class='look__more'>Detach a running process</a></h2>
        <section>
            <a href='/detach-process-from-terminal' class='look__image'
               style='background-image:url(img/02_detach/terminal.jpg)'></a>

            <p><em>This is a simple and very effective way to detach a currently running process from a terminal. Don't by shy - read on :)</em>
            </p>
        </section>
        <aside>
            <h2>Wait - there's more!</h2>
            <h3><a class='look__more look__moreSmall' href='/ongamestart-2013'>OGS 2013</a></h3>
        </aside>
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