$(document).ready(function(){
    $('#form-id').submit(function(e){
        var data = new FormData(this);
        data.append("ajouter", "ajouter");
        //var data = $(this).serialize();

        $.ajax({
            url: "./Controllers/ChambreController.php",
            type: "POST",
            contentType: false,
            processData: false, 
            data: data,
            success: function( data )
            {
               // alert( data );
            },
            error: function(){
                alert('erreur');
            }
        });

        //return false;
    });
});

    

