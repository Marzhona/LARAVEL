<?php

namespace App\Services\ImpI;

use App\Models\Edit;
use App\Services\EditService;

class EditServiceImpI implements EditService
{
    public function getAll()
    {
        $edit = Edit::all();

        if (count($edit) == 0) {
            throw new \Exception('Exist information', 404);
        }

        return $edit;
    }
}
