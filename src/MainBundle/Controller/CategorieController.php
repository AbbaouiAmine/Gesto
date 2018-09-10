<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Model\Categorie;
use MainBundle\Form\Model\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    public function addAction(Request $request)
    {

        $categorie = new Categorie;
        $form = $this->createForm(CategorieType::class, $categorie, array('action' => 'add'));
        $view = $form->createView();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                try {
                    $manager->persist($categorie);
                    $manager->flush();
                    $this->get('session')->getFlashBag()->add('message_add', 'Categorie bien ajoute');

                    // return $this->redirectToRoute('login');
                } catch (\Exception $e) {
                    $this->get('session')->getFlashBag()->add('error', 'Erreur d\'inscription');
                }

            }
        }

        return $this->render('@Main/Default/Update/addform.html.twig',
            array(
                "messageinfo" => "",
                "title" => "Ajouter une categorie",
                "form" => $view,

            ));

    }
    public function editAction()
    {

    }
    public function selectAction()
    {

    }
    public function searchAction(Request $request)
    {
     
        if ($request->getMethod() == 'POST')
        {
            $par1 = $request->get('categorie');
            $repository = $this->getDoctrine()->getManager()->getRepository('MainBundle:Model\Categorie');
            $cat = $repository->findOneBy(array('libelle' => $par1));
            if($cat->getLibelle()=="libelle")
            {
                $this->get('session')->getFlashBag()->add('info', 'Categorie existe');
            }
            else{
                $this->get('session')->getFlashBag()->add('info', 'Categorie not existe');
            }
        }
        
        return $this->render('@Main/Default/Update/searchform.html.twig',
            array(
                "messageinfo" => "",
                "title" => "Ajouter une categorie",
            ));
    }
    public function deleteAction()
    {

        $categorie = new Categorie;
        $form = $this->createForm(CategorieType::class, $categorie, array('action' => 'Supprimer'));
        $view = $form->createView();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                try {
                    $manager->persist($categorie);
                    $manager->flush();
                    $this->get('session')->getFlashBag()->add('message_add', 'Categorie bien ajoute');

                    // return $this->redirectToRoute('login');
                } catch (\Exception $e) {
                    $this->get('session')->getFlashBag()->add('error', 'Erreur d\'inscription');
                }

            }
        }

        return $this->render('@Main/Default/addform.html.twig',
            array(
                "messageinfo" => "",
                "title" => "Ajouter une categorie",
                "form" => $view,

            ));
    }
}
