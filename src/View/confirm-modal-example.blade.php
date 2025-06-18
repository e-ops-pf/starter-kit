{{--A normal URL modal--}}
<a
        x-data
        x-confirm-modal
        data-url="/some-url"
        data-title="Do that?"
        data-message="Doing that needs some confirmation."
        data-confirm-label="Yes, do that"
        data-cancel-label="No thanks"
        class="btn btn-primary">
    Button text
</a>

{{--A modal building a form and reaching the action with a method--}}
<a
        x-data
        x-confirm-modal
        data-action="/some-action"
        data-method="METHOD"
        data-title="Do that?"
        data-message="Doing that needs some confirmation."
        data-confirm-label="Yes, do that"
        data-cancel-label="No thanks"
        class="btn btn-error">
    Button text
</a>