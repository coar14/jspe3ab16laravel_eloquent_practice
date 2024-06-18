<div>
    <h1>
        Books of: {{ $author->name }}
    </h1>
    <hr>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
        </tr>
    @foreach( $books as $book )
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
        </tr>
    @endforeach
    </table>
</div>
