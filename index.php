<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Features</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/features/"
    />

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/dist/css/features.css" rel="stylesheet" />
  </head>
  <body>

    <main>
      <h1 class="visually-hidden">Features examples</h1>

      <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <a
                  href="input-alt.php"
                  style="color: white; text-decoration: none;"
                >
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    Input Data for Pickup Student
                  </h2>
                </a>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <h2><i class="fab fa-grav"></i></h2>
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#calendar3" />
                    </svg>
                    <small>
                      <div>
                        <script>
                          date = new Date().toLocaleDateString();
                          document.write(date);
                        </script>
                      </div>
                    </small>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <a
                  href="data-pickup.php"
                  style="color: white; text-decoration: none;"
                >
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    Data Pickup Student
                  </h2>
                </a>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <h2><i class="fab fa-grav"></i></h2>
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#calendar3" />
                    </svg>
                    <small>
                      <div>
                        <script>
                          date = new Date().toLocaleDateString();
                          document.write(date);
                        </script>
                      </div>
                    </small>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <a
                  href="input.php"
                  style="color: white; text-decoration: none;"
                >
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    Scanning Barcode for Pickup Student
                  </h2>
                </a>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <h2><i class="fab fa-grav"></i></h2>
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em">
                      <use xlink:href="#calendar3" />
                    </svg>
                    <small>
                      <div>
                        <script>
                          date = new Date().toLocaleDateString();
                          document.write(date);
                        </script>
                      </div>
                    </small>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container px-4 py-1" id="icon-grid">

        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card border-primary h-100">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Class 1 A</h5>
                <p class="card-text">Detail data of students who have been picked up and edit status.</p>
                <a href="rombel/kelas1a/data-pickup.php" class="btn btn-primary">Open</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-primary h-100">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Class 1 B</h5>
                <p class="card-text">Detail data of students who have been picked up and edit status.</p>
                <a href="rombel/kelas1b/data-pickup.php" class="btn btn-primary">Open</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-primary h-100">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Class 1 C</h5>
                <p class="card-text">Detail data of students who have been picked up and edit status.</p>
                <a href="rombel/kelas1c/data-pickup.php" class="btn btn-primary">Open</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-primary h-100">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Class 1 D</h5>
                <p class="card-text">Detail data of students who have been picked up and edit status.</p>
                <a href="rombel/kelas1d/data-pickup.php" class="btn btn-primary">Open</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>

    </main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
