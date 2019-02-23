<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->get();
        return view("todohome", compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("todocreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $sex = $request->sex;
        $phone = $request->phone_number;

        $todo = new Todo();
        $todo->insert(
            [
                'name' => $name,
                'sex' => $sex,
                'phone_number'=> $phone,
            ]
        );
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = new Todo();
        $t = $todo->where('id', $id)->first();

        return view("todoShow", compact('t'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = new Todo();
        $t = $todo->where('id', $id)->first();

        return view("todoEdit", compact('t'));
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
        $name = $request->name;
        $sex = $request->sex;
        $phone = $request->phone_number;

        $todo = new Todo();
        $todo->where('id', $id)->update(
            [
                'name' => $name,
                'sex' => $sex,
                'phone_number'=> $phone,
            ]
        );
        return redirect('/todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = new Todo();
        $todo->where('id', $id)->delete();
        return back();
    }
}
