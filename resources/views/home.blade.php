@extends('layouts.padrao')

@section('content')
 <!-- <meta name="csrf-token" content="{{ csrf_token() }}">  -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="user-wrapper">
                <ul class="users">
                    @foreach($users as $user)
                    <div class="unip2">
				
			
                    <li class="user" id="{{ $user->id }}">
                        @if($user->unread)
                            <span class="pending">{{ $user->unread }}</span>
                        @endif 
                        <div class="media">

                            <div class="media-left">
                                <img src="{{$user->avatar}}" alt="" class="media-object">
                            </div>

                            <div class="media-body">
                                <p class="name">{{$user->name}}</p>
                               <!--  <p class="name">{{$user->id}}</p> -->
                                <p class="email">{{$user->email}}</p> 
                            </div>

                        </div>
                    </li>
                    </div>
                    @endforeach


                </ul>
            </div>
        </div>


        <div class="col-md-8" id="messages">
            
        </div>

    </div>
</div>
@endsection