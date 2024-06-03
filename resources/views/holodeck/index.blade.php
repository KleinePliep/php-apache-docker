<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">The Holodeck</h1>
            </div>
            <div class="column">
                <a href="{{ route('holodeck.create') }}" class="button is-primary is-pulled-right">
                    Add Holodeck
                </a>
            </div>
        </div>

        @forelse($holodeck as $holo)
            <article class="media">
                <div class="content">
                    <a href="{{ route('holodeck.edit', ['holodeck' => $holo->id]) }}" class="button is-warning is-pulled-right">
                        Edit
                    </a>
                    <p>
                        <a href="{{ route('holodeck.show', ['holodeck' => $holo->id]) }}">
                            <strong>{{ $holo->type }}</strong>
                        </a>
                        <br>
                        {{ $holo->serial_no }}
                    </p>
                </div>
            </article>
        @empty
            <div class="notification is-info">
                <p>No holodecks found.</p>
            </div>
        @endforelse

        <div class="mt-6 mb-6">
            {{ $holodeck->links() }}
        </div>
    </div>
</x-main>
