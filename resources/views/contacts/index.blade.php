@extends ('layout')
@section ('content')
<main role="main" class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="float-left">Contacts:</h3>
            <a class="btn btn-primary float-right" href="{{url('contacts/create')}}">Add new</a>
        </div>
        <ul class="list-group list-group-flush">          
            @foreach($contacts as $contact)
                @include('contacts.contact')
            @endforeach
        </ul>
        @if ($message = Session::get('success'))
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                            </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</main>
@endsection