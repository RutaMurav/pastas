@foreach ($parcels as $parcel)
  <a href="{{route('parcel.edit',[$parcel])}}">{{$parcel->weight}} {{$parcel->parcelPost->town}} {{$parcel->parcelPost->capacity}} {{$parcel->parcelPost->code}}</a>
  <form method="POST" action="{{route('parcel.destroy', [$parcel])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach

