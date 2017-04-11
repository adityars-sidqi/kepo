<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>@yield('title')</title>

    <link href="{{ asset('css/metro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metro-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metro-responsive.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <script src="{{ asset('js/metro.js') }}"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }

        @yield('style_page')
    </style>
    @include('admin.layouts.flash_message')
    <script type="text/javascript">
      @yield('script_page')
    </script>

</head>
<body class="bg-steel">
    @include('admin.layouts.header')

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
              @include('admin.layouts.sidebar')
              <div class="cell auto-size padding20 bg-white" id="cell-content">
                <h1 class="text-light">@yield('title_page') <span class="mif-@yield('title_icon') place-right"></span></h1>
                <hr class="thin bg-grayLighter">
                    @yield('content')
              </div>
            </div>

        </div>
    </div>
</body>
</html>
