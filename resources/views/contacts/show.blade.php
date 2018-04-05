@extends ('layout')
@section('content')
<main role="main" class="container">
    <div class="card mt-5">
            <div class="card-header">
                <h3>Contact details:</h3>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <B>Name:</B> {{ $contact->name }}</br>
                    <B>Phone number:</B> {{ $contact->phone }}</br>
                    <B>Assigned to group:</B> {{ $group }}</br>
                    <B>Created at:</B> {{ $contact->created_at }}
                </li>
            </ul>
            <div class="card-footer">
                <a class="nav-link" href="{{ url('contacts') }}">Back to contacts</a>
            </div>
        </div>
</main>
@endsection