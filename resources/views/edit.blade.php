<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}" />

    </head>
    <body>



        <form action="{{ route('taskEdit') }}" method="post">
            <div id="myDIV" class="header">
            <h2></h2>
              <input type="text" name="title" placeholder="Title..." value = '{{ $task->title }}'>
              @csrf
              <input type="hidden" name="id" value="{{ $task->id }}">
              <button type="submit" class="addBtn">Edit</button>
            </div>
        </form>


    </body>

</html>