<?php

namespace UserBundle\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use UserBundle\Entity\User; 
use UserBundle\Form\UserType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
        {
        return $this->redirectToRoute('Menu');
        $error="true";
        }

        $infos = $this->get('security.authentication_utils');
        $error=""; 
        if( $infos->getLastAuthenticationError()!=NULL)
        $error="échec de connexion vérifier vos information";     
        
    

      return $this->render('@User/Security/login.html.twig', array(
        'last_username' => $infos->getLastUsername(),
        'error'         =>$error,
      )
  );
    }

    public function registreAction(Request $request)
    {
        $user=new User();
        $user->setSalt('');
        $user->setRoles(array('ROLE_USER'));
        $form = $this->createForm(UserType::class, $user);
        $view= $form->createView();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request); 
            if ($form->isValid())
            {
                $manager = $this->getDoctrine()->getManager();
               try{
                $manager->persist($user);
                $manager->flush();
                 
                return $this->redirectToRoute('login');
            }catch( \Exception $e)
            {
               $this->get('session')->getFlashBag()->add('error','Erreur d\'inscription');
            }
              
            }
        }

        return $this->render('@User/Security/registre.html.twig',
        array(
			'newform' =>  $view
		 )

                           );
    }

}
