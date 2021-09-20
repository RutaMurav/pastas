<form method="POST" action="{{route('parcel.store')}}">
   Weight: <input type="text" name="parcel_weight">
   Phone: <input type="text" name="parcel_phone">
   Info: <textarea name="parcel_info"></textarea>
   <select name="post_id">
       @foreach ($posts as $post)
           <option value="{{$post->id}}">{{$post->town}} {{$post->capacity}} {{$post->code}}</option>
       @endforeach
</select>
   @csrf
   <button type="submit">ADD</button>
</form>
