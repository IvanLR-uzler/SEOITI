<?php

namespace App\Http\Controllers;

use App\Examn;
//use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests\ExamnRequest;
use App\KnowledgementArea;

class ExamnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examns = Examn::paginate();
        return view('examns.index', compact('examns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $examn = '';
        $questions = Question::where('know_id', '<>', '1')->get();
        $knowledgementAreas = KnowledgementArea::where('id', '<>', '1')->get();
        $knowGenerals = Question::where('know_id', '=', '1')->get();
        return view('examns.create', compact('questions','user','knowledgementAreas','knowGenerals', 'examn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamnRequest $request)
    {   
        $examn = Examn::create($request->all());
        return redirect()->route('examns.edit', $examn->id)
            ->with('info', 'Examen guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examn  $examn
     * @return \Illuminate\Http\Response
     */
    public function show(Examn $examn)
    {
        $questions = Question::get();
        return view('examns.show', compact('questions', 'examn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examn  $examn
     * @return \Illuminate\Http\Response
     */
    public function edit(Examn $examn)
    {
        $examn=$examn;
        $user = auth()->user();
        $knowledgementAreas = KnowledgementArea::get();
        $questions = Question::get();
        $knowGenerals = Question::get();
        return view('examns.edit',compact('examn', 'questions','user','knowledgementAreas','knowGenerals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examn  $examn
     * @return \Illuminate\Http\Response
     */
    public function update(ExamnRequest $request, Examn $examn)
    {
        $examn->update($request->all());
        $examn->questions()->attach($request->get('question'));
        return redirect()->route('examns.edit', $examn->id)
        ->with('info', 'Examen actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examn  $examn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examn $examn)
    {
        $examn->delete();
        return back()->with('info','Examen eliminado correctamente');
    }
}
