@if ($blogPosts->isEmpty())
    <p>No blog posts found</p>
@else
    <ul>
        @foreach ($blogPosts as $blogPost)
            <li><a href="/posts/{{ $blogPost->id }}">{{ $blogPost->title }}</a></li>
        @endforeach
    </ul>
@endif