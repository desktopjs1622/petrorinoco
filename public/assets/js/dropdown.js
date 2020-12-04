function selectDisabled(){
    $("#municipio").prop('disabled', true);
    $("#parroquia").prop('disabled', true);
}

$(document).ready(function(){
   selectDisabled();
    $("#estado").change(function(e){
        $(this, "option:selected").each(function(){
            $("#municipio").prop('disabled', false);           
        });
        $.get("municipios/"+e.target.value+"", function(response, state){
            $("#municipio").empty();
            $("#parroquia").empty();
            $("#parroquia").empty();
            $("#parroquia").append("<option>Seleccione Parroquia</option>");
            $("#municipio").append("<option>Seleccione Municipio</option>");
    
            for (i=0; i<response.length; i++) {
                $("#municipio").append("<option value='"+response[i].id+"'>"+response[i].nombre_municipio+"</option>")
            }
        });
    });
});

$(document).ready(function(){
    $("#municipio").change(function(e){
        $(this).each(function(){
            $("#parroquia").prop('disabled', false);
        });
        $.get("parroquias/"+e.target.value+"", function(response, state){
            $("#parroquia").empty();
            $("#parroquia").append("<option>Seleccione Parroquia</option>");
    
            for (i=0; i<response.length; i++) {
                $("#parroquia").append("<option value='"+response[i].id+"'> "+response[i].nombre_parroquia+"</option>");           
            }
        });
    });
});
