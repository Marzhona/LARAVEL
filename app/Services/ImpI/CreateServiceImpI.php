<?php

namespace App\Services\ImpI;

use App\Models\Create;
use App\Services\CreateService;

class CreateServiceImpI implements CreateService
{
    public function getAll()
    {
        $create = Create::all();

        if (count($create) == 0) {
            throw new \Exception('Exist information', 404);
        }

        return $create;
    }
}
