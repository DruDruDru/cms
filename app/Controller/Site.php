<?php

namespace App\Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Site
{
    public FilesystemLoader $loader;
    public Environment $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__ . '/../../views');
        $this->twig = new Environment($this->loader);
    }

    public function user(array $context)
    {
        echo $this->twig->render('users.html', $context);
    }
}