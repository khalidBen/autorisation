@can('create', App\Models\Post::class)
    <a href="{{route('post.create')}}">create</a>
@endcan

<table>
    <thead>
        <tr>
            <td width="500px">
                Title
            </td>
            <td width="1000px">
                Content
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
        <tr>
            <td>
                {{ $post->title }}
            </td>
            <td>
                {{ $post->content }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>