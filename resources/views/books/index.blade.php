@extends('books.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Novus Test</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
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
            <th>Name</th>
            <th>Row</th>
            <th>Cabinet</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->book_name }}</td>
            <td>{{ $book->row_id }}</td>
            <td>{{ $book->cabinet_id }}</td>
        </tr>
        @endforeach
    </table>
  
    {!! $books->links() !!}
      
@endsection