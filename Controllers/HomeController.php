<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;

class HomeController extends Controller {
	
	public function index() {
		$loader = new \Twig\Loader\FilesystemLoader('resources');
		$twig = new \Twig\Environment($loader);  
		echo $twig->render('home.html');
	}	
}