<?php
namespace Controllers;

use \Core\Controller;
use Models\Users;

class HomeController extends Controller
{

    public function index()
    {
        $data = array();

        $users = new Users();
        $data['users'] = $users->getAll();

        $this->loadTemplate('home', $data);

    }
}
