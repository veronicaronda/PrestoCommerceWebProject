<div class="container-fluid bgHomeImage vh-50" style="background-image: url('/img/cart_home.jpg')">
    <div class="row h-100 justify-content-center">
        <div class="col-12 d-flex justify-content-center">
            <h1 class="text-center display-1 titolo expletus fw-bold">{{$title ?? ''}}</h1>
        </div>
        <div class="col-11 d-flex colHeight align-items-center bgColorThree shadowcard align-self-end mb-2 overflow-auto custom-scrollbar rounded" id="scrollable-div">
            @foreach ($categories as $category)
                <button class="btnSubmit mt-0 me-1 shadowcard">
                    <a class="text-decoration-none ColorThree" href="{{route('article.category', $category->id)}}">{{ __('ui.' . $category->name) }}</a>
                </button>
            @endforeach
        </div>
    </div>
</div>
