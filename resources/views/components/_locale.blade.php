<form class="d-inline" method="POST" action="{{ route('setLocale',$lang) }}">
    @csrf
    <button type="submit" class="border-0 bg-transparent">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="32" height="32" alt="">
    </button>

</form>


