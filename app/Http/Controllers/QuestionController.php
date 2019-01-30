<?php

namespace App\Http\Controllers;

use App\KnowledgementArea;
use App\Question;
use Illuminate\Http\Request;
use App\User;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $questions = Question::paginate();
        return view('questions.index', compact('questions'))->with('user_id',$user->user_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $knowledgementAreas = KnowledgementArea::pluck('name');
        return view('questions.create', compact('knowledgementAreas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Question::create($request->all());
        return redirect()->route('questions.edit', $question->id)
            ->with('info', 'Pregunta guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $user = User::get();
        return view('questions.show', compact('question', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $knowledgementAreas = KnowledgementArea::pluck('name');
        return view('questions.edit ',compact('question', 'knowledgementAreas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return redirect()->route('questions.edit', $question->id)
            ->with('info', 'Pregunta actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return back()->with('info','Pregunta eliminada correctamente');
    }
}
