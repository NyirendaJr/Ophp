<?php
use Controllers\Users;
use Config\GlobalView;
use Config\View;
use Config\Form;
use Models\User;
require __DIR__."/db/migrations/20190221174301_create_user_table.php";
use Phinx\Db\Table\Column;
use Phinx\Db\Adapter\AdapterInterface;
use Phinx\Db\Table\Table;

class HomeView extends GlobalView
{
    public function get($request,$response){
        // $funct = new ReflectionParameter(["CreateUserTable","change"],'table');
        $funct = new ReflectionMethod("CreateUserTable","changes");
        $params = $funct->getStaticVariables();
        $class_vars = get_class_vars("CreateUserTable");
        var_dump($class_vars);
        $defaults = [
            'dueDate' => new \DateTime('tomorrow'),
        ];
        $form = Form::createForm([
            'task'=>'text',
            'tasks'=>'text',
        ],$defaults);
        return View::render("welcome.html.twig",[
            "title"=>"devpyjoh starter",
            'form' => $form,
        ]);
    } 
    public function post($request,$response){
        // return $response->redirect("/about")->send();
    } 
}

class AboutView extends GlobalView
{
    public function get($request,$response){
        return View::render("about.html.twig",[
            "title"=>"devpyjoh starter",
        ]);
    }
}
