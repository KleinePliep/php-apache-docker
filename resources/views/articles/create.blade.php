<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">Create a new article</h1>
            </div>
        </div>
        <div class="box mb-6">
            <div class="content">
                <form action="#">
                    <div class="field">
                        <label for="title" class="label">Title</label>
                        <div class="control">
                            <input type="text" name="title" class="input" autofocus>
                        </div>
                    </div>
                    <div class="field">
                        <label for="excerpt" class="label">Excerpt</label>
                        <div class="control">
                            <input type="text" name="excerpt" class="input" autofocus>
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
                            <a type="button" href="#" class="button is-light">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
