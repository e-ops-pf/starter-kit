@props([
    'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png?20200919003010',
])

<div class="dropdown dropdown-end">
    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            <img
                    alt="User avatar"
                    src="{{ $avatar }}" />
        </div>
    </div>
    <ul tabindex="0"
        class="menu menu-sm dropdown-content bg-primary rounded-box mt-3 w-52 p-2 z-50 drop-shadow-xl">
        {{ $slot }}
    </ul>
</div>