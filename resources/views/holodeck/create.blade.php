<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">Create a new holodeck</h1>
            </div>
        </div>
        <div class="box mb-6">
            <div class="content">
                <form action="{{ route('holodeck.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label for="type" class="label">Type</label>
                        <div class="control">
                            <input type="text" name="type" class="input" autofocus>
                        </div>
                    </div>
                    <div class="field">
                        <label for="serial_no" class="label">serial number</label>
                        <div class="control">
                            <input type="text" name="serial_no" class="input" autofocus>
                        </div>
                    </div>
                    <div class="field">
                        <label for="sw_version" class="label">version</label>
                        <div class="control">
                            <input type="text" name="sw_version" class="input" autofocus>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        {{-- Here are the form buttons: save, reset and cancel --}}
                        <div class="control">
                            <button type="submit" class="button is-primary">Save</button>
                        </div>
                        <div class="control">
                            <button type="reset" class="button is-warning">Reset</button>
                        </div>
                        <div class="control">
                            <a href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
