<?php

namespace App\Services;

class Router
{
    private static $list = []; //список всех урлов на сайте

    /**
     * Метод регистрирует роут для обычной страницы
     * @param $uri
     * @param $page_name
     */

    public static function page($uri, $page_name) // $uri - адрес по которому мы должны перейти
    {
        self::$list[] = [   // self - обращение к свойству. Пополнять массив тем, что мы получили
            "uri" => $uri,
            "page" => $page_name
        ];
    }
    // Вызывая этот метод мы пополняем список списком урлов, которые у нас есть на сайте

    public static function post($uri, $class, $method, $formdata = false, $files = false)
    {
        self::$list[] = [   // self - обращение к свойству. Пополнять массив тем, что мы получили
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true,
            "formdata" => $formdata,
            "files" => $files
        ];
    }

    public static function enable()
    {
        $query = $_GET['q'];

        // переберем все юрлы

        foreach (self::$list as $route) {

            if ($route["uri"] === '/' . $query) {
                if ($route["post"] === true && $_SERVER["REQUEST_METHOD"] === "POST") {
                    // $_SERVER["REQUEST_METHOD"] позволяет узнать, с помощтю какого метода мы переходим по адресу
                    $action = new $route["class"];
                    $method = $route["method"];
                    if ($route["formdata"] && $route["files"]) {
                        $action->$method($_POST, $_FILES);
                    } elseif($route["formdata"] && !$route["files"]) {
                        $action->$method($_POST);
                    } else {
                        $action->$method();
                    }
                    die();
                } else {
                    require_once "views/pages/" . $route["page"] . ".php";
                    die();
                }

            }
        }
        self::error('404');
    }
    public static function error($error)
    {
        require_once "views/errors/" . $error . ".php";
    }

    public static function redirect($uri)
    {
        header('Location: ' . $uri);
        die();
    }
}