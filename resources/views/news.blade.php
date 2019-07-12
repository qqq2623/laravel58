<!doctype html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{mix('css/app.css')}}"  rel="stylesheet">
    </head>
    <body>
        <div class="content">
            news room
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript">
//        Echo.channel('news').listen('News' , (e) => {
//           alert(e.message);
//        });
    </script>
</html>