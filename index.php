<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi JSON</title>
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!--/Bootstrap-->
  <!-- My css -->
  <link rel="stylesheet" href="src/css/style.css" />
  <!-- /My css -->
</head>

<body>
  <div id="app">
    <header>
      <h1 class="text-center">
        Albums
      </h1>
    </header>
    <main>
      <div class="container">
        <ul class="row gx-5 gy-5">
          <li v-for="album in albums" class="col-4">
            <div class="mycard text-center">
              <div class="img-box">
                <img src="img/deceiver-of-the-gods.jpg" alt="Deceiver of the Gods">
              </div>
              <h2 class="mt-4">Title</h2>
              <p>Artist</p>
              <p>Year</p>
            </div>
          </li>
        </ul>
      </div>
    </main>
  </div>

  <!-- Vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- /Vue -->
  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- /Axios -->
  <!-- My js -->
  <script src="src/js/main.js"></script>
  <!-- /My js -->
</body>

</html>