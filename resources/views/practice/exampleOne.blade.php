<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <header>
        <div>
            <div class="d-flex justify-content-around">
                <ul class="d-flex justify-content-around col-lg-4">
                    <a href=""><li>О нас</li></a>
                    <a href=""><li>Каталог</li></a>
                    <a href=""><li>Где нас найти?</li></a>
                </ul>
                <ul class="d-flex justify-content-around col-lg-2">
                    <a href=""><li>Вход</li></a>
                    <a href=""><li>Регистрация</li></a>
                </ul>
            </div>
        </div>
    </header>

    <section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="img/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="img/1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="img/1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>
    
    <div class="container">
        <div class="card">
            <!-- <img src="img/1.jpg" alt=""> -->
            <h6>Batman Vol 1 #59</h6>
            <p>Цена: 1500 руб</p>
        </div>
    </div>
</body>
</html>