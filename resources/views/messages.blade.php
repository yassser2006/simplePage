


    @extends('layouts.app')

@section('content')
    @include('inc.error')
    <h1>Messages</h1>
    @if(count($Msgs)>0)
        <ul class="list-group">
        @foreach($Msgs as $msg)

               <div class="well">

                       Name: {{$msg->name}}<br>
                       E-mail: {{$msg->email}}<br>
                       Message: {{$msg->msg}}

               </div>

        @endforeach
        </ul>
    @endif
@endsection

@section('sidebar')
    @parent
    this nice
@endsection
