<x-article>
    <x-slot name="image">{{ $article->img_url }}</x-slot>
    <x-slot name="title">{{ $article->title }}</x-slot>
    <x-slot name="subtitle">{{ $article->excerpt }}</x-slot>

    <article class="content">
        {!! $article->body !!}
    </article>

</x-article>
