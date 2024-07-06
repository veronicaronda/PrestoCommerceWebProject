<x-layout>
  <x-header2 title="{{ __('ui.workWithUs') }}" />

  <div class="container py-5">
      <div class="row justify-content-center">
          <div class="col-12 col-md-8">
              <form class="m-5" method="POST" action="{{ route('become.revisor' )}}">
                  @csrf

                  <div class="mb-3">
                      <label class="form-label">{{ __('ui.name') }}</label>
                      <input type="text" class="form-control" name="name">
                      @error('name')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label class="form-label">{{ __('ui.emailAddress') }}</label>
                      <input type="email" class="form-control" name="email">
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="mb-3">
                      <label class="form-label">{{ __('ui.requestText') }}</label>
                      <textarea class="form-control" name="body" id="body" cols="20" rows="10"></textarea>
                      @error('body')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="mb-3 text-center">
                      <button type="submit" class="btn btn-primary btnSubmit">{{ __('ui.sendRequest') }}</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</x-layout>
