<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">The Starfleet Fleet</h1>
            </div>
            <div class="column">
                <a href="#" class="button is-primary is-pulled-right">
                    Add a new ship
                </a>
            </div>
        </div>

        <div class="box mb-6">
            <div class="content">
                <table class="table is-striped">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Crew count</th>
                    <th>State</th>
                    </thead>
                    <tbody>
                    @foreach($ships as $ship)
                        <tr>
                            <td>{{ $ship->id }}</td>
                            <td>
                                <a href="#">{{ $ship->name }}</a>
                            </td>
                            <td>{{ $ship->class }}</td>
                            <td>{{ $ship->crew_count }}</td>
                            <td>
                                @if($ship->active)
                                    <span class="tag is-success">Active</span>
                                @else
                                    <span class="tag is-light">Retired</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-main>
