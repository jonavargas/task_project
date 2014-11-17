 <!DOCTYPE html>
<html>
<body>

{{link_to("tasks/create", 'Nueva Tarea', $attributes = array(), $secure = null);}}

<body>
    <div id="board" class="col-md-12">
        <div id="nueva" class="col-md-3">        				
        	<div class="title" id="title">
        		Nuevo
        	</div>

        	@foreach($tasks as $task)

			<?php 
				if($task->estado == 'nueva'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div id="descripcion">
		                <div id="task_title">{{ $task->titulo }}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>
		                {{link_to("tasks/$task->id/edit", $task->descripcion, $attributes = array(), $secure = null);}}	           					
		            
		            </div>
		        </div>

	    	<?php  
	    		}
	    	?>

	    	@endforeach

        </div>

	    <div id="en_progreso" class="col-md-3">
	        <div class="title" id="title">
	        	En Progreso
	        </div>

	        @foreach($tasks as $task)

			<?php 
				if($task->estado == 'en_progreso'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div id="descripcion">
		                <div id="task_title">{{ $task->titulo }}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>
		                {{link_to("tasks/$task->id/edit", $task->descripcion, $attributes = array(), $secure = null);}}	           					
		            
		            </div>
		        </div>

	    	<?php  
	    		}
	    	?>

	    	@endforeach
	    	
	    </div>

	    <div id="terminada" class="col-md-3">
	        <div class="title" id="title">
	        	Terminada
	        </div>

			@foreach($tasks as $task)

			<?php 
				if($task->estado == 'terminada'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div id="descripcion">
		                <div id="task_title">{{ $task->titulo }}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>
		                {{link_to("tasks/$task->id/edit", $task->descripcion, $attributes = array(), $secure = null);}}	           					
		            
		            </div>
		        </div>

	    	<?php  
	    		}
	    	?>

	    	@endforeach

	    </div>

	    <div id="verificada" class="col-md-3">
	        <div class="title" id="title">
	        	Verificada
	        </div>

			@foreach($tasks as $task)

			<?php 
				if($task->estado == 'verificada'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div id="descripcion">
		                <div id="task_title">{{ $task->titulo }}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>
		                {{link_to("tasks/$task->id/edit", $task->descripcion, $attributes = array(), $secure = null);}}	           					
		            
		            </div>
		        </div>

	    	<?php  
	    		}
	    	?>

	    	@endforeach
	        
	    </div>
	</div>

</body>
</html> 
{{HTML::script('js/task.js');}}      
