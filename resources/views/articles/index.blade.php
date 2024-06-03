<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">All the news articles</h1>
            </div>
            <div class="column">
                <a href="{{ route('articles.create') }}" class="button is-primary is-pulled-right">
                    Add news
                </a>
            </div>
        </div>

        @foreach($articles as $article)
            <article class="media">
                <figure class="media-left">
                    <p class="image is-128x128">
                    <img src="{{ $article->img_url }}" alt="News related image">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <a href="{{ route('articles.show', $article) }}">
                                <strong>{{ $article->title }}</strong>
                            </a>
                            <small>{{ $article->published_at->diffForHumans() }}</small>
                            <br>
                            {{ $article->excerpt }}
                        </p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
    <div style="visibility: hidden">Starfleet</div>
</x-main>
