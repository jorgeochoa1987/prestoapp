$(document).ready(function(){

//Traigo los datos para actualizar el usuario actualizarUser
$(document).on('click', '#actualizarUser', function(){

  // Capturo los id de  los inputs y los paso a la variables para que procese
var name = $('#feFirstName').val();
var usuario = $('#feLastName').val();
var email = $('#feEmailAddress').val();
var pass = $('#fePassword').val();

$.ajax({
  url: 'modules/UpdateUser.php',
  type: 'POST',
  data: {
    'save': 1,
    'name': name,
    'user':usuario,
    'email':email,
    'pass':pass,
  
  },
  error: function()
  {
    
    swal("error!");
  },
  beforeSend: function()
  {
    swal("Un momento por favor");
  },
  success: function(response){
       
    swal("¡Buen trabajo!", "Actualizaste la información de:" + name, "success");

   
  }
});
});

//Crear cartera 
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
    //mensaje de error
    error: function()
        {
    swal("!error!");
       },
    // Si se demora muestra el mensaje de espera
  beforeSend: function()
      {
    swal("Un momento por favor");
     },
    //si todo sale bien  
  success: function(response){
    $('#feFirstName').val('');
    $('#feLastName').val('');
    $('#feNumber').val('');
    $('#feValIni').val('');
     var res = response;   
    swal("¡Buen trabajo!", res, "success");

   
  }
      
      });
    });

    //crear cliente
    $(document).on('click', '#crearCliente', function(){
      // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');
    var name = $('#feFirstName').val();
    var lastname = $('#feLastName').val();
    var email = $('#feEmailAddress').val();
    var phone = $('#fephone').val();
    var city = $('#feInputCity').val();
    var number = $('#fenumber').val();
    var address = $('#feInputAddress').val();
    var notes = $('#fenotes').val();
    var category1= $('#category1').val();
    var category2= $('#category2').val();
    var category3= $('#category3').val();
    var category4= $('#category4').val();
    var category5= $('#category5').val();
    var category6= $('#category6').val();
    var category7= $('#category7').val();
    $.ajax({
      url: 'modules/CreacionCliente.php',
      type: 'POST',
      data: {
        'save': 1,
        'name': name,
        'lastname':lastname,
        'address':address,
        'email':email,
        'phone':phone,
        'city':city,
        'number':number,
        'notes': notes,
        'category1':category1,
        'category2':category2,
        'category3':category3,
        'category4':category4,
        'category5':category5,
        'category6':category6,
        'category7':category7,
      },
       //mensaje de error
    error: function()
    {
swal("! error ! al crear cliente");
   },
// Si se demora muestra el mensaje de espera
beforeSend: function()
  {
swal("Un momento por favor");
 },
//si todo sale bien  
success: function(response){
  $('#feFirstName').val('');
  $('#feLastName').val('');
  $('#fenumber').val('');
  $('#feEmailAddress').val('');
  $('#feValIni').val('');
swal("¡Buen trabajo!", response, "success"),
window.setTimeout(function(){ } ,100000);
window.location = "listarcliente.php";
}
      
    });
  });

  //////////////////////////////////////////////////////////////////////////
// Actualizar Cliente ActualizarCliente
$(document).on('click', '#ActualizarCliente', function(){
  // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');
var id   = $('#feid').val();    
var name = $('#feFirstName').val();
var lastname = $('#feLastName').val();
var email = $('#feEmailAddress').val();
var phone = $('#fephone').val();
var city = $('#feInputCity').val();
var number = $('#fenumber').val();
var address = $('#feInputAddress').val();
var notes = $('#fenotes').val();
var category1= $('#category1').val();
var category2= $('#category2').val();
var category3= $('#category3').val();
var category4= $('#category4').val();
var category5= $('#category5').val();
var category6= $('#category6').val();
var category7= $('#category7').val();
$.ajax({
  url: 'modules/ActualizarCliente.php',
  type: 'POST',
  data: {
    'save': 1,
    'id':id,
    'name': name,
    'lastname':lastname,
    'address':address,
    'email':email,
    'phone':phone,
    'city':city,
    'number':number,
    'notes': notes,
    'category1':category1,
    'category2':category2,
    'category3':category3,
    'category4':category4,
    'category5':category5,
    'category6':category6,
    'category7':category7,
  },
   //mensaje de error
error: function()
{
swal("! error ! al crear cliente");
},
// Si se demora muestra el mensaje de espera
beforeSend: function()
{
swal("Un momento por favor");
},
//si todo sale bien  
success: function(response){

swal("¡Buen trabajo!", response, "success");
}

  

});
});
//////////////////////////////////////////////////////////////////////////
//Borrar cliente

$(document).on('click', '#borrarCliente', function(){
  // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');
var id = $('#feid').val();

$.ajax({
  url: 'modules/BorrarCliente.php',
  type: 'POST',
  data: {
    'save': 1,
    'id': id,

  },
  
   //mensaje de error
error: function()
{
swal("! error ! al crear cliente");
},
// Si se demora muestra el mensaje de espera
beforeSend: function()
{
swal("Un momento por favor");
},
//si todo sale bien  
success: function(response){
  swal({
    title: "¿Estás seguro?",
    text: "¡Deseas borrar el cliente seleccionado!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Si,borrar!",
    cancelButtonText: "No, ¡cancela por favor!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Borrado !", "El cliente " + id +"Fue borrado", "success"),
      window.setTimeout(function(){ } ,100000);
      location.reload(); 

    
    } else {
          swal("Cancelado", "Acción cancelada", "error");
    }
  });

}

  

});
});

//crear prestamo

$(document).on('click', '#crearPrestamo', function(){
  // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');

var cartera = $('#fecartera').val();
var value = $('#feValue').val();
var interes = $('#feInteres').val();
var date = $('#feDate').val();
var notas = $('#feDescription').val();
var cliente = $('#fecliente').val();
var category1= $('#category1').val();
var category2= $('#category2').val();
var category3= $('#category3').val();
var category4= $('#category4').val();
var category5= $('#category5').val();
var category6= $('#category6').val();
var category7= $('#category7').val();
$.ajax({
  url: 'modules/CreacionPrestamo.php',
  type: 'POST',
  data: {
    'save': 1,
    'cartera':cartera,
    'value': value,
    'interes':interes,
    'cliente':cliente,
    'date':date,
    'notas':notas,
    'cliente':cliente,
    'category1':category1,
    'category2':category2,
    'category3':category3,
    'category4':category4,
    'category5':category5,
    'category6':category6,
    'category7':category7,
  },
     //mensaje de error
     error: function(response)
     {
 swal("! error al crear prestamo !  ", response);
    }, 
 // Si se demora muestra el mensaje de espera
 beforeSend: function()
   {
 swal("Un momento por favor");
  },
 //si todo sale bien  
 success: function(response){
   
  $('#feValue').val('');
  $('#feInteres').val('');
  $('#fecartera').val('');
  $('#feDate').val('');
  $("#Respuesta").html(response);
 swal("¡Buen trabajo!", response, "success"),

 function(isConfirm)
    {
   if(isConfirm){
  window.location.href="listarcartera.php";}
    }
 }

});
});


//Actualizar cartera

$(document).on('click', '#editarCartera', function(){
  // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');
var id = $('#feidcartera').val();
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
  url: 'modules/ActualizarCartera.php',
  type: 'POST',
  data: {
    'save': 1,
    'id':id,
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
     //mensaje de error
     error: function(response)
     {
 swal("! error al actualizar prestamo !  ", response);
    }, 
 // Si se demora muestra el mensaje de espera
 beforeSend: function()
   {
 swal("Un momento por favor");
  },
 //si todo sale bien  
 success: function(response){
   

  $("#Respuesta").html(response);
 swal("Actualizado trabajo!", response, "success"),

 function(isConfirm)
    {
   if(isConfirm){
  window.location.href="listarcartera.php";}
    }
 }

});
});



//Borrar cliente

$(document).on('click', '#borrarCartera', function(){
  // Capturo los id de  los inputs y los paso a la variables para que procese
//alert('entre a crear cliente');
var id = $('#feidcartera').val();

$.ajax({
  url: 'modules/BorrarCartera.php',
  type: 'POST',
  data: {
    'save': 1,
    'id': id,

  },
  
   //mensaje de error
error: function()
{
swal("! error ! al borrar cartera");
},
// Si se demora muestra el mensaje de espera
beforeSend: function()
{
swal("Un momento por favor");
},
//si todo sale bien  
success: function(response){
  swal({
    title: "¿Estás seguro?",
    text: "¡Deseas borrar la cartera seleccionado!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Si,borrar!",
    cancelButtonText: "No, ¡cancela por favor!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Borrado !", "la cartera con  " + id +"Fue borrado", "success"),
      window.setTimeout(function(){ } ,100000);
      location.reload(); 

    
    } else {
          swal("Cancelado", "Acción cancelada", "error");
    }
  });

}

  

});
});

 
});