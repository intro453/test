<h1>Hello from cars/index.blade.php</h1>


<table border="1">
    <thead>
    <tr>
        <th>Марка</th>
        <th>Модель</th>
        <th>Год</th>
        <th>Цвет</th>
        <th>Статус</th>
        <th>Описание</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <td>{{ $car->make }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->year }}</td>
            <td>{{ $car->color }}</td>
            <td>
                @if($car->is_sold)
                    <span class="text-danger">Продан</span>
                @else
                    <span class="text-success">В наличии</span>
                @endif
            </td>
            <td>{{ $car->description }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
