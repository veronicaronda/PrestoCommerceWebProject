<x-layout title="{{ __('ui.presto') }}">
    <x-header title="{{ __('ui.presto') }}" />

    @if (session('message'))
        <div class="alert alert-success mt-2
        text-center">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded">
            {{ session('errorMessage') }}
        </div>
    @endif

    <div class="mt-5"> 
        <h1 class="text-center display-1 expletus fw-bold mb-3">{{ __('ui.latestArticles') }}</h1>
    </div>

    <div class="text-center">
        @auth
            <a class="btn btn-outline" href="{{ route('article.create') }}">
                <span class="me-2 fs-6"><i class="fa-solid fa-plus"></i></span>{{ __('ui.addAd') }}
            </a>
        @endauth
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            @foreach ($articles as $article)
                <div class="col-11 col-md-10 col-lg-6 mx-5">
                    <x-card :article="$article" />
                </div>
            @endforeach
        </div>
    </div>
  
</x-layout>
