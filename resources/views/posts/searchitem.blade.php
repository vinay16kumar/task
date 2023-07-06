<form action="/search" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="search" id="search" required>
 

    <!-- Add fields for other attributes such as tags and image -->

    <button type="submit">search</button>
</form>