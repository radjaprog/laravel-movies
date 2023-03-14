<aside>
    <h5 class="ml-3">Latest Movies added</h5>
    <nav>
        <ul class="d-flex flex-column list-group">
            @foreach ($latestMovies as $movie)
                <li class="list-group-item">
                    <a href="{{ route('singleMovie', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
