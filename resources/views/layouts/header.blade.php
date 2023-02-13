<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIRDARYO EKOLOGIYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset("assets/img/Emblem_of_State_committee_of_Uzbekistan_on_ecology.png")}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">

        <!-- <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <img src="./img/logo.png" class="logoimg" alt="">
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="https://htmlcodex.com"><img class="img-fluid" src="img/ads-728x90.png" alt=""></a>
            </div>
        </div> -->
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <div class="row ">
                <div class="logo">
                    <img src="{{asset('assets/img/logo.png')}}" class="logoimg" alt="">
                    <a href="{{url('/')}}">{{ __('messages.logo') }}<a>

                </div>
            </div>


            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link ">{{ __('messages.bosh') }}</a>
                    <a href="{{url('comit')}}" class="nav-item nav-link">{{ __("messages.Qo'mita") }}</a>
                    <a href="{{url('functions')}}" class="nav-item nav-link">{{ __('messages.Faoliyat') }}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >{{ __('messages.Faoliyat') }}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{url('rahbar')}}" class="dropdown-item">{{ __('messages.Rahbariyat') }}</a>
                            <a href="{{url('viloyat')}}" class="dropdown-item">{{ __('messages.Viloyat') }}</a>
                            <a href="{{url('xisobot')}}" class="dropdown-item">{{ __('messages.Xisobotlar') }}</a>
                        </div>
                    </div>
                    <a href="{{url('contact')}}" class="nav-item nav-link">{{ __('messages.Aloqa') }}</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" ><span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                            @endif
                        @endforeach
                        </div>
                    </div>



                </div>

            </div>
        </nav>
    </div>
    <script type="text/javascript">
        var lastResFind=""; // последний удачный результат
        var copy_page=""; // копия страницы в ихсодном виде
        function TrimStr(s) {
             s = s.replace( /^\s+/g, '');
          return s.replace( /\s+$/g, '');
        }
        function FindOnPage(inputId) {//ищет текст на странице, в параметр передается ID поля для ввода
          var obj = window.document.getElementById(inputId);
          var textToFind;

          if (obj) {
            textToFind = TrimStr(obj.value);//обрезаем пробелы
          } else {
            alert("Введенная фраза не найдена");
            return;
          }
          if (textToFind == "") {
            alert("Вы ничего не ввели");
            return;
          }

          if(document.body.innerHTML.indexOf(textToFind)=="-1")
          alert("Ничего не найдено, проверьте правильность ввода!");

          if(copy_page.length>0)
                document.body.innerHTML=copy_page;
          else copy_page=document.body.innerHTML;


          document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");//стираем предыдущие якори для скрола
          document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='background:red'>"+textToFind+"</a>"); //Заменяем найденный текст ссылками с якорем;
          lastResFind=textToFind; // сохраняем фразу для поиска, чтобы в дальнейшем по ней стереть все ссылки
          window.location = '#'+textToFind;//перемещаем скрол к последнему найденному совпадению
         }
        </script>
    <!-- Navbar End -->

