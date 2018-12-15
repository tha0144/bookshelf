<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        
        <title>電脳本棚</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('navibar')
        
        <div class="container">
            @include('errors')
            
            @yield('content')
        </div>
    </body>
</html>