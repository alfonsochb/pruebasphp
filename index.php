<?php

require_once 'vendor/autoload.php';
use Achb\AchbLibrary\Class\AchbResources AS Resource;

/**
 * @link https://blog.pleets.org/article/crear-librer%C3%ADa-en-php-instalable-con-composer
 * @link https://culttt.com/2014/05/07/create-psr-4-php-package/
 * @link https://styde.net/creacion-de-una-nueva-libreria-para-laravel-con-composer-y-phpunit/
 * @link https://www.imaginacolombia.com/articulos/7-librerias-de-php-que-todo-desarrollador-web-deberia-conocer
 * s
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