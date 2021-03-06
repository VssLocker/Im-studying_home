@props([ 'value' => request('category_id'), 'options' => [] ])

<select {{ $attributes->class(
    'select'
) }}>
    {{ $slot }}

    <option value="{{ null }}">
        {{ __('Все категории') }}
    </option>

    @foreach ($options as $key => $_value)
        <option value="{{ $key }}" {{ ($key == $value) ? 'selected' : '' }}>
            {{ $_value }}
        </option>
    @endforeach
</select>