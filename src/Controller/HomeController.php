<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\PropertyRepository;

class HomeController extends AbstractController 
{

	/**
	* @return Response
	* @param PropertyRepository $repository
	* @return Response
	*/
	public function index(PropertyRepository $repository): Response
	{
		$properties = $repository->findLatest();
		return $this->render('pages/home.html.twig', [
			'properties' => $properties
		]);
	}
}