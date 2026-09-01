@php
    $id = $getId();
    $options = $getOptions();
    $jsonData = $getState() ?: [];
    if (is_string($jsonData)) {
        $decodedData = json_decode($jsonData, true);
        $jsonData = json_last_error() === JSON_ERROR_NONE ? $decodedData : [];
    } elseif ($jsonData instanceof stdClass) {
        $jsonData = (array) $jsonData;
    }
@endphp

<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div wire:ignore
         x-data
         x-init="
             let editor = new JSONEditor($el, {{ json_encode($options) }});
             editor.set({{ json_encode($jsonData) }});
         "
         id="{{ $id }}">
    </div>
</x-dynamic-component>
