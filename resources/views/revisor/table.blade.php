<x-layout>
    <x-header2 title="{{ __('ui.dashboardRevisor') }}" />

    @if ($articles_to_check->isEmpty())
        <div class="row justify-content-center align-items-center height-custom text-center">
            <div class="col-12">
                <h1 class="fst-italic display-5 mt-5">
                    {{ __('ui.noArticlesToReview') }}
                </h1>
                <a href="{{ route('home') }}" class="my-5 btn btnSubmit">{{ __('ui.backToHomepage') }}</a>
                @if ($latest_article)
                    <form class="d-flex justify-content-center"
                        action="{{ route('undo', ['article' => $latest_article]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btnSubmit2 shadowcard py-2 px-5 fw-bold mb-4 mx-auto">
                            {{ __('ui.cancelReview') }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
    @else
        <div class="row justify-content-center mt-5">
            @if ($latest_article)
                <form class="d-flex justify-content-center"
                    action="{{ route('undo', ['article' => $latest_article]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btnSubmit2 shadowcard py-2 px-5 fw-bold mb-4 mx-auto">
                        {{ __('ui.cancelReview') }}
                    </button>
                </form>
            @endif
            <div class="col-10 overflow-auto">
                <table class="table table-striped d-block d-md-table rounded-table col-12 col-md-10 border shadow">
                    <thead>
                        <tr>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">Id</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">{{ __('ui.title') }}</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">{{ __('ui.price') }}</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">{{ __('ui.category') }}</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">{{ __('ui.user') }}</th>
                            <th class="expletus fw-bold fs-4 text-center" scope="col">{{ __('ui.date') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="rounded-table">
                        @foreach ($articles_to_check as $article)
                            <tr>
                                <th class="fs-6 varela text-center align-middle" scope="row">{{ $article->id }}</th>
                                <td class="fs-6 varela text-center align-middle">{{ $article->title }}</td>
                                <td class="fs-6 varela text-center align-middle">{{ $article->price }} €</td>
                                <td class="fs-6 varela text-center align-middle"> {{ __('ui.' . $article->category->name) }}</td>
                                <td class="fs-6 varela text-center align-middle">{{ Auth::user()->name }}</td>
                                <td class="fs-6 varela text-center align-middle">{{ $article->created_at->format('d M Y') }}</td>
                                <td class="fs-6 varela text-center align-middle">
                                    <a href="{{ route('revisor.show', compact('article')) }}">
                                        <button class="btnSubmit m-0">{{ __('ui.review') }}</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</x-layout>
