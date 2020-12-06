<table class="table">
    <thead>
        <tr>
            <th>User</th>
            <th class="text-center">Posts</th>
            <th class="text-center">Comments</th>
        </tr>
    </thead>
       <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td class="text-center">{{ $user->posts_count }}</td>
                <td class="text-center">{{ $user->comments_count }}</td>
            </tr>
        @endforeach
    </tbody>
</table>