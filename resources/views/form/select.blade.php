@component('form.group')
    @slot('field', $field)
    @slot('label', $label)

    @slot('input')
        <select
            id="{{ $field }}"
            name="{{ $field }}"
            class="form-control custom-select{{ $errors->has($field) ? ' is-invalid' : '' }}"
            aria-describedby="{{ $field . 'HelpBlock' }}"
            {!! $slot !!}
        >
            <?php $option_value = isset($option_value) ? $option_value : 'id'; ?>
            <?php $option_label = isset($option_label) ? $option_label : 'name'; ?>
            @foreach($options as $option)
                <option
                    value="{{ $option[$option_value] }}"
                    {{ isset($value) && $value == $option[$option_value] ? 'selected' : '' }}
                >
                    {{ $option[$option_label] }}
                </option>
            @endforeach
        </select>
    @endslot

    @slot('help')
        {{ isset($help) ? __($help) : '' }}
    @endslot
@endcomponent
