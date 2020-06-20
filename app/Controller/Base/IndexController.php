<?php
declare(strict_types=1);

namespace App\Controller\Base;

use App\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index($request, $response)
    {
        $data = array(
            'success' => true
        );

        $response->getBody()->write(json_encode($data));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }

    /**
     * @param $request
     * @param $response
     * @return mixed
     */
    public function index2($request, $response)
    {

        return $this->view->render($response, 'base/index.twig', [
            'a_variable' => 'Hello World',
            'others' => [
                'a' => 1,
                'b' => 2,
            ]
        ]);
    }

}