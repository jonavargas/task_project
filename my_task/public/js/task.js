$('document').ready(init);


        $('.Alta, .Media, .Baja').draggable();
        $('#verificada').droppable({
            drop: function(event, ui) {        
                alert('drop id:'+ $(this).attr('id'));
            }
        });​


        $('.glyphicon').click(function confirmar(){                              
            return confirm( '¿Estas seguro de eliminar esta tarea?' );
        });

        function init(){
            $('.Alta, .Media, .Baja').bind('dragstart', function(event) {//#item1 este deberia ser el id de la base de datos
                event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));
            });
            
   // bind the dragover event on the board sections
            $('#nueva, #en_progreso, #terminada, #verificada').bind('dragover', function(event) {
                event.preventDefault();
            });

// bind the drop event on the board sections
   $('#nueva, #en_progreso, #terminada, #verificada').bind('drop', function(event) {
            var notecard = event.originalEvent.dataTransfer.getData("text/plain");
            event.target.appendChild(document.getElementById(notecard));
// Turn off the default behaviour
// without this, FF will try and go to a URL with your id's name
            event.preventDefault();
	});
        }