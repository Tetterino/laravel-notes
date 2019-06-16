<h1>note一覧</h1>
<table>
  <tr>
    <th>No</th>
    <th>タイトル</th>
    <th>詳細</th>
    <th>作成日</th>
  </tr>
  @foreach ($notes as $note)
  <tr>
    <td>{{ $note->id }}</td>
    <td>{{ $note->title }}</td>
    <td>{{ $note->description }}</td>
    <td>{{ $note->created_at }}</td>
  </tr>
  @endforeach
</table>
