@extends('layout.body')

@section('title','contact')
@section('content')
<div>
    <div class="container mt-5">
    <h2 class="mb-4 text-center">Student List</h2>
  <form action="{{ url('getdata') }}" method="get">
    <div class="search mb-3">
        <input type="text" name="search" class="form-control d-inline-block w-auto" placeholder="Search...">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
<div class="add">
    <a href="{{url('addtable')}}"><button>add</button></a>

</div>


    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Branch</th>
                <th>Phone</th>
              
                <th>Action</th> 
                <th>image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->branch }}</td>
                <td>{{ $item->phone }}</td>
                <td><a href="{{url('updtable',$item->id)}}"><button>edit</button></a>
                    <a href="{{url('deletedata',$item->id)}}"><button>del</button></a>
                </td>
                <td>
                    
    @if($item->image)
        <img src="{{ asset('storage/' . $item->image) }}" alt="Uploaded Image" class="img-thumbnail" width="50  ">
    @endif
</td>


           
                </td>
               
            </tr>
            @endforeach

            @if ($items->isEmpty())
            <tr>
                <td colspan="7">No records found.</td>
            </tr>
            @endif
        </tbody>
    </table>
    <div class="pagiantiondiv">
    {{$items->links('pagination::bootstrap-5')}}
    </div>
</div>



</div>
@endsection()









