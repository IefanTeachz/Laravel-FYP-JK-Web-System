<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of state</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('state.create') }}"> Add New state</a>
            </div>
        </div>
</div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>State Name</th>
      
            <th width="280px">Action</th>
        </tr>
        @foreach ($state as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->state }}</td>
       
            <td>
                <form action="{{ route('state.destroy',$s->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('state.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

