<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Starfleet</title>

        {{-- Compiled assets --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        {{-- Navigation bar --}}
        <nav class="navbar is-primary has-text-white" >
            <div class="container">
                <div class="navbar-brand">
                    <a href="/" class="navbar-item">
                        <strong><i class="far fa-hand-spock"></i> Starfleet</strong>
                    </a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-start">
                        <a href="{{ route('home') }}"
                           class="navbar-item {{ request()->route()->getName() === 'home' ? "is-active" : "" }}">
                            Home
                        </a>
                        <a href="{{ route('articles.index') }}"
                           class="navbar-item {{ request()->route()->getName() === 'articles.index' ? "is-active" : "" }}">
                            News
                        </a>
                        <a href="{{ route('ships.index') }}"
                           class="navbar-item {{ request()->route()->getName() === 'ships.index' ? "is-active" : "" }}">
                            The Fleet
                        </a>
                        <a href="{{ route('holodeck.index') }}"
                           class="navbar-item {{ request()->route()->getName() === 'holodecks.index' ? "is-active" : "" }}">
                            The Holodeck
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Main content --}}
        <main class="has-text-white">
            {{ $slot }}
        </main>

        {{-- Footer --}}
        <footer class="footer has-background-primary">
            <div class="container">
                <div class="columns is-multiline">

                    <div class="column has-text-centered">
                        <div>
                            <a href="/" class="link">Home</a>
                        </div>
                    </div>

                    <div class="column has-text-centered">
                        <div>
                            <a href="https://opensource.org/licenses/MIT" class="link">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                            </a>
                        </div>
                    </div>

                </div>

                <div class="content is-small has-text-centered">
                    <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
                    <p>Special thanks to <a href="https://memory-alpha.fandom.com/wiki/Portal:Main">Memory Alpha</a> for Starfleet content and images.</p>
                </div>
            </div>
        </footer>

    </body>
</html>
