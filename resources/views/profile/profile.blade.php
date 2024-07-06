<x-layout>

    <x-header2 title="{{ __('ui.myProfile') }}" />
    <div class="container my-5">
        <div class="row justify-content-center my-5">
            <div class="col-10 col-md-5 d-flex justify-content-center bgColorThree rounded">
                <img src="{{ Auth::user()->profile_photo_url }}" alt=""
                    class="rounded-circle border shadow my-5 img-fluid h w">
            </div>
            <div class="col-10 col-md-5 text-center d-flex flex-column justify-content-center  my-5 ">
                <label>{{ __('ui.name') }}</label>
                <h1>{{ Auth::user()->name }}</h1>
                <label>{{ __('ui.emailAddress') }}</label>
                <h2>{{ Auth::user()->email }}</h2>
                <div> <a href="{{ route('profile.edit') }}" class="btn btnSubmit">{{ __('ui.editProfile') }}</a></div>
            </div>


        </div>
    </div>

</x-layout>
