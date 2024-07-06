<x-layout>
    <x-header2 title="{{ __('ui.editProfile') }}" />

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="d-flex align-items-center">
                            <label class="me-5">{{ __('ui.selectImg') }}:</label>
                            <label for="profile_photo" class="btnSubmit ms-auto d-flex justify-content-start shadow-none mt-2">{{ __('ui.selectFile') }}</label>
                        </div>
                        <input id="profile_photo" type="file"style="visibility:hidden;"
                            class="form-control @error('profile_photo') is-invalid @enderror" name="profile_photo">

                        @error('profile_photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">{{ __('ui.name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name', auth()->user()->name) }}" required>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">{{ __('ui.emailAddress') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email', auth()->user()->email) }}" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    

                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btnSubmit">
                            {{ __('ui.editProfile') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>
