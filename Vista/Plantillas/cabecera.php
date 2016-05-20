<!DOCTYPE html>
<html>
<head>
    <?php
        $archivo_actual = basename($_SERVER['PHP_SELF']);

        switch($archivo_actual){
            case "index.php": echo "<title>BEW Software</title>";

                break;
            case "palette.php": echo "<title>BEW Software</title>";

                break;
            default: echo "<title>ColorssPaletteerg</title>";
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="title" content="BEW S">
    <link rel="stylesheet" type="text/css" href="<?php echo self::getRaiz();?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo self::getRaiz();?>/css/colorsspalette.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo self::getRaiz();?>/css/style.css">

</head>
<body>
<div class="wrap">

