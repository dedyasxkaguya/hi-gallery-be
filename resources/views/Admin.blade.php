{{-- {{ dd($users) }} --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>HI-GRAM OVERVIEW</p>
    <p>Post Count : {{ $post_count }}</p>
    <p>User Count : {{ $user_count }}</p>

    <div class="">
        <h5>User table</h5>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>PostS</th>
                    <th>Followings</th>
                    <th>Followers</th>
                    <th>Like</th>
                    <th>Comment</th>
                    <th>favorite</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <form action="/admin/delete/user/{{ $user->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->post_count }}</td>
                            <td>{{ $user->following_count }}</td>
                            <td>{{ $user->follower_count }}</td>
                            <td>{{ $user->comment_count }}</td>
                            <td>{{ $user->like_count }}</td>
                            <td>{{ $user->favorite_count }}</td>
                            <td>
                                <button type="submit">Delete User</button>
                            </td>
                        </tr>
                    </form>
                @endforeach
            </tbody>
        </table>
    </div>
    @if ($message)
        <p>{{ $message }}</p>
    @endif
    <div class="">
        <h5>Post table</h5>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Caption</th>
                    <th>Image</th>
                    <th>Time</th>
                    <th>Comment</th>
                    <th>Like</th>
                    <th>Slug</th>
                    <th>username</th>
                    <th>category</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <form action="/admin/delete/user/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ Str::limit($post->caption, 24) }}</td>
                            <td>{{ $post->image }}</td>
                            <td>{{ $post->formatted_time }}</td>
                            <td>{{ $post->comment_count }}</td>
                            <td>{{ $post->like_count }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->user->username }}</td>
                            <td>{{ $post->category->name }}</td>
                            {{-- <td>{{ $post->favorite_count }}</td> --}}
                            <td>
                                <button type="submit">Delete Post</button>
                            </td>
                        </tr>
                    </form>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>

</html>
