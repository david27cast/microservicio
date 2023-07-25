<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electronik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="CSS/style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="Imagenes/favicon (9).ico" type="image/x-ico">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" 
          href="https://fonts.googleapis.com/css2?family=Clímate+Crisis&family=Tilt+Prism">
  <script src="https://kit.fontawesome.com/d6098394de.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">
    <img src="Imagenes/icono.png" alt="Bootstrap" width="40" height="35"> Electronik </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
</header>
    <section class="container-fluid bg-light p-5">
      <h1>Los datos proporcionados son los siguientes</h1>
      <h3>Nombre: <span class="text-info"><?php echo $_GET["nombre"]; ?></h3>
        <h3>Apellido: <span class="text-info"><?php echo $_GET["apellido"]; ?></h3>
          <h3>Correo Electrónico: <span class="text-info"><?php echo $_GET["email"]; ?></h3>
            <h3>Contraseña: <span class="text-info"><?php echo $_GET["pwd"]; ?></h3>
              <h3>Contraseña confirmada: <span class="text-info"><?php echo $_GET["pwd2"]; ?></h3>
</section>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
 </body>
</html>