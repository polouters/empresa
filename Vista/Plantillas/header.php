<header>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                    <span class="sr-only">Desplegar / Ocultar Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo self::getRaiz()?>/index.php" class="navbar-brand logo"><img src="<?php echo self::getRaiz()?>/Vista/img/logo.png" alt="ColorssPalette" class="img-responsive imgLogo"></a>
            </div>
            <!--Inicia menú-->
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav">
                    <li <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo 'class="active"';}?>><a href="<?php echo self::getRaiz()?>/index.php">Home</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF'])=="palette.php"){echo 'class="active"';}?>><a href="<?php echo self::getRaiz()?>/Vista/palette.php">Palette</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="jumbotron">
        <?php
            if(basename($_SERVER['PHP_SELF'])=="index.php"){
                echo '<div class="container text-center"><img src="'.self::getRaiz().'Vista/img/logo.png" alt="logo" class="imgJBT"><p>ColorssPalette</p></div>';
            }elseif(basename($_SERVER['PHP_SELF'])=="palette.php"){
                echo '<div class="container"><h1>Palette</h1><p>Choose from forty-eight colors for the background and font color</p></div>';
            }
        ?>
    </section>
</header>