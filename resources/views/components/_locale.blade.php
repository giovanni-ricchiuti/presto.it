<form action="{{ route('set_language_locale', $lang) }}" method="POST" class="form-flag">
    @csrf
    <button class="btn rounded-circle btn-flag py-1 px-1" type="submit">
        <span class="fi fi-{{ $nation }}"></span>
    </button>
</form>