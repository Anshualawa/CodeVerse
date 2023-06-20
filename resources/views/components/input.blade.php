<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="" class="form-control"
        value="{{ old($name) }}">
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>
