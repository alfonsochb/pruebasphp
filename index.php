<?php

require_once 'vendor/autoload.php';
use Achb\AchbLibrary\Class\AchbResources AS Resource;

/**
 * @link https://blog.pleets.org/article/crear-librer%C3%ADa-en-php-instalable-con-composer
 */
class Pruebas
{
    public function sumar(): void
    {
        try {
            echo "====> ".Resource::sum(4, 6);
        } catch(Exception $e) {
            echo "<h3>".$e->getMessage()."</h3>";
        }
    }
}
$obj = new Pruebas();
$obj->sumar();
die;