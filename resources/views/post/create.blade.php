<form method="POST" action="{{route('post.store')}}">
   Town: <input type="text" name="post_town">
   Capacity: <input type="text" name="post_capacity">
   Code: <input type="text" name="post_code">
   @csrf
   <button type="submit">ADD</button>
</form>
