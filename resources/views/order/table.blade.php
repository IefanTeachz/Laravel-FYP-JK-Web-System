<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Order</h2>
            </div>
            <div class="pull-right">
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Post Code</th>
            <th>Phone Number </th>
            <th>Notes</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($order as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->first_name }}</td>
            <td>{{ $s->last_name }}</td>
            <td>{{ $s->address }}</td>
            <td>{{ $s->city }}</td>
            <td>{{ $s->country }}</td>
            <td>{{ $s->post_code }}</td>
            <td>{{ $s->phone_number }}</td>
            <td>{{ $s->notes }}</td>
            
            <td>
                <form action="{{ route('order.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('order.show',$s->id) }}">Show</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
