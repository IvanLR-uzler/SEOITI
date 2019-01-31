<?php

namespace App\Http\Controllers;

use App\Examn;
use Illuminate\Http\Request;
use App\Question;

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
        $questions = Question::get();
        return view('examns.create', compact('questions',$this));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examn = Examn::create($request->all(), $request->correctAns()->json_encode);
        return redirect()->route('examns.edit', $examn->id)
            ->with('info', 'Pregunta guardada con éxito');
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
        $questions=Question::get();
        return view('examns.edit',compact('examn', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examn  $examn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examn $examn)
    {
        $questions=$request->input('questions[]');
        $correcAns = Question::create(json_encode($questions));
        $examn->update($request->all(), $correctAns);
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
