<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request) {

        $charactersWoW = $this->get('BattleNetService')->getCharactersWoW();

        return $this->render('@App/default/index.html.twig', array(
            'charactersWoW' => $charactersWoW
        ));
    }
}
