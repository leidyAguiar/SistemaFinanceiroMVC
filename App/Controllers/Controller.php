<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Enums\EnumTipoUsuario;

abstract class Controller
{
    protected $app;
    private $viewVar;

    public function __construct($app)
    {
        $this->setViewParam('nameController',$app->getControllerName());
    }

    public function auth()
    {
        if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
            $this->redirect('\login');
        }

        return true;
    }

    public function render($view)
    {
        $viewVar = $this->getViewVar();
        $Sessao  = Sessao::class;
        $EnumTipoUsuario = EnumTipoUsuario::class;

        require_once PATH . '/App/Views/layouts/header.php';
        
        if(!str_contains($view, 'login/index') && !str_contains($view, 'login/cadastro') && !str_contains($view, 'login/reset') && !str_contains($view, 'home'))
            require_once PATH . '/App/Views/layouts/menu_lateral.php';
        require_once PATH . '/App/Views/' . $view . '.php';
        require_once PATH . '/App/Views/layouts/footer.php';
    }

    public function redirect($view)
    {
        header('Location: http://' . APP_HOST . $view);
        exit;
    }

    public function getViewVar()
    {
        return $this->viewVar;
    }

    public function setViewParam($varName, $varValue)
    {
        if ($varName != "" && $varValue != "") {
            $this->viewVar[$varName] = $varValue;
        }
    }
}