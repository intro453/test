<h1>Hello from tasks/date1109/task3.blade.php</h1>

<ul>
    @foreach ($items as $it)
        <li style="color: {{ $it['color'] }}">
            {{ $it['value'] }} ({{ $it['color'] }})
        </li>
    @endforeach
</ul>


<br><a href="{{ route('tasks') }}">Назад</a>
