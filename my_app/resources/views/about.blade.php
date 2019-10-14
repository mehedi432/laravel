<h3>About Page</h3>
<br/>
<ul>
    @foreach ( $tasks as $task )
        <li>{{ $task->body }}</li>
    @endforeach
</ul>