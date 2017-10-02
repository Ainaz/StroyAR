<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Дополненная реальность.Демонстрация объектов строительства.</title>
  <meta name="description" content="Дополненная реальность.Демонстрация объектов строительства.">
  <meta name="Keywords" content="Дополненная реальность">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Айназ Сафин">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Таблица стилей Bootstrap -->
  <link href="libs/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
  <!-- Основная таблица стилей -->
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <!-- CSS файл плагина fullpage -->
  <link href="libs/fullpage/jquery.fullPage.css" type="text/css" rel="stylesheet">

</head>

<body>
  <!-- Модальное окно -->  
<div class="modal fade" id="basic_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content as_modal_fon">
      <div class="as_modal">
          <form class = "ajax_form modal_form" id="as_modal_app" method="POST" name="application">
              <div class="as_font_7" id="as_change_text">Получите бесплатную консультацию</div>
              <input name="name" type="text" id="as_appName" maxlength="20" placeholder="Введите ваше имя" required />
              <input name="telephone" type="text" id="as_appTelephone" maxlength="20" placeholder="Введите ваш телефон" required/>
              <button class="as_applicationButton" id="as_appBut" type="button">Оставить заявку</button>
          </form>
        </div>
    </div>
  </div>
</div>

  <div id="fullpage">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="as_logo col-md-12">
              <a href="/"><img src="images/complogo.png"></a>
            </div>
            <div class="as_header_title col-md-12">
              <h1>Дополненная реальность.</h1>
              <h1>Демонстрация объектов строительства.</h1>
            </div>
            <div class="as_header_text col-md-12">
              <div class="col-md-1"><img src="images/icons/aricon.png"></div>
              <p class="col-md-6">Наш сервис предоставляет возможность демонстрации объектов строительства Вашим клиентам с помощью мобильного приложения и технологий дополненной реальности.</p>
            </div>
            <div class="as_header_modal col-md-12">
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#basic_modal">
                Подайте заявку
              </button>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 as_block1">
            <div class="as_block1_title col-md-12">
              <h2>Дополненная реальность для Ваших клиентов</h2>
            </div>
            <div class="col-md-4 as_col_block">
              <div class="col-md-12 as_img_block1"><img class="as_img1" src="images/block1/1.png"></div>
              <div class="col-md-12 as_title1">План объекта</div>
              <div class="col-md-12 as_text1">Строительная компания передает нам план объекта строительства или готовую 3D-модель объекта</div>
            </div>
            <div class="col-md-4 as_col_block">
              <div class="col-md-12 as_img_block1"><img class="as_img1" src="images/block1/3.png"></div>
              <div class="col-md-12 as_title1">Моделирование</div>
              <div class="col-md-12 as_text1">Мы моделируем объект по чертежам, или, в случае с готовой 3D-моделью, конвертируем его в необходимый формат для приложения</div>
            </div>
            <div class="col-md-4 as_col_block">
              <div class="col-md-12 as_img_block1"><img class="as_img1" src="images/block1/1.png"></div>
              <div class="col-md-12 as_title1">Демонстрация</div>
              <div class="col-md-12 as_text1">Ваш клиент заходит в мобильное приложение и с помощью камеры на смартфоне - смотрит будущий объект в деталях и реальных размерах. В любом месте. В любое время. В реальном мире.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 as_block2">
            <div class="as_block2_title col-md-12">
              <h2>Как это будет выглядеть?</h2>
            </div>
            <div class="col-md-12 as_video"><iframe width="560" height="315" src="https://www.youtube.com/embed/6PsAAMZJuZc" frameborder="0" allowfullscreen></iframe></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 as_block3">
            <div class="as_block3_title col-md-12">
              <h2>Удобно. Наглядно. Легко.</h2>
            </div>
            <div class="col-md-6">
              <div class="as_block3_text col-md-12">
                <div class="col-md-1"><img class="as-img-icon" src="images/icons/aricon.png"></div>
                <p class="col-md-11">Почему это удобно? Вам не нужно делать ничего. Вы передаете нам чертеж объекта или его модель - мы доносим его до клиента</p>
              </div>
              <div class="as_block3_text col-md-12">
                <div class="col-md-1"><img class="as-img-icon" src="images/icons/aricon.png"></div>
                <p class="col-md-11">Почему это наглядно? Ваш клиент будет своими глазами видеть, как будет построен объект. Как впишется в окружающую среду и архитектуру. Вы сможете обсуждать и утверждать идеи прямо на месте.</p>
              </div>
              <div class="as_block3_text col-md-12">
                <div class="col-md-1"><img class="as-img-icon" src="images/icons/aricon.png"></div>
                <p class="col-md-11">Почему это легко? Вашему клиенту достаточно зайти на своем смартфоне в приложение, навести камеру на площадку где будет расположен объект и вуаля. Он уже стоит на месте.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Библиотека jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- js файлы плагина fullpage -->
  <script src="libs/bootstrap/js/bootstrap.js"></script>
  <script src="libs/fullpage/jquery.easings.min.js"></script>
  <script src="libs/fullpage/scrolloverflow.min.js"></script>
  <script src="libs/fullpage/jquery.fullPage.min.js"></script>
  <script src="scripts/main.js"></script>
  <!-- инициализация плагина fullpage -->
  <script>
    $(document).ready(function () {
      $('#fullpage').fullpage();
      menu: '#navigation'
    });
  </script>
</body>

</html>