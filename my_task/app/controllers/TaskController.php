<?php

class TaskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::all();
		$users = User::all();////////

        $this->layout->titulo = 'Listado de tareas';
        $this->layout->nest(
            'content',
            'tasks.index',
            array(
                'tasks' => $tasks
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
		$user = User::all();
		$user = new User();

		$titulo = Input::get("titulo");
        $prioridad = Input::get("prioridad");
        $descripcion = Input::get("descripcion");
        $estado = ("nueva");
        
        $task = new Task();
        $task->titulo = $titulo;
        $task->prioridad = $prioridad;
        $task->descripcion = $descripcion;
        $task->estado = $estado;

        $task->users_id = $user->id;/////////////revisar para obtener el id del usuario logueado
   
        $task->save();
        return Redirect::to('tasks');
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
		$task = Task::find($id);
        $this->layout->nest(
            'content',
            'tasks.edit',
            array(
                'task' => $task
            )
        );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::all();////////
		$user = new User();////////

		$titulo = Input::get("titulo");
        $prioridad = Input::get("prioridad");
        $descripcion = Input::get("descripcion");
        $estado = ("nueva");        

        $task = Task::find($id);
        $task->titulo = $titulo;
        $task->prioridad = $prioridad;
        $task->descripcion = $descripcion;
        $task->estado = $estado;

        $user->id = $task->users_id;/////////////revisar para obtener el id del usuario logueado
   
        $task->save();
        return Redirect::to('tasks');
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