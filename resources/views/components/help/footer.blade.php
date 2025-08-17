<div
        x-data="{ isOpen: false }"
        class="fixed inset-x-0 bottom-0 z-50 pointer-events-none"
        @keydown.escape="isOpen = false"
>
    <button
            x-show="!isOpen"
            x-transition
            @click="isOpen = true"
            :aria-expanded="isOpen"
            aria-controls="help-footer-panel"
            class="pointer-events-auto mx-auto mb-[max(0.5rem,env(safe-area-inset-bottom))] block rounded-full px-3 py-1 text-sm font-medium shadow ring-1 ring-black/10 bg-primary text-primary-content flex flex-row gap-1"
    >
        <x-lucide-help-circle class="w-5 h-5" />Aide
    </button>

    <div
            id="help-footer-panel"
            x-show="isOpen"
            x-cloak
            x-transition.opacity
            class="pointer-events-auto mx-auto max-w-4xl w-[min(92vw,64rem)] mb-[max(0.5rem,env(safe-area-inset-bottom))]"
            role="region"
            aria-label="Page help"
    >
        <div class="rounded-2xl shadow-lg ring-1 ring-black/10 overflow-hidden bg-base-100 text-base-content">
            <div class="flex items-center gap-2 px-3 py-2 border-b border-black/5">
                <h2 class="text-sm font-semibold">Aide & Tips</h2>
                <button
                        class="ml-auto px-2 py-1 text-sm rounded hover:bg-base-200"
                        @click="isOpen = false"
                >
                    <x-lucide-x class="w-5 h-5" />
                </button>
            </div>

            <div class="max-h-96 overflow-y-auto p-4 text-sm leading-relaxed">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>