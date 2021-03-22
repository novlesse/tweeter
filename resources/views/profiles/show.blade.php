@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            src=""
            alt=""
            class="mb-2"
        />

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p>Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border-gray-300 p-2 text-black text-xs">Edit Profile</a>
                <a href="" class="bg-blue-400 rounded-full shadow p-2 text-white text-xs">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa impedit adipisci harum accusamus ea aut neque tempore atque, placeat tenetur at possimus eos nihil rem dolorum dolor iste esse non?
        </p>

        <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 138px"
        />
    </header>

    @include('partials._timeline', [
        'tweets' => $user->tweets
    ])
@endsection