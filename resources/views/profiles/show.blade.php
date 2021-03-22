@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        {{-- <img
            src="/images/"
            alt="banner"
            class="mb-2"
        /> --}}
        
        <div class="bg-gradient-to-r from-blue-300 to-red-200 rounded-lg" style="height: 240px"></div>

        <div class="flex justify-between items-center my-4">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-gray-400">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="mb-4">
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs hover:bg-gray-100">Edit Profile</a>
                <a href="" class="bg-blue-400 rounded-full shadow py-2 px-4 text-white text-xs hover:bg-blue-300">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa impedit adipisci harum accusamus ea aut neque tempore atque, placeat tenetur at possimus eos nihil rem dolorum dolor iste esse non?
        </p>

        <img
            src="{{ $user->avatar }}"1
            alt=""
            class="rounded-full mr-2 absolute border border-gray-300"
            style="width: 150px; left: calc(50% - 75px); top: 43%"
        />
    </header>

    @include('partials._timeline', [
        'tweets' => $user->tweets
    ])
@endsection