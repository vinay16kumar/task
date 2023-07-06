<form action="/posts" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    
    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea>

    <!-- Add fields for other attributes such as tags and image -->

    <button type="submit">Create</button>
</form>