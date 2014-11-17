<?php

class Task extends Eloquent
{
	protected $table = 'dashboard';
	protected $fillable = array('titulo', 'prioridad', 'descripcion', 'estado', 'users_id');
	protected $guarded  = array('id');
	public    $timestamps = false;

	public static function tareas_por_usuario($id)//////////se le agrego parametro --- revisar si es con $
	{
		$sql = 'SELECT d.titulo, d.prioridad, d.descripcion
				FROM dashboard d
				INNER JOIN users ON (users.id = d.users_id and d.id = $id)
				order by d.id desc';//cambiar el 1 x el users.id 
		return DB::select($sql);
	}
}
