<li class="list-group-item">                
    <div class="d-flex">
        <div class="mr-auto p-2">
            <a class="nav-link" href="{{ url('groups/'.$group->id) }}">{{ $group->name }}</a>
        </div>
        <div class="p-2">
            <a href="{{action('GroupController@edit', $group->id)}}" class="btn btn-warning">Edit</a></td>
        </div>
        <div class="p-2">
            <form action="{{action('GroupController@destroy', $group->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
      </div>
</li>