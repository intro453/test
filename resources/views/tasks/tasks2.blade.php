<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Tasks</title></head>
<body>
<h1>Tasks</h1>

@foreach ($groups as $date => $tasks)
    <h2>Tasks{{ $date }}</h2>
    @foreach ($tasks as $t)
        <a href="{{ $t['url'] }}">task{{ $t['num'] }}</a><br>
    @endforeach
@endforeach
</body>
</html>
