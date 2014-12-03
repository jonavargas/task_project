// número máximo de caracteres para la descripción
var limite = 220;

$('document').ready(init);

        $('.glyphicon-remove').click(function confirmar(){                              
            return confirm( '¿Are you sure to remove this task?' );
        });

        var combobox = $("#combobox").val();


        if (combobox == 'c_Baja') {
            $("#create").css({ background: "#8BDF83" , 'border': '4px solid #105205' });
        }else if (combobox == 'b_Media') {
            $("#create").css({ background: "#F9A173", 'border': '4px solid #D6660D' });
        }
        else if (combobox == 'a_Alta') { 
            $("#create").css({ background: "#F37676", 'border': '4px solid #AB0606' });
        }

        $("#combobox").change(function() {                               
            var combobox = $("#combobox").val();            

            if (combobox == 'c_Baja') {
            $("#create").css({ background: "#8BDF83" , 'border': '4px solid #105205' });
            }else if (combobox == 'b_Media') {
            $("#create").css({ background: "#F9A173", 'border': '4px solid #D6660D' });
            }
            else if (combobox == 'a_Alta') { 
                $("#create").css({ background: "#F37676" , 'border': '4px solid #AB0606'});
            }
 
        });

        $(".frm_descripcion").keyup(function(e)//Funcion para los caracteres del campo de las tareas
        {

            // obtenemos el texto que está escrito en el textarea
            var box = $(this).val();

            // obtenemos cuántos caracteres quedan
            var resta = limite - box.length;

            // si aún no se llegó al límite
            if(box.length <= limite)
            {
                // modificamos el texto que muestra la cantidad de caracteres que restan
                $('.divContador').html(resta);
            }
            else // si se llegó al límite no permitimos ingresar más caracteres
            {
                // evitamos que ingrese más caracteres
                e.preventDefault();
            }               
        });             

        var estado;// variable que guarda el estado en que se encuantra la tarea, despues de arrastrarla
        var id;//variable que almacena el id de la tarea arrastrada

        function init(){
            $('.a_Alta, .b_Media, .c_Baja').bind('dragstart', function(event) {//#item1 este deberia ser el id de la base de datos
                event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));
                id = event.target.getAttribute('id');
            });
            
            // bind the dragover event on the board sections
            $('#nueva, #en_progreso, #terminada, #verificada').bind('dragover', function(event) {
                event.preventDefault();
            });

            // bind the drop event on the board sections
            $('#nueva, #en_progreso, #terminada, #verificada').bind('drop', function(event) {
                var notecard = event.originalEvent.dataTransfer.getData("text/plain");
                event.target.appendChild(document.getElementById(notecard));
                // alert(event.target.getAttribute('id'));//Obtiene el id del contenedor en el cual se solto el elemento arrastrable
                
                
		        estado = event.target.getAttribute('id');		
                
                $data = {id : id, estado : estado};
                    $.ajax({
                            type: "GET",
                            url : "tasks",
                            data : $data                            
                        });

                event.preventDefault();
	        });        
        }