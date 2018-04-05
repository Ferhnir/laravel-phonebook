@extends ('layout')
@section('content')
<main role="main" class="container">
        <div class="row">
            <div class="col-8" style="float: none; margin: 0 auto;">
                    <h3 class="mt-5">Edit group:</h3>
                    <form method="post" action="{{action('GroupController@update', $id)}}" class="mt-5">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group row">
                            <label for="groupName" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="groupName" placeholder="New group name" name="name" value="{{$group->name}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 mt-5">Save</button>
                        @if(count($errors))
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger mt-5" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </form>
            </div>
        </div>
</main>
@endsection