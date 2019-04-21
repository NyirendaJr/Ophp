<?php
use Controllers\Users;
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

require __DIR__."/db/migrations/20190221174301_create_user_table.php";
use Phinx\Db\Table\Column;
use Phinx\Db\Adapter\AdapterInterface;
use Phinx\Db\Table\Table;

class HomeView extends GlobalView
{
    public function get($request,$response, $service){
        if (isset($_GET['name'])){
            return "Hello world2";
        }
        $form = Form::createForm([
            'email'=>'email',
            'password' => 'text',
        ]);
        return View::render("welcome.html.twig",["title"=>"devpyjoh starter",'form' => $form,]);
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
        View::redirect("/");
    }
}




