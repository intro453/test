<h1>Hello from tasks/date1409/task2.blade.php</h1>

<form method="post" action="{{route('tasks.1409.task2.calculate')}}">
    Дата <input type="text" name="date1" value="22.10.2017"><br><br>
    <input type="submit" value="Отправить">
    @csrf
</form>
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif

<br><a href="{{ route('tasks') }}">Назад</a>
