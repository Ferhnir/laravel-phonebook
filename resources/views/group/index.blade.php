@extends ('layout')
@section ('content')
<main role="main" class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="float-left">Groups:</h3>
            <a class="btn btn-primary float-right" href="{{url('groups/create')}}">Add new</a>
        </div>
        <ul class="list-group list-group-flush">          
            @foreach($groups as $group)
                @include('group.group')
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