<?php

namespace VirtualStaff\ExamBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use VirtualStaff\ExamBundle\Entity\Record;

class RecordController extends Controller {

    /**
     * @Route("/record/all", name="record_all", defaults={"_format"="json"})
     * @Method({"GET"})
     */
    public function allAction(Request $request) {
        $repo = $this->getDoctrine()->getRepository('VirtualStaffExamBundle:Record');
	$recs = $repo->findAll();

	$records = array();
	foreach ($recs as $rec) {
		$records[] = array(
			'usrid' => $rec->getId(),
			'usrnm' => $rec->getUsrnm(),
			'fname' => $rec->getFname(),
			'lname' => $rec->getLname()
		);
	}

        return new Response(json_encode(array(
	    'records' => $records
	)));
    }

    /**
     * @Route("/record/add", name="record_add", defaults={"_format"="json"})
     * @Method({"POST"})
     */
    public function addAction(Request $request) {
        $usrnm = $request->request->get('usrnm');
        $fname = $request->request->get('fname');
        $lname = $request->request->get('lname');

	$record = new Record();
        $record->setUsrnm($usrnm);
	$record->setFname($fname);
	$record->setLname($lname);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($record);
        $em->flush();

        return new Response(json_encode(array(
	    'usrid' => $record->getId(),
 	    'usrnm' => $usrnm,
            'fname' => $fname,
            'lname' => $lname
	)));
    }

    /**
     * @Route("/record/del", name="record_del", defaults={"_format"="json"})
     * @Method({"POST"})
     */
    public function delAction(Request $request) {
        $records = $request->request->get('record');

	$repo = $this->getDoctrine()->getRepository('VirtualStaffExamBundle:Record');
	$em   = $this->getDoctrine()->getEntityManager();

	foreach ( $records as $record ) {
	    $rec = $repo->find($record);
	    $em->remove($rec);
	    $em->flush();	
	}

	return new Response(json_encode(array()));
    }
}
