<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Quote</h2>
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
            <th>Quote</th>
            <th>Author</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($quotescrap as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->quote }}</td>
            <td>{{ $s->author }}</td>
            <td>
                <form action="{{ route('quotescrap.destroy',$s->id) }}" method="POST">
   
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
