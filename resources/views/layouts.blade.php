<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        
        <title>電脳本棚</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style type="text/css">
            body { padding-top: 70px; }
        </style>
    </head>
    <body>
        @include('common.navibar')
        
        <div class="container">
            @include('common.errors')
            
            @yield('content')
        </div>
        
        <script type="text/javascript">
            var max_length = 0;
            var all_labels = document.getElementsByTagName('label');
            for(var i = 0; i < all_labels.length; i++){
                max_length = Math.max(max_length, all_labels[i].scrollWidth);
                console.log(i + '/' + all_labels[i].scrollWidth + '/' + max_length);
            }
            console.log(max_length);
            for(var i = 0; i < all_labels.length; i++){
                all_labels[i].style.width = max_length + 'px';
            }
        </script>
    </body>
</html>