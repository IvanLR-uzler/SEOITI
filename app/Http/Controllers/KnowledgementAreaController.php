<?php

namespace App\Http\Controllers;

use App\KnowledgementArea;
use App\Http\Requests\KnowledgementAreaRequest;
use Illuminate\Http\Request;

class KnowledgementAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledgementareas = KnowledgementArea::paginate();
        return view('knowledgementareas.index', compact('knowledgementareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('knowledgementareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KnowledgementAreaRequest $request)
    {
        $knowledgementarea = KnowledgementArea::create($request->all());
        return redirect()->route('knowledgementareas.edit', $knowledgementarea->id)
        ->with('info', 'Area del conocimiento guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KnowledgementArea  $knowledgementArea
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgementArea $knowledgementArea)
    {
        //dd($knowledgementArea->id);
        return view('knowledgementareas.show', compact('knowledgementArea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KnowledgementArea  $knowledgementArea
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgementArea $knowledgementArea)
    {
        return view('knowledgementareas.edit',compact('knowledgementArea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgementArea  $knowledgementArea
     * @return \Illuminate\Http\Response
     */
    public function update(KnowledgementAreaRequest $request, KnowledgementArea $knowledgementArea)
    {
        $knowledgementArea->update($request->all());
        return redirect()->route('knowledgementareas.edit', $knowledgementArea->id)
        ->with('info', 'Area del conocimiento actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgementArea  $knowledgmentArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgementArea $knowledgementArea)
    {
        $knowledgementArea->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
