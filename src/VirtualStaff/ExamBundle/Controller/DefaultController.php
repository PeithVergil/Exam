<?php

namespace VirtualStaff\ExamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller {
    /**
     * @Route("/home", name="home")
     */
    public function indexAction() {
	$repo = $this->getDoctrine()->getRepository('VirtualStaffExamBundle:Record');

        return $this->render('VirtualStaffExamBundle:Default:index.html.twig', array(
		'records' => $repo->findAll()
	));
    }
}
