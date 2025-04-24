<!-- resources/views/posts/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <!-- Pārbaudām, vai ir ieraksti -->
    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul>
            <!-- Izvadām visus postus -->
            @foreach($posts as $post)
                <li>
                    <strong>{{ $post->title }}</strong><br>
                    {{ $post->content }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
