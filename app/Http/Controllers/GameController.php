<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Http\Request;

class GameController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $viewData = [];
        $viewData["title"] = "Games - CRUD";
        $viewData["subtitle"] = "List of Games";
        $viewData["games"] = Game::all();
        return view('index')->with("viewData", $viewData);
        
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $viewData["title"] = "Games - CRUD";
    $viewData["subtitle"] = "List of Games";
    $viewData["games"] = Game::all();
        return view('create')->with("viewData", $viewData);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'price' => 'required',
        'description' => 'required',
    ]);
        $show = Game::create($validatedData);
   
        return redirect('/index')->with('success', 'Game is successfully saved');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
        $viewData = [];
        $viewData["title"] = "Games - CRUD";
        $viewData["subtitle"] = "List of Games";
        $viewData["game"] = Game::all();
        $game = Game::findOrFail($id);

        return view('edit', compact('game'))->with("viewData", $viewData);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
        ]);
        Game::whereId($id)->update($validatedData);

        return redirect('/index')->with('success', 'Game Data is successfully updated');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('/index')->with('success', 'Game Data is successfully deleted');
    }
}
