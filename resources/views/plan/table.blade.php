<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of plan</h2>
                <h9>The list of plan need to be done. </h9><br><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('plan.create') }}"> Add New plan</a>
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
            <th>ID</th>
            <th>Plan Name</th>
            <th>Start Date</th>
            <th>End Date</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($plan as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->title }}</td>
            <td>{{ $s->start }}</td>
            <td>{{ $s->end }}</td>
            <td>
                <form action="{{ route('plan.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('plan.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('plan.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
