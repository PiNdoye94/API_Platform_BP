<?php

namespace App\Controller;

use App\Entity\ClientPhysique;
use App\Form\ClientPhysiqueType;
use App\Repository\ClientPhysiqueRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParticulierController extends AbstractController
{
    /**
     * @Route("/particulier", name="particulier")
     */
    public function new(Request $request): Response
    {
        $particulier = new ClientParticulier();
        $data = json_decode(file_get_contents("php://input"));
        // traitement du formulaire
        if (!empty($data->nom) &&
            !empty($data->prenom) &&
            !empty($data->telephone) &&
            !empty($data->adresse) &&
            !empty($data->email) &&
            !empty($data->cin) &&
            !empty($data->validite_cin) &&
            !empty($data->activite)) 
        {
            $em = $this->getDoctrine()->getManager();

            $particulier->nom = $data->nom;
            $particulier->prenom = $data->prenom;
            $particulier->telephone = $data->telephone;
            $particulier->adresse = $data->adresse;
            $particulier->email = $data->email;
            $particulier->cin = $data->cin;
            $particulier->validite_cin = $data->validite_cin;
            $particulier->activite = $data->activite;
            $particulier->created = date('Y-m-d H:i:s');

            $em->persist($particulier);
            $em->flush();
            //return $this->redirectToRoute('addPhysique');

            // réponse 201 si le client a été créé
            http_response_code(201);
    
            // message de confirmation de l'ajout
            echo json_encode(array("message" => "client was created."));
        }else{
    
            //réponse code 503 s'il n'y a pas ajout
            http_response_code(503);
    
            // message du réponse 503
            echo json_encode(array("message" => "Unable to create client."));
        }
    }
    /**
     * @Route("/ListPhysique", name="ListPhysiques")
     */
    public function ListPhysique(ClientPhysiqueRepository $repository)
    {
        $ClientPhysiques = $repository->findAll();

        return $this->render('physique/listPhysique.html.twig', [
            "ClientPhysiques" => $ClientPhysiques,
        ]);
    }
}
