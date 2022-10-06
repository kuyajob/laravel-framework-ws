<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentSubjectRequest;
use App\Http\Requests\UpdateStudentSubjectRequest;
use App\Models\StudentSubject;

class StudentSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentSubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentSubjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function show(StudentSubject $studentSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentSubject $studentSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentSubjectRequest  $request
     * @param  \App\Models\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentSubjectRequest $request, StudentSubject $studentSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentSubject  $studentSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentSubject $studentSubject)
    {
        //
    }
}
