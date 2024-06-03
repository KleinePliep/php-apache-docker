<x-main>
    <div id="showTab">
        <h1>ID: {{ $holo->id }}</h1>
        <p>Type: {{ $holo->type }}</p>
        <p>Serial Number: {{ $holo->serial_no }}</p>
        <p>Version: {{ $holo->sw_version }}</p>
    </div>

    <style>
        #showTab {
            text-align: center;
        }
        h1 {
            font-size: 36px; /* Adjust font size as needed */
            margin-bottom: 20px; /* Add some space below the title */
        }
        p {
            font-size: 18px; /* Adjust font size as needed */
            margin-bottom: 10px; /* Add some space below each paragraph */
        }
    </style>
</x-main>
