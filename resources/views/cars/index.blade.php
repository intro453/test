

{{__('my.greeting')}}
@if(!$name)
    <form action="{{ route('plugin.remember.name') }}" method="POST">
        @csrf
        <label>Введите ваше имя:</label>
        <input type="text" name="username" placeholder="Ваше имя">
        <button type="submit">Сохранить</button>

        @error('username')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </form>
@else
    <h3>Привет, {{ $name }}!</h3>

    <form action="{{ route('plugin.forget.name') }}" method="POST">
        @csrf
        <button type="submit">Забыть меня</button>
    </form>
@endif

<table border="1">
    <thead>
    <tr>
        <th>Марка</th>
        <th>Модель</th>
        <th>Год</th>
        <th>Цвет</th>
        <th>Статус</th>
        <th>Описание</th>
        <th></th>
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
            <td><a href="{{route('cars.show',$car?->id)}}">посмотреть</a></td>
            <td><a href="{{route('cars.edit',$car?->id)}}">редактировать</a></td>

            @if(!$car->trashed())
            <td><a href="{{route('cars.destroy',[$car?->id,'soft_delete'])}}">удалить</a></td>
            @else
            <td><a href="{{route('cars.destroy',[$car?->id,'repair'])}}">восстановить</a></td>
            @endif
            <td><a href="{{route('cars.destroy',[$car?->id,'hard_delete'])}}">удалить полностью</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif
<a href="{{route('cars.create')}}">Добавить машину</a>
