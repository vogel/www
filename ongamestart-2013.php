<?php
require(dirname(__FILE__) . "/php/header.php");
require(dirname(__FILE__) . "/php/footer.php");
w_head("My impressions of the 2013 onGameStart HTML5 conference", "OGS 2013 was really good this year: the talks, the workshops, the people - it was all there.");
?>

<body class='layout__full'>
<header class='layout__1_1 look__borderBottom'>
    <nav class='layout__center layout__textCenter'>
        <a href='https://twitter.com/lukaszwojciak'>@lukaszwojciak</a>
    </nav>
</header>

<div class="layout__center layout__contain">
    <a href="/" class="look__gassyEyes"></a>
</div>

<article class='layout__center'>
    <h1 class='layout__textCenter look__highlight'>OGS 2013</h1>
    <section>
        <div class='look__image' style='background-image:url(img/00_ogs/start.jpg)'></div>

        <p><em>To be honest I wasn’t planning on going to the OGS conference this year, but after winning a ticket for
            it in a contest organized by Adam Mazur (<a href="http://twitter.com/end3r" class="look__twitter">@end3r</a>)
            I’ve decided to go all-in and even took part in the workshops organized the day before the big event, and I
            must tell you - it was worth every single cent!</em>
        </p>
    </section>
    <section>
        <h2>Day 0: The workshops</h2>

        <p>The workshop in which I’ve decided to take part was titled: <strong>Making game graphics & animations for the
            “ungifted”</strong> and it was hosted by Robert Podgórski (<a href="http://twitter.com/blackmoondev"
                                                                          class="look__twitter">@blackmoondev</a>) - the
            author of the original <em>“Captain
                Rogers”</em> game series. Robert took us on a journey on which we created a simple character drawing, a
            skeletal
            animation for it, exported it to json and sprites and made it move in the browser with the help of Mat
            Grove’s (<a href="http://twitter.com/Doormat23" class="look__twitter">@Doormat23</a>) <a
                    href="http://www.pixijs.com/" class="look__external">pixi.js</a> rendering engine.</p>

        <div class='look__image' style='background-image:url(img/00_ogs/workshop.jpg)'></div>


        <p>The workshop was a great opportunity to meet the polish html5
            game scene and opened my eyes to how mature the platform is. The workflows I’ve seen and the multitude of
            high-level libraries for game development convinced me that <em>html5 gaming isn’t coming to us - <strong>it’s
                already
                here!</strong></em></p>
    </section>
    <section>
        <h2>Day 1: Slow start, but a great finish</h2>

        <p>After the initial workshop hype, the first day of the conference started slow, with mainly sponsored or
            product talks, which weren’t very interesting. When I thought that the day was lost, Piotr Gawle catched my
            attention with his talk about HTML5 Business and the top 10 mistakes his company made while starting-up.
            After that the tech talks started and you could see that more and more people were waking up.</p>

        <div class='look__image' style='background-image:url(img/00_ogs/venue.jpg)'></div>

        <p><strong>The high-point of day one was reached when Mat Groves took the stage.</strong> He briefly described
            what pixi.js is, how it works and then took off to the juicy tech details of canvas 2d and webgl context
            inner
            workings and how he managed to create a common rendering engine for two completely different context’s. I’ve
            learned about texture memory management, texture packing, sprite optimizations and many, many more
            interesting browser-related rendering behaviours of which I haven’t had a slightest clue about before.</p>

        <div class='look__image' style='background-image:url(img/00_ogs/day1.jpg)'></div>

    </section>
    <section>
        <h2>Day 1 / Day 2: The party</h2>

        <p>When the day one talks were over I took a quick nap and got ready for the Spilgames Party which was meant to
            create a friendly-networking atmosphere for every attendee - and it delivered. <strong>The people from the
                gaming
                industry are awesome!</strong> Alcohol aside, we really enjoyed our tech, problem solving challenges and
            business
            talks. I even got the chance to talk with Ivan Popelyshev (<a href="http://twitter.com/ivanpopelyshev"
                                                                          class="look__twitter">@ivanpopelyshev</a>) -
            the creator of the massive
            multiplayer web-browser game BomberMine (<a href="http://bombermine.clay.io/" class="look__external">http://bombermine.clay.io/</a>),
            and I must say: this guy is
            brilliant!</p>

        <div class='look__image' style='background-image:url(img/00_ogs/party.jpg)'></div>


        <p><em>To sum up: the party was great and it left me really excited for the second day of talks.</em></p>
    </section>
    <section>
        <h2>Day 2: Tech, tech and more tech!</h2>

        <p>After the initial breakfast coffee and cake the second day kicked-off. And I must say - it really kicked-off
            - this day was almost strictly technical and started with a great talk from Ippa Lix about using jaws.js for
            canvas terrain generation (and destruction!). Before I had time to process all the details, Jan Krutisch
            blasted me off with a great web audio API demonstration and native tone (and music!) generation methods -
            without using any pre-recorded sound samples! </p>

        <div class='look__image' style='background-image:url(img/00_ogs/day2.jpg)'></div>

        <p>After that Jasmine Kent took the stage with her in-depth
            analysis of openGL terrain generation history and webGL implementations of the subject. <em>Good we had a
                brief
                break at this point - it let my mind process all the new pieces of information.</em> After the break
            Ivan climbed
            onto the stage. He launched a browser and pointed it to a <strong>live bombermine instance</strong>, started
            hacking his own
            game from the browser and messing with real-live players! I must admit it was the funniest (and still
            technically exciting!) talk of the whole conference.</p>
    </section>

    <section>
        <h3>JS13K contest results</h3>

        <p>In the middle of day two Adam Mazur announced the winner of the js13k game contest (<a
                href="http://js13kgames.com/" class="look__external">http://js13kgames.com/</a>) -
            <em>I didn’t think that you could do such awesome game engines in just under 13kb - congrats to all the
                winners!</em></p>
    </section>
    <section>
        <h2>All things come to an end</h2>

        <p>After 3 more speakers the conference was done and I think it left me wanting more. Currently when I have some
            spare time I try to dig in into character creation with skeletal animation and I’m planning on creating my
            own
            first game. </p>

        <div class='look__image' style='background-image:url(img/00_ogs/end.jpg)'></div>

        <p><em>There is still so much to learn about browser rendering performance, vanillaJS and
            micro-optimizations - but the people at OGS 2013 showed me that it pays off - thank you guys (& gals!)
            for that.</em></p>

        <h3>P.S.</h3>

        <p><strong>Thanks to Michał Budzyński (<a href="http://twitter.com/michalbe" class="look__twitter">@michalbe</a>)
            for organizing such a great event!</strong></p>
    </section>
</article>

<footer class='layout__1_1 layout__bottom look__borderTop'>
    <nav class='layout__center layout__textCenter'>
        <a href='https://twitter.com/lukaszwojciak'>@lukaszwojciak</a>
    </nav>
</footer>

<?php
w_foot();
?>

</body>

</html>