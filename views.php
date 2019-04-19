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
        $form = Form::createForm([
            'email'=>'email',
            'password' => 'text'
        ]);
        return View::render("welcome.html.twig",["title"=>"devpyjoh starter",'form' => $form,]);
    }

    public function data_me(){
        return "Hello";
    }
}

class AboutView extends GlobalView
{
    public function get($request,$response){
        return View::render("about.html.twig",[
            "title"=>"devpyjoh starter",
        ]);
    }

    public function data_me(){
        return "Hello";
    }
}
