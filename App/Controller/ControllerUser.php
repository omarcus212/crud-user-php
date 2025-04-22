<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\BD\ModelUser;

final class ControllerUser
{

    public function getUser(Request $request, Response $response, array $args)
    {
        $resUsers = new ModelUser();
        $response = $response->withJson($resUsers->getUsers())->withStatus(202);
        return $response;
    }
    public function getUserId(Request $request, Response $response, array $args)
    {
        $id = $args['id'];
        $response->getBody()->write("get " . $id);
        return $response;
    }
    public function createUser(Request $request, Response $response, array $args)
    {

        $response->getBody()->write("create");
        return $response;
    }
    public function updateUser(Request $request, Response $response, array $args)
    {
        $id = $args['id'];
        $response->getBody()->write("Put " . $id);
        return $response;
    }
    public function deleteUser(Request $request, Response $response, array $args)
    {
        $id = $args['id'];
        $response->getBody()->write("Delete " . $id);
        return $response;
    }

}




?>