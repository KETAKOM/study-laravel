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
        <sample id="test"></sample>
        <example id="app"></example>
    <!--    <h1>ユーザー一覧</h1>-->

    <!--    @foreach ($users as $user)-->
    <!--        <p>{{ $user->name }}</p><br>-->
    <!--    @endforeach-->
        
    <!--    <br>-->
    <!--    <h1>画像アップロード</h1><br>-->
    <!--    <form id="my_form">-->
    <!--        <input type="file" name="file_1">-->
    <!--        <button type="button" id="file_upload">アップロード</button>-->
    <!--    </form>-->
    </body>
</html>

<script src=" {{ mix('js/app.js') }} "></script>
<script>
</script>