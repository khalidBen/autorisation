<form action="{{route('post.store')}}" method="POST" class="form-example">
    @csrf
    <div class="form-example">
        <label for="title">Title: </label>
    <input type="text" name="title" id="title">
  </div>
  <div class="form-example">
    <label for="content">Content: </label>
    <input type="content" name="content" id="content" required>
    <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
  </div>
  <div class="form-example">
    <input type="submit" value="Subscribe!">
  </div>
</form>
