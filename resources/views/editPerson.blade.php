@extends('persons.layout')
@section('content')
    <div class="row">
        <div>
                <div class="pull-left">
                    <h2>Edit User</h2>
                </div>
                <div class="pull-right">
                    <a href="{{route('persons.index')}}">Back</a>
                </div>
        </div>
    </div>
    @if($errors->any())
        <div class="">
            <strong>Whoops!</strong>There were problems with your inputs. <br><br>
            <ul>
                @foreach ($errors ->all() as $error)
                        <li>{{error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('persons.update', $person->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}}

        <div class="row">
            <div>
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $person->name }}">
                    </div>
            </div>
            <div>
                <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" value="{{ $person->email }}">
                    </div>
            </div>
            <div>
                <div class="form-group">
                        <strong>Phone:</strong>
                        <input type="text" name="phone" value="{{ $person->phone }}">
                    </div>
            </div>

            <div>
                <button type="submit" class="">Submit</button>
            </div>
        </div>
    </form>

@endsection
