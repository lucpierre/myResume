<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Carbon\Carbon;
// A retirer une fois le formulaire pret
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $age = Carbon::createFromDate(1997, 9, 4)->age;
        return $this->render('default/index.html.twig', array(
            'age' => $age
        ));
    }
    
    public function certificationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listCertifications = $em->getRepository('AppBundle:Certification')->findBy(
            array(),
            array('date' => 'DESC')
        );
        return $this->render('@App/certification.html.twig' , array(
            'listCertifications' => $listCertifications
        ));
    }

    public function skillAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listSkills = $em->getRepository('AppBundle:Skill')->findAll();
        return $this->render('@App/skill.html.twig' , array(
            'listSkills' => $listSkills
        ));
    }    

    public function experienceAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listExperiences = $em->getRepository('AppBundle:Experience')->findAll();
        return $this->render('@App/experience.html.twig', array(
            'listExperiences' => $listExperiences
        ));
    }

    public function hobbiesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listHobbies = $em->getRepository('AppBundle:Hobbies')->findAll();
        return $this->render('@App/hobbies.html.twig' , array(
            'listHobbies' => $listHobbies
        ));
    }

    public function contactAction()
    {
        return new Response('contact');
    }
}
