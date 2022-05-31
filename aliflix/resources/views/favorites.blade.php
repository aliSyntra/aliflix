    <h1>your favorite movies are...<hr>
@foreach ($favorites as $favorite )
    <p>{{$favorite->title}}<hr></p>
@endforeach