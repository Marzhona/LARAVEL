<?php


namespace App\Http\Controllers;

use App\Models\TopDestination;
use Illuminate\Http\Request;
use App\Models\Tovar;

class PackageController extends Controller
{
    public function index()
    {
        $destination = TopDestination::all();

        return view('package', ['destination' => $destination]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $url = '';
        if ($request->hasFile('image')) {
            $url=$request->file('image')->store('images');
        }
        TopDestination::create([
            'title' => $request->name,
            'description' => $request->input('description'),
            'url' => $url,

        ]);
        return redirect()->route('package.index');
    }

    public function show($destination)
    {
        return view('show', ['destination' => $destination]);
    }

    public function edit(TopDestination $destination)
    {
        return view('edit', ['destination' => $destination]);
    }

    public function update(Request $request, destination $destination)
    {

        $destination->update([
            'title' => $request->title,
            'description' => $request->input('description'),
            'url' => $request->url,

        ]);
        return redirect()->route('package.index');
    }

    public function destroy(TopDestination $destination)
    {
        $destination->delete();
        return redirect()->route('package.index');
    }
}
