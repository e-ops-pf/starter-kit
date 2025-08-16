(function () {
    const closeDropdowns = () => {
        document.querySelectorAll('.dropdown.dropdown-open')
            .forEach(el => el.classList.remove('dropdown-open'))

        document.querySelectorAll('details[open]')
            .forEach(d => d.removeAttribute('open'))

        if (document.activeElement && document.activeElement.blur) {
            document.activeElement.blur()
        }
    };

    window.addEventListener('livewire:navigated', closeDropdowns)
    window.addEventListener('livewire:navigating', closeDropdowns)

    window.addEventListener('popstate', closeDropdowns)
    window.addEventListener('pageshow', closeDropdowns)
})()