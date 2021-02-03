<div class="table-responsive">
    <table class="table" id="postTypes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($postTypes as $postType)
            <tr>
                <td>{{ $postType->name }}</td>
            <td>{{ $postType->description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['postTypes.destroy', $postType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('postTypes.show', [$postType->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('postTypes.edit', [$postType->id]) }}" class='btn btn-default btn-xs'>
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
