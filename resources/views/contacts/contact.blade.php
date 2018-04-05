<li class="list-group-item">                
    <div class="d-flex">
        <div class="mr-auto p-2">
            <a class="nav-link" href="{{ url('contacts/'.$contact->id) }}">{{ $contact->name }}</a>
        </div>
        <div class="p-2">
            <a href="{{action('ContactController@edit', $contact->id)}}" class="btn btn-warning">Edit</a></td>
        </div>
        <div class="p-2">
            <form action="{{action('ContactController@destroy', $contact->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
      </div>
</li>