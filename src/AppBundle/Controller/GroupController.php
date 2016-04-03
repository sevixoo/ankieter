<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Basic\BasicController;

class GroupController extends BasicController
{
    /**
     * @Route("/group", name="group")
     */

    public function indexAction(Request $request)
    {

        $conn = $this->get('database_connection');
        $groups = $conn->fetchAll('SELECT * FROM Groups');

        // replace this example code with whatever you need
        return $this->render(':group:index.html.twig', array(
            'groups' => $groups
        ));
    }

    /**
     * @Route("/group/{id}", name="groupIndex")
     */

    public function groupIndexAction(Request $request, $id)
    {

        $conn = $this->get('database_connection');
        $groups = $conn->fetchAll('SELECT * FROM Groups');

        // replace this example code with whatever you need
        return $this->render(':group:index.html.twig', array(
            'groups' => $groups
        ));
    }

    /**
     * @Route("/group/{id}/pushCSV", name="groupPushCSV")
     */

    public function groupPushCSVAction(Request $request, $id)
    {

        $conn = $this->get('database_connection');
        $groups = $conn->fetchAll('SELECT * FROM Groups');

        // replace this example code with whatever you need
        return $this->render(':group:index.html.twig', array(
            'groups' => $groups
        ));
    }

    /**
     * @Route("/group/{id}/pullCSV", name="groupPullCSV")
     */

    public function groupPullCSVAction(Request $request, $id)
    {

        $conn = $this->get('database_connection');
        $groups = $conn->fetchAll('SELECT * FROM Groups');

        // replace this example code with whatever you need
        return $this->render(':group:index.html.twig', array(
            'groups' => $groups
        ));
    }

    /**
     * @Route("/group/add", name="groupAdd")
     */

    public function groupAddAction(Request $request)
    {

        $conn = $this->get('database_connection');
        $groups = $conn->fetchAll('SELECT * FROM Groups');

        // replace this example code with whatever you need
        return $this->render(':group:indexAdd.html.twig', array(
            'groups' => $groups
        ));
    }

    /**
     * @Route("/group/{id}/delete", name="groupDelete")
     */

    public function groupDeleteAction(Request $request, $id)
    {

        $conn = $this->get('database_connection');

        $conn->exec("DELETE FROM `Groups` WHERE `id` = $id");

        $groups = $conn->fetchAll('SELECT * FROM Groups');


        // replace this example code with whatever you need
        return $this->render(':group:index.html.twig', array(
            'groups' => $groups
        ));
    }



    /*
     * Przykładowo:
     *
     * public function updateApplyStateAction(){
        $p = new PlayersModel( $this->getDoctrine() );

        $data= array(
            "data" => $p->updateApplyState( $_POST["id_player_tour"] , $_POST["accepted"] , $_POST["active"] )
        );
        return $this->getJSONResponse($data);
        LUB return $this->getJSONResponse($data,Response::HTTP_BAD_REQUEST);// inny kod odp dla błędu
    }
     *
     * wykorzystanie kodów Http
     *
     * np: Response::HTTP_OK
     *
     *
     * odp z API zawsze:
     * code400=>
     * {
     *  "success" = 1,
     *  "data" = $twoje_dane np id dodanego rekordu lub czy został usunięty
     * }
     * code!=400
     * {
     *  "success" = 0,
     *  "error" = string
     *   error_code = int
     * }
     * */
}