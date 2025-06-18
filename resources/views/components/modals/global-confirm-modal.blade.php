{{--Put this on your app layout for global confirmation modals.--}}

<dialog id="global-confirm-modal" class="modal">
    <div class="modal-box">
        <h3 id="confirm-title" class="font-bold text-lg">Are you sure?</h3>
        <p id="confirm-message" class="py-4">This action cannot be undone.</p>
        <div class="modal-action">
            <button id="confirm-cancel" class="btn">Cancel</button>
            <button id="confirm-confirm" class="btn btn-error">Confirm</button>
        </div>
    </div>
</dialog>