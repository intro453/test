<h1>Hello from tasks/date1109/task2.blade.php</h1>

@foreach($data as $method => $array)
    Метод: {{$method}}<br>
    @foreach($array as $key => $value)
        @if($key=="start")
            На входе {{ print_r($value,true)}}
        @endif
        @if($key=="result")
            <br>На выходе {{ print_r($value,true) }}
        @endif

    @endforeach
    <br><br><br>
@endforeach

<br><a href="{{ route('tasks') }}">Назад</a>
