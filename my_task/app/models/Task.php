<?php

class Task extends Eloquent
{
	protected $table = 'dashboard';
	protected $fillable = array('titulo', 'prioridad', 'descripcion', 'id_contenedor');
	protected $guarded  = array('id');
	public    $timestamps = false;

	public static function tareas_por_usuario()
	{
		$sql = 'SELECT d.titulo, d.prioridad, d.descripcion
				FROM dashboard d
				INNER JOIN users ON (users.id = d.users_id and d.id = 1)';
		return DB::select($sql);
	}
}
