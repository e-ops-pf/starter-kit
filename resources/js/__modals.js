document.addEventListener('alpine:init', () => {
    Alpine.directive('confirm-modal', (el, _, {evaluate}) => {
        el.addEventListener('click', e => {
            e.preventDefault()

            const modal = document.getElementById('global-confirm-modal')
            const dataset = el.dataset

            console.log('Dataset:', dataset)

            document.getElementById('confirm-title').innerHTML = dataset.title || 'Confirm Action'
            document.getElementById('confirm-message').innerHTML = dataset.message || 'Are you sure you want to proceed?'
            document.getElementById('confirm-cancel').innerHTML = dataset.cancelLabel || 'Cancel'
            document.getElementById('confirm-confirm').innerHTML = dataset.confirmLabel || 'Confirm'


            document.getElementById('confirm-confirm').addEventListener('click', () => {
                if (dataset.url) {
                    window.location.href = dataset.url
                } else if (dataset.action) {
                    const form = document.createElement('form')
                    form.method = 'POST'
                    form.action = dataset.action

                    // Add CSRF
                    const csrf = document.querySelector('meta[name="csrf-token"]')?.content
                    if (csrf) {
                        const csrfInput = document.createElement('input')
                        csrfInput.type = 'hidden'
                        csrfInput.name = '_token'
                        csrfInput.value = csrf
                        form.appendChild(csrfInput)
                    }

                    // Add _method if not POST
                    if (dataset.method && dataset.method.toUpperCase() !== 'POST') {
                        const methodInput = document.createElement('input')
                        methodInput.type = 'hidden'
                        methodInput.name = '_method'
                        methodInput.value = dataset.method
                        form.appendChild(methodInput)
                    }

                    document.body.appendChild(form)
                    form.submit()
                } else {
                    console.error('No URL or action specified for confirmation.')
                    modal.close()
                }
            })

            document.getElementById('confirm-cancel').addEventListener('click', () => {
                modal.close()
            })

            modal.showModal()
        })
    })
})
