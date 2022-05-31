@foreach ($movies1->Search as $row)
    <img src="{{$row->Poster}}">
    {{$row->Title}}
         <form method=POST action="favorites">
             @csrf
             <input type="hidden" name="title" value="{{ $row->Title }}">
             <button type="submit">Add to favorites</button>                      
         </form>
    <hr>
@endforeach