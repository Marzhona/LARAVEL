<?php

namespace App\Services\ImpI;

use App\Models\OurPackage;
use App\Models\TopDestination;
use App\Services\PackageService;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;

class PackageServiceImpI implements PackageService
{
    public function getAll(){
        $package=OurPackage::all();

        if (count($package) == 0){
            throw new \Exception('Exist information',404);
        }

        return $package;
    }

    public function create(Request $request) {
        $url = $request->file('url')->store('images');
        TopDestination::create([
            'title' => $request->title,
            'description' => $request->input('description'),
            'url' => $url,

        ]);

        return 'success';
    }
    public function edit(Request $request, TopDestination $destination) {
        $url = $request->file('url')->store('images');

        $destination->update([
            'title' => $request->title,
            'description' => $request->input('description'),
            'url' => $url,

        ]);

        return 'success';
    }
    public function destroy(TopDestination $destination)
    {
        $destination->delete();

        return 'success';
    }
}
