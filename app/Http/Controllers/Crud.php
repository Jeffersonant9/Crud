<?php

namespace App\Http\Controllers;

use App\Domain\Service\Crud\CreateService;
use App\Domain\Service\Crud\DeleteService;
use App\Domain\Service\Crud\IndexService;
use App\Domain\Service\Crud\UpdateService;
use Illuminate\Http\Request;
use App\Domain\Infra\ContructCrud;
class Crud extends ContructCrud
{
    public function index()
    {
        return IndexService::index();
    }
    public function create(Request $request)
    {
        $class = New CreateService();
        return $class->create($request->all());
    }
    public function update(Request $request)
    {
        $class = New UpdateService();
        return   $class->Update($request->all());
    }
    public function delete(Request $request)
    {
        $class = New DeleteService();
        return $class->Delete($request->all());
    }
}