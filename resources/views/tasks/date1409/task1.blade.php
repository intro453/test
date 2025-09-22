<h1>Hello from tasks/date1409/task1.blade.php</h1>

<form method="post" action="{{route('tasks.1409.task1.calculate')}}">
    Число 1 <input type="text" name="num1"><br><br>
    Число 2 <input type="text" name="num2"><br><br>
    <input type="submit" value="Отправить">
    @csrf
</form>
@if(session('message'))
<p>{{ session('message') }}</p>
@endif

<br><a href="{{ route('tasks') }}">Назад</a>
