$(document).ready(function(){

    // Toast para notificaciones
    //toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');

    // Waitme
    //$('body').waitMe({effect : 'orbit'});

    //Agregar un Menu
    $('.add_menu').on('submit', add_menu)
    function add_menu(e){
        e.preventDefault();
        var form    = $('.add_menu'),
        hook        = 'kolors_hook',
        action      = 'add',
        data        = new FormData(form.get(0));
        var nombre      = $('#nombre').val();
        var descripcion = $('#descripcion').val();
        var menuPadre   = $('#menuPadre').val();
        data.append('hook', hook);
        data.append('action', action);

        // Validar que este seleccionada una opción type
       if(nombre === '') {
         toastr.error('Captura algo ern el campo Nombre', 'Corrige');
         return;
       }

       if(descripcion === '') {
         toastr.error('Captura algo ern el campo Descripción', 'Corrige');
         return;
       }

       if(menuPadre === '') {
         toastr.error('Captura algo ern el campo menuPadre', 'Corrige');
         return;
       }

        $.ajax({
            url: 'ajax.php',
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            data : data,
            beforeSend: function() {
                form.waitMe();
            }
        }).done(function(res) {
            if(res.status === 201) {
                toastr.success(res.msg, '¡Bien!');
                form.trigger('reset');
                bee_get_movements();
            } else {
                toastr.error(res.msg, '¡Upss!');
            }
        }).fail(function(err) {
            toastr.error('Hubo un error en la petición', '¡Upss!');
        }).always(function() {
            form.waitMe('hide');
        })
    }

    function get_menu(e){

    }

    function update_menu(e){

    }

    function delete_menu(e){

    }
})
