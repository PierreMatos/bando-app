<div class="table-responsive">
    <table class="table" id="criaturas-table">
        <thead>
            <tr>
                <th>Slug</th>
        <th>Name</th>
        <th>Description</th>
        <th>Bio</th>
        <th>File</th>
        <th>Image</th>
        <th>Link</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($criaturas as $criatura)
            <tr>
                <td>{{ $criatura->slug }}</td>
            <td>{{ $criatura->name }}</td>
            <td>{{ $criatura->description }}</td>
            <td>{{ $criatura->bio }}</td>
            <td>{{ $criatura->file }}</td>
            <td>{{ $criatura->image }}</td>
            <td>{{ $criatura->link }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['criaturas.destroy', $criatura->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('criaturas.show', [$criatura->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('criaturas.edit', [$criatura->id]) }}" class='btn btn-default btn-xs'>
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
