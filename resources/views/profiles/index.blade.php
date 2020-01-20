@extends('layouts.app')

@section('content')
<div class="container-sm">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="img-fluid rounded-circle"
                style="min-width:50px; min-height:50px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">

                    <div class="h4">{{$user->userName}}</div>
                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update', $user->profile)
                <a href="/p/create" class="btn btn-success">New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit" class="">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{$postCount}}</strong> posts</div>
                <div class="pr-5"><strong>{{$followersCount}}</strong> followers</div>
                <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div class="row">
                <div class="col-4 col-8">{{$user->profile->description}}</div>
            </div>
            <div><a href="#" class="text-dark">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-3">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img class="img-fluid" src="/storage/{{$post->image}}">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
