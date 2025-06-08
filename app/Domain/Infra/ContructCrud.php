<?php 
namespace App\Domain\Infra;

use App\Domain\Service\Crud\IndexService;
use App\Domain\Service\Crud\CreateService;
use App\Domain\Service\Crud\UpdateService;
use App\Domain\Service\Crud\DeleteService;

class ContructCrud{
    protected IndexService $indexService;
    protected CreateService $createService;
    protected UpdateService $updateService;
    protected DeleteService $deleteService;

    public function __construct(
        IndexService $indexService,
        CreateService $createService,
        UpdateService $updateService,
        DeleteService $deleteService
    ) {
        $this->indexService = $indexService;
        $this->createService = $createService;
        $this->updateService = $updateService;
        $this->deleteService = $deleteService;
    }


}
