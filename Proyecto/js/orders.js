window.onload=function()
{
  var mail = document.getElementById("correo");
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
  function leerJSON(respuestaJSON) 
  {
    var objJson = JSON.parse(respuestaJSON.responseText);
    var i=0, j;
    var tabla=document.getElementById("tabla")
    for(i in objJson.usuarios)
    {
     if (objJson.usuarios[i].correo == mail.innerHTML.trim())
     {
       j=0;
       for (j in objJson.usuarios[i].pedidos)
         {
           var tr= document.createElement("tr")
           var td_pedido= document.createElement("td")
           td_pedido.innerHTML=objJson.usuarios[i].pedidos[j].numero
           var td_fecha= document.createElement("td")
           td_fecha.innerHTML=objJson.usuarios[i].pedidos[j].fecha
           var td_total= document.createElement("td")
           td_total.innerHTML=objJson.usuarios[i].pedidos[j].total
           var td_estatus= document.createElement("td")
           td_estatus.innerHTML=objJson.usuarios[i].pedidos[j].estatus
           var td_boton= document.createElement("td")
           var boton= document.createElement("button")
           boton.innerHTML="Detalle"
           boton.className="btn btn-sm btn-outline-info"
           boton.type="button"
           boton.id=objJson.usuarios[i].pedidos[j].numero
           td_boton.appendChild(boton)
           tr.appendChild(td_pedido)
           tr.appendChild(td_fecha)
           tr.appendChild(td_total)
           tr.appendChild(td_estatus)
           tr.appendChild(td_boton)
           tabla.appendChild(tr)
         }
     }
    }
  }
}