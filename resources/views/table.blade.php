{{-- @extends('persons.layout') --}}
@section('content')
        <div class= "row">
            <div class="">
                <div class="pull-left">
                    <h2>Table Demo</h2>
                </div>

                <div class="pull-right">
                    <a href="/create">Create New Person</a>
                </div>
            </div>

        </div>
    @if ($message = Session::get('success'))
            <div class="">
                <p>{{$message}}</p>
            </div>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach ($person as $persons)
            <tr>
                <td>{{++$i}}</td>
                <td>{{ $person->name}}</td>
                <td>{{$person->email}}</td>
                <td>{{$person->phone}}</td>
                <td>
                    <form action="{{route('persons.destroy',$person->id)}}" method= "POST">

                        <a href="{{route('persons.show',$person->id)}}">Show</a>
                        <a href="{{route('persons.edit', $person->id)}}">edit</a>



                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>
@endsection
