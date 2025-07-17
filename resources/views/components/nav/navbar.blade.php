@props([
    'menu' => null,
    'brand' => null,
    'user' => null,
    'home' => '/',
])
<div class="navbar bg-primary text-primary-content shadow-sm">
    <div class="navbar-start">
        <!-- Mobile Dropdown -->
        @if($menu)
        <div
                class="dropdown"
        >
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <x-heroicon-m-bars-4 class="h-5 w-5"/>
            </div>
            <ul
                class="menu menu-sm dropdown-content bg-primary rounded-box z-1 mt-3 w-52 p-2 shadow w-fit">
                {{ $menu }}
            </ul>
        </div>
        @endif

        <!-- Brand -->
        @if($brand)
            <a class="btn btn-ghost text-xl" href="{{ $home }}">
                {{ $brand }}
            </a>
        @endif
    </div>

    <!-- Desktop Menu -->
    <div class="navbar-center hidden lg:flex">
        @if($menu)
        <ul class="menu menu-horizontal px-1">
            {{ $menu }}
        </ul>
        @endif
    </div>

    <!-- User -->
    <div class="navbar-end">
        {{ $user ?? '' }}
    </div>
</div>