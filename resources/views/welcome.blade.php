<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
 
    
</head>

<body>
  @include('layouts.nav')

  @if(request()->session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ request()->session()->get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @elseif(request()->session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ request()->session()->get('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  @include('layouts.form')
  <ul id="myUL">
    @foreach($tasks as $task)
    <li>
      <div class="task">
        {{ $task->title }}
      </div>
      <div class="action">
        <a href=""><i class="fa fa-edit"></i></a>
      </div>
      <div class="action">
        <a href="{{ route('taskDelete', $task->id) }}"><i class="fa fa-trash-alt"></i></a>
      </div>
    </li>
    @endforeach
  </ul>
</body>

</html>