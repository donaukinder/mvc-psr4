<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;

class HomeController extends Controller
{

    public function index()
    {
        $dados = array();

        $users = new Users();
        $dados['lista'] = $users->getAll();

        $this->loadTemplate('home', $dados);

    }
}
