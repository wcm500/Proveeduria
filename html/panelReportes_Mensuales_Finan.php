<!doctype html>
<html lang="en">
<!--- Control de los reportes tanto rechazadas y aprobadas de los clientes 
          en historial hasta de los 6 meses pasados.  -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Reportes</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">Reportes Financieros</h4>
            </div>
            <div class="menu">
                <a href="panelControl_Jefe_Finan.html" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Tablero</a>

                <a href="panelControl_Usuarios.html" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    Usuarios</a>

                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
                    Graficos</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i>
                    Perfil</a>

            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline position-relative d-inline-block my-2">
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
                </form>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="../imagenes/user-6.png" class="img-fluid rounded-circle avatar mr-2"
                      alt="https://generated.photos/" />
                    Usuario#2
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Mi perfil</a>

                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../html/loginPrincipal.html">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Bienvenido: Reportes Mensuales Financieros 2020 </h1>
                            <p class="lead text-muted">Última información</p>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center"><a href = "AceptarReportes.html" style="color: azure;">Ultimo Reporte</a> reporte</button>
                              </div>
                          </div>
                        
                      </div>
                  </div>
              </section>

              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                          <div class="card-header bg-light">
                            <h6 class="font-weight-bold mb-0">Reporte Mensual Enero</h6>
                          </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Licencias Office</h6>
                                        <h3 class="font-weight-bold">$50 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Mantenimiento</h6>
                                        <h3 class="font-weight-bold">$20 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Seguridad</h6>
                                        <h3 class="font-weight-bold">$35 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Cambio de equipo de desarrollo</h6>
                                        <h3 class="font-weight-bold">$250 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                          <div class="card-header bg-light">
                            <h6 class="font-weight-bold mb-0">Reporte Mensual Febrero</h6>
                          </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Licencias Office</h6>
                                        <h3 class="font-weight-bold">$50 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Mantenimiento</h6>
                                        <h3 class="font-weight-bold">$20 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Seguridad</h6>
                                        <h3 class="font-weight-bold">$33 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Cambio en el equipo de desarrollo</h6>
                                        <h3 class="font-weight-bold">$225 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                          <div class="card-header bg-light">
                            <h6 class="font-weight-bold mb-0">Reporte Mensual Marzo</h6>
                          </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Licencias Office</h6>
                                        <h3 class="font-weight-bold">$50 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Mantenimiento</h6>
                                        <h3 class="font-weight-bold">$40 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>Rechazado</h6>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Seguridad</h6>
                                        <h3 class="font-weight-bold">$30 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Cambio de equipo de desarrollo</h6>
                                        <h3 class="font-weight-bold">$222 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                          <div class="card-header bg-light">
                            <h6 class="font-weight-bold mb-0">Reporte Mensual Abril</h6>
                          </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Licencias Office</h6>
                                        <h3 class="font-weight-bold">$50 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Mantenimiento</h6>
                                        <h3 class="font-weight-bold">$30 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>Aprobado</h6>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Seguridad</h6>
                                        <h3 class="font-weight-bold">$25 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>Aprobado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Cambios en el equipo de desarrollo</h6>
                                        <h3 class="font-weight-bold">$220 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                          <div class="card-header bg-light">
                            <h6 class="font-weight-bold mb-0">Reporte Mensual Mayo</h6>
                          </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Licencias Office</h6>
                                        <h3 class="font-weight-bold">$50 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Mantenimiento</h6>
                                        <h3 class="font-weight-bold">$30 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>Aprobado</h6>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Seguridad</h6>
                                        <h3 class="font-weight-bold">$25 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Cambio de equipo de desarrollo</h6>
                                        <h3 class="font-weight-bold">$220 000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

               <section class="bg-mix py-3">
			                  <div class="container">
			                      <div class="card rounded-0">
			                          <div class="card-body">
			                            <div class="card-header bg-light">
			                              <h6 class="font-weight-bold mb-0">Reporte Mensual Junio</h6>
			                            </div>
			                              <div class="row">
			                                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
			                                      <div class="mx-auto">
			                                          <h6 class="text-muted">Licencias Office</h6>
			                                          <h3 class="font-weight-bold">$50 000</h3>
			                                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
			                                      </div>
			                                  </div>
			                                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
			                                      <div class="mx-auto">
			                                          <h6 class="text-muted">Mantenimiento</h6>
			                                          <h3 class="font-weight-bold">$30 000</h3>
			                                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>Aprobado</h6>
			                                      </div>

			                                  </div>
			                                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
			                                      <div class="mx-auto">
			                                          <h6 class="text-muted">Seguridad</h6>
			                                          <h3 class="font-weight-bold">$25 000</h3>
			                                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Aprobado</h6>
			                                      </div>
			                                  </div>
			                                  <div class="col-lg-3 col-md-6 d-flex my-3">
			                                      <div class="mx-auto">
			                                          <h6 class="text-muted">Cambio de equipo de desarrollo</h6>
			                                          <h3 class="font-weight-bold">$210 000</h3>
			                                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Rechazado</h6>
			                                      </div>
			                                  </div>
			                              </div>
			                          </div>
			                      </div>
			                  </div>
              </section>
        </div>
      	</div>
  		</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020', 'JUN  2020'],
                    datasets: [{
                        label: 'Solicitudes Aprobadas',
                        data: [50, 10, 15, 29, 50],
                        backgroundColor: [
                            '#12C9E5',
                            '#12C9E5',
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
            <script>
              var ctx = document.getElementById('myChart2').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020', 'JUN  2020'],
                      datasets: [{
                          label: 'Solicitudes Rechazadas',
                          data: [5, 17, 38, 9, 5],
                          backgroundColor: [
                              '#12C9E5',
                              '#12C9E5',
                              '#12C9E5',
                              '#12C9E5',
                              '#111B54'
                          ],
                          maxBarThickness: 30,
                          maxBarLength: 2
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero: true
                              }
                          }]
                      }
                  }
              });
              </script>
</body>

</html>