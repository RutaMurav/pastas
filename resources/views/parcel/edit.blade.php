<form method="POST" action="{{route('parcel.update',[$parcel])}}">
       Weight: <input type="text" name="parcel_weight" value="{{$parcel->weight}}">
       Phone: <input type="text" name="parcel_phone" value="{{$parcel->phone}}">
       Info: <textarea name="parcel_info">{{$parcel->info}}</textarea>
       <select name="post_id">
           @foreach ($posts as $post)
               <option value="{{$post->id}}" @if($post->id == $parcel->post_id) selected @endif>
                   {{$post->weight}} {{$post->phone}} {{$post->info}}
               </option>
           @endforeach
</select>
       @csrf
       <button type="submit">EDIT</button>
</form>
