<div class="col-md-4 mb-2">
    <div class="form-group">
        <label class="col-12 form-label" for="{{ $id }}">{{ $label }}</label>
        <input 
            class="form-control @error($name) is-invalid @enderror"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            type="{{ $type }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
        />
        @foreach ($errors->get($name) as $error)
            <span class="text-danger">- {{ $error }}</span> <br>
        @endforeach
    </div>
</div>
