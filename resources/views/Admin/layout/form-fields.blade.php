@foreach($fields as $field)
    @if(!array_key_exists('hidden', $field) || !$field['hidden'])
        @switch($field['element'])
            @case('input')
            <x-input name="{{ $field['name'] }}"
                     label="{{ $field['label'] ?? '' }}"
                     col="{{ $field['col'] ?? 0 }}"
                     placeholder="{{ $field['placeholder'] ?? '' }}"
                     type="{{ $field['type'] ?? 'text' }}"
                     value="{{ $field['value'] ?? ((!array_key_exists('type', $field) || $field['type'] != 'password') && isset($data) && $data && $data[$field['name']] ? $data[$field['name']] : '') }}"
            ></x-input>
            @break

            @case('textarea')
            <x-textarea name="{{ $field['name'] }}"
                     label="{{ $field['label'] ?? '' }}"
                     col="{{ $field['col'] ?? 0 }}"
                     placeholder="{{ $field['placeholder'] ?? '' }}"
                     rows="{{ $field['rows'] ?? 10 }}"
                     value="{{ $field['value'] ?? ((!array_key_exists('type', $field) || $field['type'] != 'password') && isset($data) && $data && $data[$field['name']] ? $data[$field['name']] : '') }}"
            ></x-textarea>
            @break

            @case('select')
            <x-select name="{{ $field['name'] }}"
                     label="{{ $field['label'] ?? '' }}"
                     col="{{ $field['col'] ?? 0 }}"
                     placeholder="{{ $field['placeholder'] ?? '' }}"
                     :options="$field['options'] ?? []"
                     selected="{{ $field['selected'] ?? (isset($data) && $data && $data[$field['name']] ? $data[$field['name']] : '') }}"
                     optionAll="{{ $field['optionAll'] ?? '' }}"
                     icon="{{ $field['icon'] ?? '' }}"
                     sameKeyValue="{{ $field['sameKeyValue'] ?? '' }}"
                     isFilter="{{ $field['isFilter'] ?? '' }}"
                     disabled="{{ $field['disabled'] ?? '' }}"
            ></x-select>
            @break

            @case('single-image')
            <x-upload-single-image name="{{ $field['name'] }}"
                     label="{{ $field['label'] ?? '' }}"
                     col="{{ $field['col'] ?? 0 }}"
                     placeholder="{{ $field['placeholder'] ?? '' }}"
                     value="{{ $field['value'] ?? (isset($data) && $data && $data[$field['name']] ? $data[$field['name']] : '') }}"
            ></x-upload-single-image>
            @break

            @case('divider')
            <div class="divider">
                @if(array_key_exists('text', $field))
                    <div class="divider-text">{{ $field['text'] }}</div>
                @endif
            </div>
            @break
        @endswitch
    @endif
@endforeach
