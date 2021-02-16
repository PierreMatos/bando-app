<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Link</th>
        <th>Asset</th>
        <th>Lyric</th>
        <th>Type</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->name }}</td>
            <td>{{ Str::limit($post->description, 162) }}</td>
            <td>{{ $post->link }}</td>
            <td> <img src="{{ $post->asset }}" alt="..." class="img-thumbnail"> </td>
            <td>{{ $post->lyric }}</td>
            <td>{{ $post->type->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
