<?php
    require_once __DIR__ . "/Plantillas/url.php";
    require_once __DIR__ . "/Plantillas/cabecera.php";
    require_once __DIR__ . "/Plantillas/header.php";
?>
    <section class="container" >
        <div class="row">
            <article class="col-xs-12">
                <h1>How does it work?</h1>
                <p class="text">
                    You only have to downloaded ColorssPalette, copy in your web page's folder and link the CSS file as you can see below:
                </p>
                <figure class="highlight">
				    <pre class="textCD"><code class="language-html" data-target="html"><span class="tag">&lt;link</span><span> </span><span class="atr">rel</span><span class="sbl">=</span><span class="atrDT">"stylesheet"</span><span> </span><span class="atr">type</span><span class="sbl">=</span><span class="atrDT">"text/css"</span> <span class="atr">href</span><span class="sbl">=</span><span class="atrDT">"colorsspalette.min.css"</span><span class="tag">&gt;</span></code></pre>
                </figure>
            </article>
            <article class="col-xs-12">
                <h1>How to use it?</h1>
                <p class="text">
                    Once you have link the CSS file, you only have to use the class of the color you want to apply to your background or text.
                    If it's a background will be like this:
                </p>
                <ul class="nav nav-tabs">
                    <li class="active" id="eHtml1"><a href="#html1" >HTML CODE</a></li>
                    <li id="eResult1"><a href="#result1">RESULT</a></li>
                </ul>
                <div class="tab-content cEjemplo1">
                    <div class="tab-pane" id="result1">
                        <div class="bc-silver text">Hello World</div>
                    </div>
                    <div class="tab-pane active" id="html1">
                        <figure class="highlight">
                            <pre class="textCD"><code class="language-html" data-target="html"><span class="tag">&lt;div</span><span> </span><span class="atr">class</span><span class="sbl">=</span><span class="atrDT">"bc-silver"</span><span class="tag">&gt;</span><span class="txt"> Hello World</span><span class="tag">&lt;/div</span><span class="tag">&gt;</span></code></pre>
                        </figure>
                    </div>
                </div>
                <p class="text">
                    If you want to color the text will be like this:
                </p>
                <ul class="nav nav-tabs">
                    <li class="active" id="eHtml2"><a href="#html2" >HTML CODE</a></li>
                    <li id="eResult2"><a href="#result2">RESULT</a></li>
                </ul>
                <div class="tab-content cEjemplo2">
                    <div class="tab-pane" id="result2">
                        <div class="c-silver text">Hello World</div>
                    </div>
                    <div class="tab-pane active" id="html2">
                        <figure class="highlight">
                            <pre class="textCD"><code class="language-html" data-target="html"><span class="tag">&lt;div</span><span> </span><span class="atr">class</span><span class="sbl">=</span><span class="atrDT">"c-silver"</span><span class="tag">&gt;</span><span class="txt"> Hello World</span><span class="tag">&lt;/div</span><span class="tag">&gt;</span></code></pre>
                        </figure>
                    </div>
                </div>
                <p class="text">Now you only have to go to the "Palette" page and choose your favorite color.</p>
            </article>
            <article class="col-xs-12 text-center btn-downl">
                <a href="<?php echo url::getRaiz();?>/download/downloadFile.php" class="btn btn-default btn-lg">Download ColorssPalette</a>
            </article>
        </div>
    </section>
<?php
    require_once __DIR__ . "/Plantillas/footer.php";
    require_once __DIR__ . "/Plantillas/pie.php";
?>
