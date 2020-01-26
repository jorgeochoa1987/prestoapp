

function copiar()
{

  
  var valor  = document.getElementById("feValue").value; 
  var interes =document.getElementById("feInteres").value;
  var totalinteres = interes *( valor / 100) ;
  var total =  parseInt(valor) + parseInt(totalinteres);

  document.getElementById("fevalorapagarVer").value= total;
  document.getElementById("fevalorapagar").value= total;

} 

function valcheck(id_) {

  var valor =document.getElementById(id_).value ;
  if ( valor == 1) {
  
    document.getElementById(id_).value= 0;
  }
  else{
    document.getElementById(id_).value= 1;
  }

}





