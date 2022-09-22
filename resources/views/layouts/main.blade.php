<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ __('Booking') }}</title>
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body class="{{ $class ?? '' }}">
  @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  @include('layouts.page_templates.auth')
  @endauth

  @guest()
    @include('layouts.page_templates.guest')
  @endguest
  <!--   Core JS Files   -->
{{--  <script src="/js/core/jquery.min.js" defer></script>
 <script src="/js/core/jquery-ui.js" defer></script> --}}
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $( function() {
      /* var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
      ]; */
      $( "#search" ).autocomplete({
        source: function(request, response){
           $.ajax({
            url:"{{route('search')}}",
            dataType:'json',
            data: {
              term:request.term
            },
            success:function(data){
              

             //response(data)
              $('.agile-group label').html(data);
            }
           });

        }
      });
    } );
    </script>  
 {{-- <script src="/js/test.js"></script> --}}
 


  <script src="/js/core/popper.min.js"></script>
  {{-- <script src="/js/core/bootstrap-material-design.min.js"></script> --}}
  {{-- <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script> --}}
  @stack('js')
</body>
</html>
