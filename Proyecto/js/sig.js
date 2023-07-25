window.onload=function()
{
  var mail = document.getElementById("floatingInput");
  var pass = document.getElementById("floatingPassword");
  var form = document.getElementById("formulario");
  var btn_iniciar = document.getElementById("iniciar");
  btn_iniciar.addEventListener("click", procesarFormulario);
  
  function procesarFormulario()
  {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200)
      {
        leerJSON(this)
      }
    };
    xhttp.open("GET", "data/usuarios.json", true);
    xhttp.send();
  }

  function leerJSON(respuestaJson) 
  {
    var objJson = JSON.parse(respuestaJson.responseText);
    var i;
    var bandera= false
    for (i in objJson.usuarios)
      {
        if (objJson.usuarios[i].correo == mail.value && objJson.usuarios[i].pwd == pass.value)
          bandera= true
      }
    if (bandera == false)
      {
        error.style.color="red";
        error.innerHTML= "Correo o contraseña incorrectos, intente de nuevo"
      }
    else
    {
      form.submit();
    }
  }
  mail.addEventListener("focus", limpiarMensajeEmail);
  pass.addEventListener("focus", limpiarMensajePwd);
  
  function limpiarMensajeEmail()
  {
   error.innerHTML="";
    mail.value=""
  }

  function limpiarMensajePwd()
  {
   error.innerHTML="";
    pass.value=""
  }
}