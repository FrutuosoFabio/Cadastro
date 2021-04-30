<html>


<body>
    <head>
 <link rel="stylesheet" href="{{asset('css/app.css') }}" >
 <meta name="csrf-token" content="{{csrf_token()}}"  >

    <style>  body{  padding: 20px}  
    .navbar{
      margin-bottom: 20px

    }
    
    </style>
  <title>  Cadastro de produtos</title>
    </head>
    

      
    

    <div class="container">
        @component('component_navbar',["current"=>$current])
        @endcomponent

        <main role="main">

            @hasSection ('body')
            @yield('body')
                
            @else
                
            @endif
        </main>


    </div>









    <script src="{{asset('js/app.js')}}" type="text/javascript" ></script>

</body>










</html>