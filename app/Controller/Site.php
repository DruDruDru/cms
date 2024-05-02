<?php

namespace App\Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Model\User;

class Site
{
    public FilesystemLoader $loader;
    public Environment $twig;
    public array $path;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__ . '/../../views');
    $this->twig = new Environment($this->loader/*, ['cache' => __DIR__ . '/../../twigCache']*/);
        $this->path = require __DIR__ . '/../../config/path.php';
        $this->twig->addGlobal('root', $this->path['root']);
    }

    public function user(array $context)
    {
        echo $this->twig->render('users.php', $context);
    }

    public function signup(array $context)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['password'] === $_POST['password_confirm']) {

            $userData = $_REQUEST;
            $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);

            if (!$_FILES['file']['error']) {

                $uploadDir = __DIR__ . '/../../media';
                $uploadFile = $uploadDir . basename($_FILES['file']['name']) . $_FILES['file']['type'];

                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
                    $userData['avatar'] = $uploadFile;
                }

            } else {
                echo "Ошибка при загрузке файла: " . $_FILES['file']['error'];
            }

            User::create($userData);
            header('Location: '. $this->path['root']);
        }
        echo $this->twig->render('signup.php', $context);
    }

    public function login(array $context)
    {
        echo $this->twig->render('login.php', $context);
    }
}