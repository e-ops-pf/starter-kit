<div class="navbar bg-primary text-primary-content shadow-sm">
    <div class="navbar-start">
        <!-- Mobile Dropdown -->
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <x-heroicon-m-bars-4 class="h-5 w-5" />
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-primary rounded-box z-1 mt-3 w-52 p-2 shadow">
                {{ $menu }}
            </ul>
        </div>

        <!-- Brand -->
        @if($brand)
            <a class="btn btn-ghost text-xl">
                {{ $brand }}
            </a>
        @endif
    </div>

    <!-- Desktop Menu -->
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            {{ $menu }}
        </ul>
    </div>

    <!-- User -->
    <div class="navbar-end">
        {{ $user ?? '' }}
    </div>
</div>