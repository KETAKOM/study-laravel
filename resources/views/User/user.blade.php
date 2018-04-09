<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>テストページ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>ユーザー一覧</h1>

        @foreach ($users as $user)
            <p>{{ $user->name }}</p><br>
        @endforeach
        
        <br>
        <h1>画像アップロード</h1><br>
        <form id="my_form">
            <input type="file" name="file_1">
            <button type="button" id="file_upload">アップロード</button>
        </form>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
$(function(){
    
    $("#file_upload").on('click', function(){
        file_upload();
    });
    
    function file_upload(){
        // フォームデータを取得
        var formdata = new FormData($('#my_form').get(0));
        console.log(formdata);
    
        // POSTでアップロード
        $.ajax({
            url  : "https://laravel-pcp-ketakom.c9users.io/api/post/uploadImage",
            type : "POST",
            data : {
                // hoge: 'hoge',
                // hage: 'hage',
                id: formdata,
            },
            // cache       : false,
            contentType : false,
            processData : false,
            // dataType    : "html"
        })
        .done(function(data, textStatus, jqXHR){
            console.log(data);
        })
        .fail(function(jqXHR, textStatus, errorThrown){
            console.log('error');
        });
    }
})
</script>