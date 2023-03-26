@props(['id'])

<div class="modal fade" id="{{ $id }}">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 820px; padding: 24px">
            {{ $slot }}
        </div>
    </div>
</div>