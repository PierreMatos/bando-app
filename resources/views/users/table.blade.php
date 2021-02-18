<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Slug</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created at</th>
        <th> </th>

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            
                <td width="120">
                   
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
