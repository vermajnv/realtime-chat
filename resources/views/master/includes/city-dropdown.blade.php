@forelse ($cities as $key => $city)
    <option selected="selected" value="{{$city->id}}">{{$city->title}}</option>
@empty

@endforelse
