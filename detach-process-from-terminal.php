<?php
require(dirname(__FILE__) . "/php/header.php");
require(dirname(__FILE__) . "/php/footer.php");
w_head("How to detach a running process from a terminal", "I recently launched an app from a terminal and after few days of running I've found it irritating to keep the terminal window - so I decided to detach it.");
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
    <h1 class='layout__textCenter look__highlight'>Detach a running process</h1>
    <section>
        <div class='look__image' style='background-image:url(img/02_detach/terminal.jpg)'></div>

        <p><em>Recently I've found myself in the need of detaching a process from a terminal - I've launched the Chrome
                browser with some fancy flags, and after a few days of running the terminal window got annoying, so
                I've put a simple method to be able to safely close it without the need to close Chrome:</em>
        </p>
        <p><strong>First go to the terminal and press CTRL+Z - it will stop the running process, then:</strong></p>
        <pre><code class="language-bash">
#resume the last stopped job, but in the background
bg %1

#drop ownership of the job
disown %1

#exit the terminal
exit
        </code></pre>
        <p>And that's it!</p>
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
