 <!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>

<p>My first paragraph.</p>

<body>
    <div id="board" class="col-md-12">
        <div id="nueva" class="col-md-3">
        	<div class="title" id="title">
        		Nuevo
        	</div>
	        <div id="item1" draggable="true">
	            <div class="cardTitle">
	                Iron Maiden
	            </div>
	        </div>
	        <div id="item2" draggable="true">
	            <div class="cardTitle">
	                Slipknot
	            </div>
	        </div>
	        <div id="item3" draggable="true">
	            <div class="cardTitle">
	                Rammstein
	            </div>
	        </div>
	        <div id="item4" draggable="true">
	            <div class="cardTitle">
	                Megadeth
	            </div>
	        </div>
	        <div id="item5" draggable="true">
	            <div class="cardTitle">
	                Metallica
	            </div>
	        </div>
        </div>

	    <div id="en_progreso" class="col-md-3">
	        <div class="title" id="title">
	        	En Progreso
	        </div>
	    </div>

	    <div id="terminada" class="col-md-3">
	        <div class="title" id="title">
	        	Terminada
	        </div>
	    </div>

	    <div id="verificada" class="col-md-3">
	        <div class="title" id="title">
	        	Verificada
	        </div>
	    </div>
	</div>

</body>
</html> 
{{HTML::script('js/task.js');}} 
