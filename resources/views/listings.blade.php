<h1>{{$heading}}</h1>

@unless (empty($listings))
    @foreach($listings as $listing)
        <a href="/listings/{{ $listing['id'] }}" style="border: 1px solid black">
            <h2>{{$listing['title']}}</h2>
            <p>{{$listing['description']}}</p>
        </a>
    @endforeach

@else
    <p>No Listing</p>  

@endunless
