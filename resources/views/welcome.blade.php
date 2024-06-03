<x-article>
    <x-slot name="image">/img/background2.png</x-slot>
    <x-slot name="title">Welcome to Starfleet home.</x-slot>
    <x-slot name="subtitle">This is the home page</x-slot>
    <div class="columns">

        <div class="column is-8-desktop is-12-tablet">
            <article class="content">
                <div class="card has-background-dark has-text-white">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-128x128">
                                    <img class="is-rounded" src="/img/picard.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4 has-text-white"> Captain Jean-Luc Picard ("The First Duty")</p>
                                <div class="content is-italic has-text-light">
                                    "The first duty of every Starfleet officer is to the truth. Whether it's scientific
                                    truth, or historical truth, or personal truth. It is the guiding principle upon
                                    which Starfleet is based."
                                    <br>
                                    <time datetime="2016-1-1">Stardate 2368</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                    Starfleet was the deep space exploratory and defense service maintained by the United
                    Federation of Planets. Its principal functions included the advancement of Federation
                    knowledge about the galaxy and its inhabitants, the advancement of Federation science and
                    technology, the defense of the Federation, and the facilitation of Federation diplomacy.
                </p>
                <p>
                    As per its mandate of deep space exploration, its personnel were frequently brought into
                    contact with cultures and sentient species whose existences were unknown to the Federation.
                    Starfleet officers therefore acted as official representatives of the Federation in these
                    cases. Starfleet vessels were also frequently used to ferry ambassadors on diplomatic
                    missions. (TNG: "The Last Outpost", "Conspiracy"; VOY: "Innocence", "The Void"; TOS:
                    "Journey to Babel"; Star Trek)
                </p>
                <p>
                    Starfleet personnel undergo rigorous training in various fields including
                    interstellar navigation, xenobiology, and warp mechanics. This training prepares them
                    for the challenges they may face during their exploratory missions. Additionally,
                    Starfleet promotes a culture of diversity and cooperation among its members,
                    fostering an environment where individuals from different species and backgrounds
                    work together towards common goals.
                </p>
                <p>
                    The exploration missions conducted by Starfleet often lead to groundbreaking
                    discoveries about the universe. From encountering new civilizations to unraveling
                    the mysteries of distant celestial phenomena, Starfleet's exploration efforts
                    push the boundaries of knowledge and pave the way for further scientific advancements
                    within the Federation and beyond.
                </p>
                <p>
                    <strong>Notable Starfleet Captains:</strong>
                <ul>
                    <li><i>Captain Jean-Luc Picard</i> - Commanding officer of the USS Enterprise-D</li>
                    <li><i>Captain Kathryn Janeway</i> - Commanding officer of the USS Voyager</li>
                    <li><i>Captain James T. Kirk</i> - Commanding officer of the USS Enterprise</li>
                </ul>
                </p>
            </article>
        </div>

        <div class="column is-4-desktop is-12-tablet">
            <p class="title is-4 has-text-white-bis">Latest news</p>

            <div class="columns is-multiline">

                @foreach($latestArticles as $article)
                    <div class="column is-12">
                        <div class="card has-background-grey-darker has-text-white">

                            <div class="card-image">
                                <img src="{{ $article->img_url }}" alt="Article picture">
                            </div>

                            <div class="card-content">
                                <div class="content">

                                    <a class="title is-4 has-text-white" href="/articles/{{$article->id}}">{{$article->title}}</a>

                                    <p>{{$article->excerpt}}</p>
                                </div>
                                <div class="has-text-centered">
                                    <a href="/articles/{{$article->id}}" class="button is-primary">Read more...</a>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item"><small>Published: {{ $article->published_at->diffForHumans() }}</small></p>
                            </footer>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-article>
