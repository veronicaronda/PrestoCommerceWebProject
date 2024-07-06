<x-layout>
    <x-header2 title="{{ __('ui.login') }}" />

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="m-5" method="post" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.emailAddress') }}</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.password') }}</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary btnSubmit">{{ __('ui.login') }}</button>
                    </div>
                    <div class="text-center mt-5">
                        <p>{{ __('ui.alreadyRegistered') }} <a href="{{ route('register') }}">{{ __('ui.signUp') }}</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
