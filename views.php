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
        if (isset($_GET['name'])){
            error_log("Hello",4);
            return "Hello world2";
        }
        $form = Form::createForm([
            'email'=>'email',
            'password' => 'text'
        ]);
        return View::render("about.html.twig",[
            "title"=>"devpyjoh starter",
            "form"=>$form
        ]);
    }

    public function post($request,$response, $service){
        UserController::createUser($request->name);
        View::redirect("/");
    }
}




