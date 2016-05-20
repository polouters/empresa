<?php

/**
 * Created by PhpStorm.
 * User: Mikel
 * Date: 3/2/16
 * Time: 10:37
 */
abstract class url
{
    private $raiz = "http://192.168.33.10/empresa";

    /**
     * @return string
     */
    public function getRaiz()
    {
        return self::$raiz;
    }


}

?>