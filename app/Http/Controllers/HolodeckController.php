<?php

namespace App\Http\Controllers;

use App\Models\Holodeck;
use Illuminate\Http\Request;

class HolodeckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holodeck = Holodeck::paginate(5);
        return view('holodeck.index', compact('holodeck'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('holodeck.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'serial_no' => 'nullable|string',
            'sw_version' => 'required|numeric'
        ]);

        $holodeck = Holodeck::create([
            'type' => $request->type,
            'serial_no' => $request->serial_no,
            'sw_version' => $request->sw_version
        ]);

        return redirect()->route('holodeck.show', ['holodeck' => $holodeck->id])->with(
            'success',
            "Holodeck created successfully!"
        );
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $holo = Holodeck::findOrFail($id);
        return view('holodeck.show', [
            'holo' => $holo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Holodeck $holodeck)
    {
        return view('holodeck.edit', compact('holodeck'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Holodeck $holodeck)
    {

        $request->validate([
            'type' => 'required|string',
            'serial_no' => 'nullable|string',
            'sw_version' => 'required|numeric'
        ]);

        $holodeck->update($request->all());

        return redirect()->route('holodeck.show', $holodeck->id)->with(
            'success',
            "Article {$holodeck->id} is successfully updated"
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Holodeck $holodeck)
    {
        $holodeck->delete();

        return redirect()->route('holodeck.index')->with('success', "holodeck deleted");
    }
}
