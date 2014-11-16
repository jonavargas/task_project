<?php

class TaskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Request::ajax())////////////////////////////////////////////
		{
    		$task = Task::all();
    		return Response::Json($task);
		}///////////////////////////////////////////////////////////////
		$task = Task::all();
        $this->layout->titulo = 'Listado de tareas';
        $this->layout->nest(
            'content',
            'tasks.index',
            array(
                'tasks' => $task
            )
        );
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->titulo = 'Crear Task';
        $this->layout->nest(
            'content',
            'tasks.create',
            array()
        );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$task = Task::find($id);
        $task->delete();
        return Redirect::to('tasks');
	}

}