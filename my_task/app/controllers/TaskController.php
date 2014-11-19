<?php

class TaskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		$id = Auth::user()->id;// Obtenemos el id del usuario actualmente logueado
		$tasks = Task::tareas_por_usuario($id);// Llamamos a la funcìón encargada de mostrar las tareas 
											  // del usuario logueado y le pasamos el id del usuario logueado actual

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
		$titulo = Input::get("titulo");
        $prioridad = Input::get("prioridad");
        $descripcion = Input::get("descripcion");
        $estado = ("nueva");///////////////////////////
        
        $task = new Task();
        $task->titulo = $titulo;
        $task->prioridad = $prioridad;
        $task->descripcion = $descripcion;
        $task->estado = $estado;

        $id = Auth::user()->id;
        $task->users_id = $id;
   
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
		$titulo = Input::get("titulo");
        $prioridad = Input::get("prioridad");
        $descripcion = Input::get("descripcion");
        $estado = ("nueva");////////////////////////////////////// 

        $task = Task::find($id);
        $task->titulo = $titulo;
        $task->prioridad = $prioridad;
        $task->descripcion = $descripcion;
        $task->estado = $estado;
   
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