<?php

namespace App\Http\Controllers;

use App\Http\Domain\Service\index;
use App\Http\Domain\Service\IndexService;
use App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Expr\New_;

class Crud {


  private $request;
  public function index(){
    return  New IndexService;
  }
  public function Create($request){
    $this->request = $request;
     return New Categories($this->$request);
  }
  public function Update($request){
    $this->request = $request;
    return New Categories($this->$request);
  }
  public function Delete($request){
    $this->request = $request;
    return New Categories($this->$request);
  }
}