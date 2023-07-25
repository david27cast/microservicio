<!doctype html>
<html lang="en">
  <head>
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
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">BUSCA AQUI</h1>
        <p class="col-lg-10 fs-4"> si requieres apoyo ¡estaremos aqui!.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action= "procesa.php " method="POST" class="p-4 p-md-5 border rounded-3 bg-light">

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="ayuda" checked value ="necesito ayuda con un producto" >
  <label class="form-check-label" for="ayuda">
PAIDOS
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="devolucion" value="necesito devolver producto">
  <label class="form-check-label" for="devolucion">
    DEBATE 
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="error" value="no recibi el producto solicitado">
  <label class="form-check-label" for="error">
    DIANA 
  </label>
</div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="otro" value="otro">
  <label class="form-check-label" for="otro">
    DEBOLSILLO
  </label>
</div>        
          

        <div class=form-floating mb-3">
         <input type="text" class="form-control"   id="nombre" name="nombre" >  
            <label for="nombre">AUTOR</label>
     <button class="w-100 btn btn-lg btn-primary" type="submit">BUSCAR </button>
          <hr class="my-4">
          <small class="text-muted">SE BUSCARA EN UN MOMENTO </small>
      </small>
        </form>
      </div>
    </div>
  </div> 

<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">RECOMENDACIONES</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/CORTE.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">LIBRO DEL MES</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/sinsajo.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">LITERATURA  </h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/RUISENOR.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">CLASICOS</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

          

       


    
<script src="libros-json.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>