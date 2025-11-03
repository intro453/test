<h1>Автомобили пользователя {{ $user->name }}</h1>

@foreach($cars as $car)
    <p>{{ $car->make }} {{ $car->model }} — {{ $car->year }}</p>
@endforeach
