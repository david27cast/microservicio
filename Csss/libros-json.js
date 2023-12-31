window.onload=function () 
{
  var select_cat =document.getElementById("EDITORIAL")
  select_cat.addEventListener("change", CargarArticulos)
  var div_Demo=document.getElementById("LIBROS")


  function CargarArticulos() 
  {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function ()
    {
      if(this.readyState == 4 && this.status == 200)
      {
       leerJSON(this)
      }
    };
  xhttp.open("GET","datos.json",true)
  xhttp.send()
  }
  function leerJSON(respuestaJSON) 
  {
    var objJSON = JSON.parse(respuestaJSON.responseText); 
    var i
    div_Demo.innerHTML="";
    for (i in objJSON.EDITORIAL)
    {
      if(select_cat.value == objJSON.EDITORIAL[i].editorial)
      {
        var divCard = document.createElement("div")
        divCard.className="card"
        var imagenArticulo = document.createElement("img")
        imagenArticulo.src = objJSON.EDITORIAL[i].imagen
        imagenArticulo.className = "card-img-top"
        divCard.appendChild(imagenArticulo)

        var divBody = document.createElement("div")
        divBody.className = "card-body"
        divCard.appendChild(divBody)
        var encabezadoh4 = document.createElement("h4")
        encabezadoh4.className = "card-title"
        encabezadoh4.innerHTML = objJSON.EDITORIAL[i].titulo
        divBody.appendChild(encabezadoh4)
        var encabezadoh6 = document.createElement("h6")
        encabezadoh6.className = "card-subtitle text-muted"
        encabezadoh6.innerHTML = objJSON.EDITORIAL[i].autor
        divBody.appendChild(encabezadoh6)
        var parrafoContenido = document.createElement("p")
        parrafoContenido.className="card-text"
        parrafoContenido.innerHTML = objJSON.EDITORIAL[i].contenido
        divBody.appendChild(parrafoContenido)
        var botonArticulo = document.createElement("a")
        botonArticulo.className="btn btn-success text-white"
        botonArticulo.innerHTML="Leer Mas"
        divBody.appendChild(botonArticulo)
        div_Demo.appendChild(divCard)
      }
    }
  }
}

