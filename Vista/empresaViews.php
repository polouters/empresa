<?php

/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 20/5/16
 * Time: 16:18
 */
require_once __DIR__ . "/Plantillas/url.php";
class empresaViews extends url
{
    public static function home(){
        require_once __DIR__ . "/Plantillas/cabecera.php";
        require_once __DIR__ . "/Plantillas/header.php";
        self::getRaiz();
        ?>
        <section class="container" >
            <div class="row">
                <article class="col-xs-12">

                </article>
                <article class="col-xs-12">

                </article>
            </div>
        </section>
        <?php
        require_once __DIR__ . "/Plantillas/footer.php";
        require_once __DIR__ . "/Plantillas/pie.php";
    }


}

?>