<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        //search position by name, pagination 10
        $positions = Position::where('name', 'like', '%' . request('name') . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.positions.index', compact('positions'));
    }

    public function create()
    {
        return view('pages.positions.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Position::create($request->all());
        return redirect()->route('positions.index')->with('success', 'Position created successfully.');
    }

    public function show(Position $position) {
        return view('pages.positions.show', compact('position'));
    }

    public function edit(Position $position) {
        return view('pages.positions.edit', compact('position'));
    }

    public function update(Request $request, Position $position) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $position->update($request->all());
        return redirect()->route('positions.index')->with('success', 'Position updated successfully.');
    }

    public function destroy(Position $position) {
        $position->delete();
        return redirect()->route('positions.index')->with('success', 'Position deleted successfully.');
    }
}
