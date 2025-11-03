<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Угадай число</title>
</head>
<body>

<h2>Угадай число от 1 до 100</h2>

@if(session('message'))
    <p><strong>{{ session('message') }}</strong></p>
@endif

{{-- Показываем форму, только если игра ещё идёт --}}
@if(session()->has('number'))
    <form action="{{ route('tasks.0311.task1.calculate') }}" method="POST">
        @csrf
        <input type="number" name="guess" min="1" max="100" required>
        <button type="submit">Проверить</button>
    </form>

    <p>Осталось попыток: {{ $attempts }}</p>
@else
    <p><a href="{{ route('tasks.0311.task1') }}">Начать заново</a></p>
@endif

</body>
</html>
