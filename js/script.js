window.onload=function(){
  var siguiente = document.getElementById("adelante");
  siguiente.addEventListener("click", versiguiente);

  function versiguiente() 
  {
   var aux = document.getElementById("producto")
   var ruta = aux.src;
   if(ruta.includes('Imagenes/ca_p1.png'))
     aux.src="Imagenes/ca_p2.png";
    else if(ruta.includes('Imagenes/ca_p2.png'))
     aux.src="Imagenes/ca_p3.png";
    else
      aux.src="Imagenes/ca_p1.png";
  }
  
  var vista_atras = document.getElementById("atras");
  vista_atras.addEventListener("click", verAtras);
  function verAtras() 
  {
     var aux = document.getElementById("producto")
   var ruta = aux.src;
   if(ruta.includes('Imagenes/ca_p1.png'))
     aux.src="Imagenes/ca_p3.png";
    else if(ruta.includes('Imagenes/ca_p3.png'))
     aux.src="Imagenes/ca_p2.png";
    else
      aux.src="Imagenes/ca_p1.png";
  }

  var btn= document.getElementById("ver");
  btn.addEventListener("click", mostrarEspecificaciones)

  function mostrarEspecificaciones() 
  {
   var text= document.getElementById("datos");
   text.innerHTML=">Computadoras 100% armadas por nuestros tecnicos <br> > 1 año de garantia";
   var instrucciones= document.createElement("h5");
   instrucciones .innerHTML="Envios a todo el pais  ";
    text.appendChild(instrucciones);
    var img= document.createElement("img");
    img.src="Imagenes/envio.png"
    instrucciones.appendChild(img);
  }

  var btn= document.getElementById("ocultar");
  btn.addEventListener("click", ocultarespe)

  function ocultarespe() 
  {
   var elemento = document.getElementById("datos");
    while (elemento.firstChild)
    {
     elemento.removeChild(elemento.firstChild); 
    }
  }

  document.getElementById("rojo").addEventListener("click", function() { cambiarimagen(this); } );
  document.getElementById("negro").addEventListener("click", function() { cambiarimagen(this); } );
  document.getElementById("morado").addEventListener("click", function() { cambiarimagen(this); } );

  function cambiarimagen(objeto) 
  {
    var aux = document.getElementById("producto2");
    switch(objeto.id)
    {
      case 'rojo':
        aux.src="Imagenes/ca_m2.png"
        break;
      case 'morado':
        aux.src="Imagenes/ca_m3.png"
        break;
      default:
        aux.src="Imagenes/ca_m1.png"
    }
  }

   document.getElementById("lente").addEventListener("click", function() { cambiarprecio(this); } );
   document.getElementById("sinlente").addEventListener("click", function() { cambiarprecio(this); } );

  function cambiarprecio(objeto) 
  {
   var precio= document.getElementById("precio");
     switch(objeto.id)
    {
      case 'sinlente':
        precio.innerHTML="$13,500.00"
        break;
      default:
        precio.innerHTML="$15,399.00"
    }
  }
}