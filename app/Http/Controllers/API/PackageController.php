<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PackageResource;
use App\Models\TopDestination;
use App\Services\CreateService;
use App\Services\EditService;
use App\Services\PackageService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    protected $packageService;
    protected $editService;
    protected $createService;

    public function __construct(PackageService $packageService)
    {
        $this->packageService=$packageService;
    }
    public function __construct1(EditService $editService)
    {
        $this->editService=$editService;
    }
    public function __construct2(CreateService $createService)
    {
        $this->createService=$createService;
    }

    public function index(){
        try {
            $package = $this->packageService->getAll();

            return response()->json([
                'status' => true,
                'package' => PackageResource::collection($package)
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => true,
                'message' => $e->getMessage()
            ],$e->getCode());
        }
    }
    public function create(Request $request){
        try {
            $create = $this->packageService->create($request);

            return response()->json([
                'status' => true,
                'package' => $create
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => true,
                'message' => $e->getMessage()
            ],$e->getCode());
        }
    }
    public function edit(Request $request, TopDestination $destination){
        try {
            $edit = $this->packageService->edit($request, $destination);

            return response()->json([
                'status' => true,
                'package' => $edit
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => true,
                'message' => $e->getMessage()
            ],$e->getCode());
        }
    }
    public function destroy( TopDestination $destination){
        try {
            $delete = $this->packageService->destroy($destination);

            return response()->json([
                'status' => true,
                'package' => $delete
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => true,
                'message' => $e->getMessage()
            ],$e->getCode());
        }
    }
}
