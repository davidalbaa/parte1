<div class="col-md-4">
    <div class="form-group">
        <label class="col-12 form-label" for="{{ $id }}">{{ $label }}</label>
        <select class="form-select @error($name) is-invalid @enderror" name="{{ $name }}"
            id="{{ $id }}">
            <option value="">{{ $text }}</option>
            @foreach ($array as $opt)
                <option value="{{ ((object) $opt)->value }}"
                    {{ old($name, $value) == ((object) $opt)->value ? 'selected' : '' }}>
                    {{ ((object) $opt)->text }}
                </option>
            @endforeach
        </select>
        @foreach ($errors->get($name) as $error)
            <span class="text-danger">- {{ $error }}</span> <br>
        @endforeach
    </div>
</div>
