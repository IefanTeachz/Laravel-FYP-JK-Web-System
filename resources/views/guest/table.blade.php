<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Guest</h2>
                <h9>The list no of guest invited and whom. </h9><br><br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('guest.create') }}"> Add New guest</a>
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
            <th>guest Name</th>
            <th>No of guest</th>
      
            <th width="280px">Action</th>
        </tr>
        @foreach ($guest as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->number }}</td>
       
            <td>
                <form action="{{ route('guest.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('guest.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('guest.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        
        @endforeach

        
    </table>
    <section>
    <div class="pull-left">
            <h9>Total number of guest: {{$tnumber}}</h9>
            </div>
</section>
