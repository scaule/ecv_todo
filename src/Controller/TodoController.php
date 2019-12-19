<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    /**
     * @Route("/save/{todo}", name="add_todo")
     */
    public function save(SessionInterface $session, $todo)
    {
        $sessionTodo = $session->get('todo');
        if(is_null($sessionTodo) || !is_array($sessionTodo)){
            $sessionTodo = [];
        }

        $sessionTodo[] = $todo;
        $session->set('todo', $sessionTodo);

        return new JsonResponse(true);
    }

    /**
     * @Route("/all", name="get_all")
     */
    public function all(SessionInterface $session)
    {
        var_dump($session->all());die;
    }


    /**
     * @Route("/clear", name="clear_all")
     */
    public function clear(SessionInterface $session)
    {
       $session->set('todo',[]);

       return new JsonResponse(true);
    }
}
