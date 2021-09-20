<form method="POST" action="{{route('post.update',$post)}}">
   Town: <input type="text" name="post_town" value="{{$post->town}}">
   Capacity: <input type="text" name="post_capacity" value="{{$post->capacity}}">
   Code: <input type="text" name="post_code" value="{{$post->code}}">
   @csrf
   <button type="submit">EDIT</button>
</form>
