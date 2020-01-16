$(document).ready(function(){
    $(document).on('click', '#crearCartera', function(){
        // Capturo los id de  los inputs y los paso a la variables para que procese
      var name = $('#feFirstName').val();
      var lastname = $('#feLastName').val();
      var email = $('#feEmailAddress').val();
      var phone = $('#fePhone').val();
      var city = $('#feInputCity').val();
      var number = $('#feNumber').val();
      var address = $('#feInputAddress').val();
      var valIni = $('#feValIni').val();
      var notes = $('#fenotas').val();
      $.ajax({
        url: 'modules/Creacion.php',
        type: 'POST',
        data: {
          'save': 1,
          'name': name,
          'lastname':lastname,
          'email':email,
          'phone':phone,
          'city':city,
          'number':number,
          'address':address,
          'valIni':valIni,
          'notes': notes,
        },
        success: function(response){
          $('#feFirstName').val('');
          $('#feLastName').val('');
          $('#feNumber').val('');
          $('#feValIni').val('');
          $("#Respuesta").html(response);
          
        }
      });
    });
});