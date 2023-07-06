<form action="/blog/update" method="post">
@csrf
  <input type="hidden" name="id" value="{{ $user->id }}">
  <label for="title">Title:</label>
  <input type="text" name="title" value="{{ $user->title }}"><br>
  <label for="content">Content:</label>
  <textarea name="content">{{ $user->content }}</textarea><br>
  <input type="submit" value="Update">
</form>