@extends('layouts.app')




@section('content')
    @include('inc.error')
    <form action="{{route('msg')}}" method="post" role="form">
        {{csrf_field()}}
        <legend>Contact</legend>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Enter Name...">
        </div>


        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Enter E-Mail...">
        </div>
        <div  class="form-group">
            <label for="msg">Message</label>
            <textarea  style="height:250px" class="form-control"  name="msg" id="msg">Message</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Comment</button>

    </form>
@endsection