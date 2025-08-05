@props([
'eventName' => 'showToast',
'position' => 'toast-top toast-center',
])

<div
    x-data="{ toast: null }"
    x-init="
        window.addEventListener('{{ $eventName }}', event => {
            toast = {
                title: event.detail.title,
                message: event.detail.message,
                type: event.detail.type,
            };

            setTimeout(() => toast = null, 4000);
        })
    "
    class="toast {{ $position }} z-50"
>
    <template x-if="toast">
        <template x-if="toast">
            <div
                x-transition
                class="alert shadow-lg"
                :class="{
                'alert-error': toast.type === 'error',
                'alert-success': toast.type === 'success',
                'alert-warning': toast.type === 'warning',
                'alert-info': toast.type === 'info',
            }"
            >
                <div>
                    <span class="font-bold" x-html="toast.title"></span>
                    <span class="block text-sm" x-html="toast.message"></span>
                </div>
            </div>
        </template>
    </template>
</div>
