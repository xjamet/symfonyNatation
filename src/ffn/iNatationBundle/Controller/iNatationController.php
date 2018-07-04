<?php

namespace ffn\iNatationBundle\Controller;


use ffn\iNatationBundle\Entity\Juge;
use ffn\iNatationBundle\Entity\Utilisateur;
use ffn\iNatationBundle\Entity\Role;
use ffn\iNatationBundle\Entity\Organisateur;
use ffn\iNatationBundle\Entity\Competition;


use ffn\iNatationBundle\Form\JugeType;
use ffn\iNatationBundle\Form\OrganisateurType;
use ffn\iNatationBundle\Form\UtilisateurType;
use ffn\iNatationBundle\Form\RoleType;
use ffn\iNatationBundle\Form\CompetitionType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class iNatationController extends Controller
{
    public function accueilAction()
    {
        return $this->render('@ffniNatation/Default/accueil.html.twig');
    }

    public  function  creationJugeAction(Request $request)
    {
        $role = new Role;
        $formRole = $this->get('form.factory')->create(RoleType::class, $role);

        if ($request->isMethod('POST') && $formRole->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($role);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Organisateur bien enregistré.');

            return $this->redirectToRoute('creationJuge', array('id' => $role->getIdrole()));
        }

        $juge = new Juge;
        $form = $this->get('form.factory')->create(JugeType::class, $juge);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($juge);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Organisateur bien enregistré.');

            return $this->redirectToRoute('creationJuge', array('id' => $juge->getIdjuge()));
        }


        return $this->render('@ffniNatation/Default/creationJuge', array(
            'form' => $form->createView(),
            'formRole' => $formRole->createView(),
    ));
    }
    public  function  creationOrganisateurAction(Request $request)
    {
        $organisateur = new Organisateur();
        $form = $this->get('form.factory')->create(OrganisateurType::class, $organisateur);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($organisateur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'Juge bien enregistré.');

            return $this->redirectToRoute('creationOrganisateur', array('id' => $organisateur->getIdorganisateur()));
        }


        return $this->render('@ffniNatation/Default/creationOrganisateur', array(
            'form' => $form->createView(),
        ));
    }

    public function administrateurAction(Request $request)
    {
        $utilisateur = new Utilisateur;
        $form = $this->get('form.factory')->create(UtilisateurType::class, $utilisateur);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'utilisateur bien enregistré.');

            return $this->redirectToRoute('administrateur', array('id' => $utilisateur->getIdutilisateur()));
        }


        return $this->render('@ffniNatation/Default/administrateur', array(
            'form' => $form->createView(),
        ));

    }
    public function competitionAction(Request $request)
    {
        $competition = new Competition;
        $form = $this->get('form.factory')->create(CompetitionType::class, $competition);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($competition);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'competition bien créée.');

            return $this->redirectToRoute('competition', array('id' => $competition->getIdcompetition()));
        }


        return $this->render('@ffniNatation/Default/Competition', array(
            'form' => $form->createView(),
        ));
    }
    public function accueilAdminAction()
    {
        return $this->render('@ffniNatation/Default/accueilAdmin');
    }


}
