<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Tasks</h1>
        <h2>Tasks0709</h2>
        @for ($i = 1; $i <= 6; $i++)
            <a href="{{ route('tasks.0709.task' . $i) }}">task{{ $i }}</a><br>
        @endfor
        <h2>Tasks1109</h2>
        @for ($i = 1; $i <= 3; $i++)
            <a href="{{ route('tasks.1109.task' . $i) }}">task{{ $i }}</a><br>
        @endfor
        <h2>Tasks1409</h2>
        @for ($i = 1; $i <= 2; $i++)
            <a href="{{ route('tasks.1409.task' . $i) }}">task{{ $i }}</a><br>
        @endfor

    Вопросы:<br>

    </body>
</html>
