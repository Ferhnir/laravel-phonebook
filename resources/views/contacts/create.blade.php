@extends ('layout')
@section('content')
<main role="main" class="container">
        <div class="row">
            <div class="col-8" style="float: none; margin: 0 auto;">
                    <h3 class="mt-5">Create new contact:</h3>
                    <form method="POST" action="{{url('contacts')}}" enctype="multipart/form-data" class="mt-5">
                        @csrf
                        <div class="form-group row">
                            <label for="groupName" class="col-sm-3 col-form-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="groupName" placeholder="New group name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="groupName" class="col-sm-3 col-form-label">Phone number:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="groupName" placeholder="phone number" name="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="groupName" class="col-sm-3 col-form-label">Select group:</label>
                            <div class="col-sm-9">
                                <select name="group_id" class="form-control">
                                    @foreach($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->name }}</optin>
                                    @endforeach
                                </select>
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