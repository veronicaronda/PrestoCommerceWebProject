<x-layout>
    <x-header2 title="{{ __('ui.signUp') }}" />
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="m-5" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <div class="d-flex align-items-center ">
                            <label class="">{{ __('ui.selectImg') }}:</label>
                            <label for="profile_photo"
                                class="btnSubmit d-flex justify-content-start shadow-none mt-2 ms-auto">{{ __('ui.addProfilePhoto') }}</label>
                        </div>
                        <input id="profile_photo" type="file" class="form-control" name="profile_photo"
                            style="visibility:hidden;">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.name') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    {{-- <div class="mb-3">
                      <label class="form-label">{{ __('ui.surname') }}</label>
                      <input type="text" class="form-control" name="surname">
                  </div> --}}

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

                    <div class="mb-3">
                        <label class="form-label">{{ __('ui.confirmPassword') }}</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror



                    <div class="mb-3 text-center">
                        <button type="submit" class=" btnSubmit">{{ __('ui.signUp') }}</button>
                    </div>
                    <div class="text-center mt-5">
                        <p>{{ __('ui.alreadyRegistered') }} <a href="{{ route('login') }}">{{ __('ui.login') }}</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
