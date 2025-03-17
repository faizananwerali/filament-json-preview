@php
    $id = $getId();
@endphp

<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div wire:ignore id="{{$id}}"></div>
</x-dynamic-component>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // create the editor
        let container = document.getElementById('{{$id}}')

        let editor = new JSONEditor(container, @json($entry->getOptions()))
        // set json
        const jsonString = @json(json_encode($getState() ?: []));
        let initialJson = JSON.parse(jsonString);
        editor.set(initialJson)

        // get json
        var updatedJson = editor.get()
    });

</script>
