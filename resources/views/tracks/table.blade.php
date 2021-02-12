<div class="table-responsive">
    <table class="table" id="tracks-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Link</th>
        <th>Asset</th>
        <th>Lyric</th>
        <th>Order</th>
        <th>Duração</th>
        <th>Album Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tracks as $track)
            <tr>
                <td>{{ $track->name }}</td>
            <td>{{ $track->description }}</td>
            <td>{{ $track->link }}</td>
            <td>{{ $track->asset }}</td>
            <td>{{ $track->lyric }}</td>
            <td>{{ $track->order }}</td>
            <td>{{ $track->duração }}</td>
            <td>{{ $track->album_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tracks.destroy', $track->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tracks.show', [$track->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tracks.edit', [$track->id]) }}" class='btn btn-default btn-xs'>
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
