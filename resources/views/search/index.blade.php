@extends ('layout')
@section ('content')
<main role="main" class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="float-left">Search results:</h3>
        </div>
        <div class="card-body">
            You was looking for: {{ $search }}
        </div>
        <div class="card-body">
            <h5>We found {{count($contacts) }} matching names in contacts</h5>
            <ul class="list-group"> 
            @foreach($contacts as $contact)
                <li class="list-group-item">
                    <a class="nav-link" href="{{ url('contacts/'.$contact->id) }}">{{ $contact->name }}</a>    
                </li>
            @endforeach
            </ul>
        </div>
        <div class="card-body">
            <h5>We found {{count($groups) }} matching names in groups</h5>
            @foreach($groups as $group)
                <li class="list-group-item">
                    <a class="nav-link" href="{{ url('groups/'.$group->id) }}">{{ $group->name }}</a>    
                </li>
            @endforeach
        </div>   
    </div>
</main>
@endsection