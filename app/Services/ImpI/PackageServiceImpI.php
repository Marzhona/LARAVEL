<?php

namespace App\Services\ImpI;

use App\Models\OurPackage;
use App\Services\PackageService;
use Facade\Ignition\Support\Packagist\Package;

class PackageServiceImpI implements PackageService
{
    public function getAll(){
        $package=OurPackage::all();

        if (count($package) == 0){
            throw new \Exception('Exist information',404);
        }

        return $package;
    }
}
