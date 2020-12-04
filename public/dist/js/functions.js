
function modalConsulta(url) {
    $('.btn').load(url, function () {
        $(this).modal('show');
    });
    return false;
    }



$(document).ready(function() {

    // listarRegistroPersonal();
    
    function listarRegistroPersonal () {
        
        const url = $('#myurl').val();
            $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                $('#listar').empty().html(response);
            }
        });
        
    }

    
    





































        /*$('#buttonConsult').click(function(){
        const url = $('#urlModalConsulta').val();
        let elementId = $(this)[0].parentElement.parentElement;
        let id = $(elementId).attr('elementId');
       $.post(url, {id}, function(response){

       });
    });*/

// $('#fpersonal').submit(function(e) {
    //     e.preventDefault();
    //     let min = $('#selectone').val();
    //     let estado = $('#estado').val();
    //     let municipio = $('#municipio').val();
    //     let parroquia = $('#parroquia').val();
    //     let ministerial = {
    //         min: 'min',
    //         estado: 'estado',
    //         municipio: 'municipio',
    //         parroquia: 'parroquia'
    //     }
    //     console.log(ministerial)
    // });


    /*$('.btn').click(function(){
        const url = $('#listadoId').val();
        console.log(url)
        $('#exampleModalCenter').load(url, function () {
            $(this).modal('show');
        });
        return false;
    });*/

    /*$('.btn').click(function(e){
            const url = $(this).attr('id');
            $('#exampleModalCenter').load(url, function () {
                $(this).modal("toggle");
                console.log(e.target)
        });
        return false;
    });*/
    
});

