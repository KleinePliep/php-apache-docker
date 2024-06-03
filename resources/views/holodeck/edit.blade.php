<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <h1 class="title is-2 has-text-white-bis">Edit Holodeck</h1>
            </div>
        </div>

        <button type="button" class="button is-danger is-pulled-right deleteButton" onclick="confirmDelete('{{ $holodeck->id }}')">Delete</button>

        <form id="delete-form-{{ $holodeck->id }}" method="post" action="{{ route('holodeck.destroy', $holodeck->id) }}" style="display: none;">
            @csrf
            @method('DELETE')
        </form>

        <div id="confirmationModal" class="modal" style="display: none;">
            <div class="modal-content centered beige-background">
                <p>Are you sure you want to delete this post?</p>
                <div>
                    <button onclick="deletePost()">Yes</button>
                    <button onclick="closeModal()">No</button>
                </div>
            </div>
        </div>

        <style>
            .centered {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .beige-background {
                background-color: #000000;
                padding: 20px;
                border-radius: 10px;
            }
        </style>


        <input type="hidden" id="postId" name="postId">

        <br>

        <script>
            function confirmDelete(postId) {
                var modal = document.getElementById("confirmationModal");
                modal.style.display = "block";
                document.getElementById("postId").value = postId;
            }

            function closeModal() {
                var modal = document.getElementById("confirmationModal");
                modal.style.display = "none";
            }

            function deletePost() {
                var postId = document.getElementById("postId").value;
                console.log("Post ID:", postId);

                var form = document.getElementById('delete-form-' + postId);
                console.log("Form:", form);

                form.submit();
            }
        </script>

        <br>

        <div class="box mb-6">
            <div class="content">
                <form action="{{ route('holodeck.update', $holodeck->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label for="type" class="label">Type</label>
                        <div class="control">
                            <input type="text" name="type" placeholder="Enter the type..."
                                   class="input @error('type') is-danger @enderror"
                                   value="{{ old('type', $holodeck->type) }}" autofocus>
                        </div>
                    </div>
                    <div class="field">
                        <label for="serial_no" class="label">Serial Number</label>
                        <div class="control">
                            <input type="text" name="serial_no" placeholder="Enter the serial number..."
                                   value="{{ old('serial_no', $holodeck->serial_no) }}" autocomplete="name" autofocus
                                   class="input @error('type') is-danger @enderror">
                        </div>
                    </div>
                    <div class="field">
                        <label for="sw_version" class="label">Version</label>
                        <div class="control">
                            <input type="text" name="sw_version" placeholder="Enter the version..."
                                   class="input @error('type') is-danger @enderror"
                                   value="{{ old('sw_version', $holodeck->sw_version) }}" autofocus>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        {{-- Here are the form buttons: save, reset, and cancel --}}
                        <div class="control">
                            <button type="submit" class="button is-primary">Save</button>
                        </div>
                        <div class="control">
                            <button type="reset" class="button is-warning">Reset</button>
                        </div>
                        <div class="control">
                            <a href="{{ route('holodeck.show', ['holodeck' => $holodeck->id]) }}" class="button is-light">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
