<?php

namespace App\Services;

use App\Models\TopDestination;
use Illuminate\Http\Request;

interface PackageService
{
    public function getAll();
    public function create(Request $request);
    public function edit(Request $request, TopDestination $destination);
    public function destroy(TopDestination $destination);

}
