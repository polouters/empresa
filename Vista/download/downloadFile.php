<?php
/**
 * Created by PhpStorm.
 * User: Mikel
 * Date: 3/2/16
 * Time: 17:37
 */
    header("Content-disposition: attachment; filename=colorsspalette.min.css");
    header("Content-type: text/css");
    readfile("colorsspalette.min.css");
?>
