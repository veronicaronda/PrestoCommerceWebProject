<div class=" mb-4 bgColorThree   rounded shadowcard position-relative ">
    <div class="row g-0">
        <div class=" d-flex justify-content-center col-12 col-lg-5 p-3 position-relative">
            <a href="{{ route('article.show', compact('article')) }}"> <img
                    class=" w-100 h-100 border rounded  borderimg shadowimg "
                    src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(1200, 1200) : 'https://picsum.photos/1200/1200' }}"
                    alt="Immagine dell'articolo {{ $article->title }}">
                <i class="fa-solid fa-eye fs-2 position-absolute ms-4 start-0 mt-2 ColorFour"></i>
            </a>
        </div>

        <div class="col-md-6  text-start d-flex justify-content-center p-3 pb-0 ">
            <div class="card-body d-flex flex-column">
                <a href="{{ route('article.show', compact('article')) }}" class="text-decoration-none">
                    <h2 class="card-title  expletus mb-3 ColorTwo fw-bold">{{ $article->title }}</h2>
                </a>

                <h4 class="card-title mb-3"><a class=" anchorCard ColorFour  fw-bold"
                        href="{{ route('article.category', $article->category) }}">#{{ __('ui.' . $article->category->name) }}</a>
                </h4>
                <h4 class="card-title ColorFour mb-3">{{ __('ui.price') }}: {{ $article->price }} €</h4>


                <p class="d-flex position-relative position-lg-absolute bottom-0 end-0 me-4 fst-italic ColorTwo">
                    {{ __('ui.publishedby') }}:
                    {{ $article->user->name }}, {{ $article->created_at->format('d M Y') }}</p>

                @auth
                    <livewire:favorite-button :article="$article" />

                @endauth

            </div>
        </div>
    </div>
</div>
