@foreach($posts as $post)
<tr>teste teste
<td>{{ $post->name }}</td>
<td>{{ $post->description }}</td>
<td>{{ $post->link }}</td>
<td><img src="{{ $post->asset }}"/></td>
<td>{{ $post->lyric }}</td>
<td>{{ $post->type_id }}</td>
</tr>
@endforeach