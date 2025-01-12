<?
?>
<!doctype html>
<html lang="ru">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/src/img/logo/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/src/css/media.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-bottom">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <div class="d-flex justyfi-content-around">
            <div>
              <img src="/src/img/logo/logo.svg" alt="" class="logo">
            </div>
              <div class="logo_text">
                <span>ДонСтройОкна</span>
              </div>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#osteclenie" aria-disabled="true">Остекление окон</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-target="#okraska" aria-disabled="true" >Окраска окнон</a>
            </li>
            <li class="nav-item">
              <a class="nav-link dogovor_container" data-bs-toggle="modal" data-bs-target="#zvonok">Заказать звонок</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login" tabindex="-1" aria-disabled="true">Аккаунт</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid mt-2">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-auto">
          <div>
            <img src="/src/img/work/baner_max.png" alt="" srcset="" class="banner">
          </div>
          <div class="baner_text_с">
            <div class="baner_text text_max">
              <div>
                <span>ДонСтроиОкна.рф - ваша мечта</span>
              </div>
              <div>
                <span>в одном клике от вас!</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-8">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-auto">
          <div>
            <span class="text_heading">О компании</span>
          </div>
          <div class="mt-2">
            <span class="text_max">
              Компания «ДонСтройОкна» работает на рынке строительных ограждающих конструкций с 2015 года.
            </span>
          </div>
          <div class="mt-2">
            <span class="text_max">
              Сегодня, компания «ДонСтройОкна» имеет собственную производственную базу, на которой расположены 3 цеха по изготовлению алюминиевых, пвх и металлоконструкций.
            </span>
          </div>
          <div class="mt-2">
            <span class="text_max">
              Мы производим широкой спектр продукции: это металлопластиковые и алюминиевые конструкции, металлоизделия, большая номенклатура оборудования для металлопластикового производства, производство павильонов, собственная логистическая компания.
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-4 btn_help_container">
      <div>
        <input value="Заказать остекление" type="button" class="btn_shema_p" data-bs-toggle="modal" data-bs-target="#osteclenie">
      </div>
      <div>
        <input value="Наши работы" type="button" class="btn_shema_p" data-bs-toggle="modal" data-bs-target="#our_works">
      </div>
      <div>
        <input value="Заказать окраску" type="button" class="btn_shema_p" data-bs-toggle="modal" data-bs-target="#okraska">
      </div>
    </div>
    <div class="mt-4 btn_help_container">
      <div>
        <input value="Заказать замер" type="button" class="btn_shema_p" data-bs-toggle="modal" data-bs-target="#zamer">
      </div>
      <div>
        <input value="Задать вопрос" type="button" class="btn_shema_p" data-bs-toggle="modal" data-bs-target="#zvonok">
      </div>
      <div>
        <input value="Заказать звонок" type="button" class="btn_shema_p" data-bs-toggle="modal" data-bs-target="#zvonok">
      </div>
    </div>
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-lg-12">
          <span class="text_heading">Приемущества работы с нами</span>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-2">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card baner_priemysh mt-2 card_size">
            <img src="/src/img/icons_priemychestwa/montag.svg" class="card-img-top icons_pr" alt="...">
            <div class="card-body">
              <div>
                <span class="text_max_c">Бесплатный монтаж</span>
              </div>
              <div>
                <span class="text_max_c_2">Бесплатный монтаж в подарок при оформлении заказа.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card baner_priemysh mt-2 card_size">
            <img src="/src/img/icons_priemychestwa/since.svg" class="card-img-top icons_pr" alt="...">
            <div class="card-body">
              <div>
                <span class="text_max_c">Современное оборудование</span>
              </div>
              <div>
                <span class="text_max_c_2">Используем высококачественные материалы для производства<span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card baner_priemysh mt-2 card_size">
            <img src="/src/img/icons_priemychestwa/time.svg" class="card-img-top icons_pr" alt="...">
            <div class="card-body">
              <div>
                <span class="text_max_c">Срок службы</span>
              </div>
              <div>
                <span class="text_max_c_2">Наши конструкции имеют срок службы в 50 лет<span>
              </div>
            </div>
          </div>
        </div>
        <!--block-2-->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card baner_priemysh mt-2 card_size">
            <img src="/src/img/icons_priemychestwa/price.svg" class="card-img-top icons_pr" alt="...">
            <div class="card-body">
              <div>
                <span class="text_max_c">Цены от производителя</span>
              </div>
              <div>
                <span class="text_max_c_2">Цены на прямую с производства.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card baner_priemysh mt-2 card_size">
            <img src="/src/img/icons_priemychestwa/gost.svg" class="card-img-top icons_pr" alt="...">
            <div class="card-body">
              <div>
                <span class="text_max_c">Соблюдение ГОСТ</span>
              </div>
              <div>
                <span class="text_max_c_2">Каждое изделие проходит сертификацию согласно ГОСТ<span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card baner_priemysh mt-2 card_size">
            <img src="/src/img/icons_priemychestwa/neszakaz.svg" class="card-img-top icons_pr" alt="...">
            <div class="card-body">
              <div>
                <span class="text_max_c">Выполнение нестандартых заказов</span>
              </div>
              <div>
                <span class="text_max_c_2">Выполняем нестандартные конструкции<span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <span class="text_heading">Конструкция профиля и производство</span>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-2">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="baner_constr mt-2" id="shema_rondo">
            <div id="shema_rondo_b">
              <button type="button" class="btn btn-primary btn-lg rounded-3 btn_shema_p" onclick="component.display('shema_rondo');">Производство</button>
            </div>
            <div>
              <img src="/src/img/profile/rondo.svg" alt="" srcset="" class="banner">
            </div>
          </div>
          <div class="baner_constr mt-2" id="video_rondo">
            <div id="video_rondo_b">
              <button type="button" class="btn btn-primary btn-lg rounded-3 btn_shema_p" onclick="component.display('video_rondo');">Конструкция</button>
            </div>
            <div class="thumb-wrap">
              <iframe width="560" height="315" src="/src/video/rondo.mp4?autoplay=0" frameborder="0" allowfullscreen controls>
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-3">
      <div class="slider">
          <div class="slides">
              <div class="slide">
                <div class="content_slide_head">
                  <div>
                    <img src="/src/img/user.jpg" alt="" class="user_icon">
                  </div>
                  <div class="text_max_c_2">
                    <div class="star">
                      <label></label>
                      <label></label>
                      <label></label>
                      <label></label>
                      <label></label>
                    </div>
                    <div>
                      <span>Фамилия Имя</span>
                    </div>
                  </div>
                </div>
                <div class="text_max_c_2 content_slide_body">
                  <span>Всё конечно супер, остались довольны спасибо мы довольн ынннннннн нннннннн нннннннннн нннннннн ннннннн нннннн  ннннннн    нннннннннннн ннннннннн   ннннннннн ннннннн  нннннннн</span>
                </div>
              </div>
              <div class="slide active">
                <div class="content_slide_head">
                  <div>
                    <img src="/src/img/user.jpg" alt="" class="user_icon">
                  </div>
                  <div class="text_max_c_2">
                    <div class="star">
                      <label></label>
                      <label></label>
                      <label></label>
                      <label></label>
                      <!--<label></label>-->
                    </div>
                    <div>
                      <span>Фамилия Имя</span>
                    </div>
                  </div>
                </div>
                <div class="text_max_c_2 content_slide_body">
                  <span>Всё конечно супер, остались довольны спасибо мы довольн ынннннннн нннннннн нннннннннн нннннннн ннннннн нннннн  ннннннн    нннннннннннн ннннннннн   ннннннннн ннннннн  нннннннн</span>
                </div>
              </div>
              <div class="slide">
                <div class="content_slide_head">
                  <div>
                    <img src="/src/img/user.jpg" alt="" class="user_icon">
                  </div>
                  <div class="text_max_c_2">
                    <div class="star">
                      <label></label>
                      <label></label>
                      <label></label>
                      <!--<label></label>
                      <label></label>-->
                    </div>
                    <div>
                      <span>Фамилия Имя</span>
                    </div>
                  </div>
                </div>
                <div class="text_max_c_2 content_slide_body">
                  <span>Всё конечно супер, остались довольны спасибо мы довольн ынннннннн нннннннн нннннннннн нннннннн ннннннн нннннн  ннннннн    нннннннннннн ннннннннн   ннннннннн ннннннн  нннннннн</span>
                </div>
              </div>
          </div>
          <button class="prev slide_btn" onclick="component.show(-1)" class="slide_btn rounded-circle ">&#10094;</button>
          <button class="next slide_btn" onclick="component.show(1)" class="slide_btn">&#10095;</button>
      </div>
    </div>
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 baner_constr">
          <iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=147428952890" class="map_ya" frameborder="0"></iframe>
        </div>
      </div>
    </div>
    <div class="container-fluid rounded-top fother_container">
      <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="logo_text">
            <div>
              <span>Телефон: <a href="tel:+79885472299">+7 (988) 547-22-99</a></span>
            </div>
            <div>
              <span>Адрес: <a href="card:">Коммунистический просп., 32, корп. 3</a></span>
            </div>
            <div>
              <span>микрорайон Западный (этаж 2, офис 57)</span>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="logo_text">
            <div>
              <span>Адрес электроной почты:<a href="malito:DonStroiOcna@gmail.com">DonStroiOcna@gmail.com</a></span>
            </div>
            <div>
              <span><a href="#">Заказать обратный звонок</a></span>
            </div>
            <div>
              <span>Политика и конфидициальность</span>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="logo_text">
            <div>
              <span>Режим работы</span>
            </div>
            <div>
              <span>Пн-пт: 09:00 - 17:00</span>
            </div>
            <div>
              <span>Cб: 09:00 - 15:00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--modal-->
    <div class="modal fade" id="zvonok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">X</button>
          </div>
          <div class="modal-body" id="corzina">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="osteclenie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Оформление остекления</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">X</button>
          </div>
          <div class="modal-body" id="corzina">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="our_works" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Наши работы</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">X</button>
          </div>
          <div class="modal-body" id="corzina">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="okraska" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Оформление окраски</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">X</button>
          </div>
          <div class="modal-body" id="corzina">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="zamer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Заказ замера</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть">X</button>
          </div>
          <div class="modal-body" id="corzina">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!--/modal-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="/src/js/component.js"></script>
  </body>
</html>