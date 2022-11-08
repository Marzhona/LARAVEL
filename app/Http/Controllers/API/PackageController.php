<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\PackageService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    protected $packageService;

    public function __construct(PackageService $packageService)
    {
        $this->packageService=$packageService;
    }

    public function index(){
        try {
            $package = $this->packageService->getAll();

            return response()->json([
                'status' => true,
                'package' => $package
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => true,
                'message' => $e->getMessage()
            ],$e->getCode());
        }
    }
}
