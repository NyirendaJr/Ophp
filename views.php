<?php
use Controllers\UserController;
use Config\GlobalView;
use Config\View;
use Config\Form;
use Models\User;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;

Debug::enable();
ErrorHandler::register();
DebugClassLoader::enable();

use Phinx\Db\Table\Column;
use Phinx\Db\Adapter\AdapterInterface;
use Phinx\Db\Table\Table;
use Controllers\QuestionController;
use Controllers\AnswerController;
use Controllers\UpvoteController;

class HomeView extends GlobalView
{
    public function get($request,$response, $service){
//        $form = Form::createForm([
//            'email'=>'email',
//            'password' => 'text',
//        ]);
        $users = UserController::getAllUser();
        return View::render("welcome.html.twig",["title"=>"devpyjoh starter",'users' => $users]);
    }

    public function post($request,$response,$service)
    {
        View::redirect("/about");
    }
}

class AboutView extends GlobalView
{

    public function get($request,$response){
        //return UserController::createUser("Alex", "example.com", "12345");
        //return QuestionController::createQuestion("What is your name", 1);
        //return AnswerController::addAnswer("The brain", 1, 3);
        //return UpvoteController::upvoteAnswer(1, 1);
        $qs = QuestionController::getQuestionWithAnswers();
        return View::render("about.html.twig",['qs' => $qs]);

    }

    public function post($request,$response, $service){

    }
}




