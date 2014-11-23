<?php

class Task extends Eloquent
{
	protected $table = 'dashboard';
	protected $fillable = array('titulo', 'prioridad', 'descripcion', 'estado', 'users_id');
	protected $guarded  = array('id');
	public    $timestamps = false;

	public static function tareas_por_usuario($id)
	{
		$sql = 'select d.id, d.titulo, d.prioridad, d.descripcion,  d.estado, d.users_id
				from dashboard d
				inner join users ON (users.id = d.users_id and users.id = '.$id.')
				order by d.titulo asc';
		return DB::select($sql);
	}
}
