<h1>Hello from tasks/date1409/task3.blade.php</h1>

<form method="post" action="{{route('tasks.1409.task3.calculate')}}">
    Дата <input type="text" name="date1" value="22.10.2017"><br><br>
    Дата <input type="text" name="date2" value="23.10.2017"><br><br>
    <input type="submit" value="Отправить">
    @csrf
</form>
Дано две даты. Вывести ту, которая раньше, в формате ‘день-месяц (год)’
@if(session('message'))
<p>{{ session('message') }}</p>

@endif

<br><a href="{{ route('tasks') }}">Назад</a>
