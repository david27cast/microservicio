 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AZUL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
  </head>
  <body>
 <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">AZUL</a> 
 

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tienda.html"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html"></a>
        </li>
<li class="nav-item">
          <a class="nav-link" href="contacto.html"></a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">   <P CLASS ="bg-dark"</P>
        <button class="btn btn-outline-success" type="submit">BUSCAR</button>
      </form>
    </div>
  </div>
</nav> 
  <h1 >"LO QUE BUSCAS ES " :</h1>
  <p class =" ">EDITORIAL: <?php echo $_POST["flexRadioDefault"]; ?></p>   
     <main class="container m-5">
        <div class="row">
          <div class="col-8">
            <!--inicia dropdown-->
            <select class="from-select mb-3" aria-label="Default select example" id="EDITORIAL">
              <option selected>EDITORIALES</option>
              <option value="DIANA">DIANA</option>
              <option value="DEBOLSILLO">DEBOLSILLO</option>
              <option value="PAIDOS">PAIDOS</option>
              <option value="DEBATE">DEBATE</option>
            </select> 
              <!-- contenedor para cargar articulos-->
            <div id="LIBROS"></div>
          </div>
        </div>
      </main>
<p class =" ">AUTOR: <?php echo $_POST["nombre"]; ?></p> 
  <script src="libros-json.js"></script>