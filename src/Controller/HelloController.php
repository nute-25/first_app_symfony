<?php

namespace App\Controller;

// use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController {
	function hello() {
		// return new Response('Hello !');
		// return $this->render('base.html.twig');
		// return $this->redirectToRoute('/');
		// throw $this->createNotFoundException();
		$title = "utilisateurs";
		$users = ["Dingo", "Donald", "Mickey"];
		return $this->render('hello.html.twig', ['title' => $title, 'array' => $users]);
	}
}

?>