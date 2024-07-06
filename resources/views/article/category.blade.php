<x-layout title="Annunci in: {{$category->name}}">
    
    <div class="container-fluid {{$bg ?? "bgColorFour"}} p-3 rounded ">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center ">
                <h1 class="text-center display-1 titolo expletus fw-bold mb-5 "> {{$title ?? "Annunci in: '$category->name'"}}</h1>
            </div>
             {{-- <div class="col-11 d-flex colHeight align-items-center bgColorThree shadowcard align-self-end mb-2 overflow-auto custom-scrollbar rounded" id="scrollable-div">
            @foreach ($categories as $category)
                <button class="btnSubmit mt-0 me-1 shadowcard">
                    <a class="text-decoration-none ColorThree" href="{{route('article.category', $category->id)}}">{{ __('ui.' . $category->name) }}</a>
                </button>
            @endforeach
        </div> --}}
        </div>
    </div>
       

    <div class="container mt-5">
        <div class="row justify-content-center">
    @foreach ($articles as $article)
    <div class="col-8">
    <x-card :article="$article" />
    </div>
    @endforeach
</div>
</div>

</x-layout>