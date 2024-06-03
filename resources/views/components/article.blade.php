<x-main>
    {{-- Title section --}}
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body"
        @if(isset($image))
            style="
            background: url('{{ $image }}') no-repeat center center;
            background-size: cover;"
        @endif>
            <div class="container">
                @if(isset($title))
                    <p class="title">{{ $title }}</p>
                @endif
                @if(isset($subtitle))
                    <p class="subtitle">{{ $subtitle }}</p>
                @endif
            </div>
        </div>
    </section>

    {{-- Main content --}}
    <section class="section">
        <div class="container">
            {{ $slot}}
        </div>
    </section>
</x-main>
