<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class GenusController extends Controller {
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName) {
        $fanFact = 'Lorem ipsum dolor sit amet, *consectetur* adipisicing elit. Placeat, ratione!';
        $fanFact = $this->get('markdown.parser')->transform($fanFact);

        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'fanFact' => $fanFact,
        ]);
    }

    /**
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction() {
        $notes = [
            [
                'id' => 1,
                'username' => 'AquaPelham 44444',
                'avatarUri' => '/images/leanna.jpeg',
                'note' => 'Octopus asked me a riddle, outsmarted me',
                'date' => 'Dec. 10, 2015'
            ],
            [
                'id' => 2,
                'username' => 'AquaWeaver',
                'avatarUri' => '/images/ryan.jpeg',
                'note' => 'I counted 8 legs... as they wrapped around me',
                'date' => 'Dec. 1, 2015'
            ],
            [
                'id' => 3,
                'username' => 'AquaPelham',
                'avatarUri' => '/images/leanna.jpeg',
                'note' => 'Inked!',
                'date' => 'Aug. 20, 2015'
            ],
        ];
        $data = [
            'notes' => $notes
        ];

        return new JsonResponse($data);
    }
}