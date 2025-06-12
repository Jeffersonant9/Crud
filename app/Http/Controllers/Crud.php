<?php

namespace App\Http\Controllers;

use App\Domain\Service\Crud\CreateService;
use App\Domain\Service\Crud\DeleteService;
use App\Domain\Service\Crud\IndexService;
use App\Domain\Service\Crud\UpdateService;
use Illuminate\Http\request;
use App\Domain\Repository\ContructCrudRepo;
class Crud extends ContructCrudRepo
{
    public function index()
    {
        return IndexService::index();
    }
    public function create( $request)
    {
        $class = New CreateService();
        return $class->create($request->all());
    }
    public function update( $request)
    {
        $class = New UpdateService();
        return   $class->Update($request->all());
    }
    public function delete( $request)
    {
        $class = New DeleteService();
        return $class->Delete($request->all());
    }
}