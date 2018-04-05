@extends ('layout')
@section('content')
<main role="main" class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Group details:</h3>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                Name: {{ $group->name }}</br>
                Created at: {{ $group->created_at }}
            </li>
        </ul>
        <div class="card-footer">
            <a class="nav-link" href="{{ url('groups') }}">Back to groups</a>
        </div>
    </div>
</main>
@endsection