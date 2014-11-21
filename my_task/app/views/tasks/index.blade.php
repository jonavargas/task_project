<!DOCTYPE html>
<html>
<body>	
	<div class="userLogin">
		<h4><strong>User Log In: </strong>{{ Auth::user()->email}}</h4>
	</div>
	
	<div class="newtask">{{link_to("tasks/create", 'New Task', $attributes = array('class' => 'btn btn-default'), $secure = null);}}</div>
	<br>
    <div id="board" class="col-md-12">

    	<div class="col-md-3" id="title">
    		New
    	</div>
        <div id="nueva" class="col-md-3">        				        	

        	@foreach($tasks as $task)

			<?php 
				if($task->estado == 'nueva'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div>
		                <div id="task_title">{{link_to("tasks/$task->id/edit", $task->titulo, array('class' => 'lbl_title'));}}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>		                
		            	<div id="descripcion">{{$task->descripcion}}</div>
		            </div>
		        </div>
	    	<?php  
	    		}
	    	?>
	    	@endforeach

        </div>


		<div class="col-md-3" id="title">
        	In Progress
        </div>
	    <div id="en_progreso" class="col-md-3">
	        
	        @foreach($tasks as $task)

			<?php 
				if($task->estado == 'en_progreso'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div id="descripcion">
		                <div id="task_title">{{link_to("tasks/$task->id/edit", $task->titulo, array('class' => 'lbl_title'));}}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>
		                {{$task->descripcion}}	           					
		            
		            </div>
		        </div>
	    	<?php  
	    		}
	    	?>
	    	@endforeach	    	
	    </div>


		<div class="col-md-3" id="title">
        	Completed
        </div>
	    <div id="terminada" class="col-md-3">	        

			@foreach($tasks as $task)

			<?php 
				if($task->estado == 'terminada'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div id="descripcion">
		                <div id="task_title">{{link_to("tasks/$task->id/edit", $task->titulo, array('class' => 'lbl_title'));}}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>
		                {{$task->descripcion}}	           					
		            
		            </div>
		        </div>
	    	<?php  
	    		}
	    	?>
	    	@endforeach
	    </div>


	    <div class="col-md-3" id="title">
        	Verified
        </div>
	    <div id="verificada" class="col-md-3">	        

			@foreach($tasks as $task)

			<?php 
				if($task->estado == 'verificada'){
			?>
				<div id="{{ $task->id }}" draggable="true" class="{{ $task->prioridad }}">

		            <div id="descripcion">
		                <div id="task_title">{{link_to("tasks/$task->id/edit", $task->titulo, array('class' => 'lbl_title'));}}</div>	                
		                <div id='eliminar'>{{link_to("tasks/$task->id/delete", '', $attributes = array('class' => 'glyphicon glyphicon-remove'), $secure = null);}}</div>
		                {{$task->descripcion}}	           					
		            
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