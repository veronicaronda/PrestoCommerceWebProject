<x-layout>
    <x-header2 title="{{ __('ui.favorites') }}" />

    <div class="container my-5">

        @if ($favorites->isEmpty())
            <p>{{ __('ui.noFavorites') }}</p>
        @else
            @foreach ($favorites as $article)
                <x-card :article="$article" />
            @endforeach
        @endif
    </div>

</x-layout>
