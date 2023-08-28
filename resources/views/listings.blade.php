@extends('layout')

@section('content')

@include('partials._hero')
@include('partials._search')

    @unless (empty($listings))
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @foreach ($listings as $listing)
                <!-- Item 1 -->
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>
    @else
        <p>No Listing</p>
    @endunless

@endsection
