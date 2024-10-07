{{-- @extends('layout.persons') --}}
@section('content')
<div class="row">
    <div>
            <div class="pull-left">
                <h2>Add New User</h2>
            </div>
            <div class="pull-right">
                <a href="/show">Back</a>
            </div>
    </div>

</div>

<form action="" method="POST">
    {{ csrf_field()}}
    <div class="row">
        <div>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="" placeholder="Name">

                </div>
        </div>
        <div>
            <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="" placeholder="Email">

                </div>

        </div>
        <div>
            <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" name="phone" class="" placeholder="Phone">

                </div>


        </div>

        <div>
            <button type="submit" class="">Submit</button>
        </div>
    </div>
</form>


@endsection
