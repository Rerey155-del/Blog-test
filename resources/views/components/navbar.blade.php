<div x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)" :class="scrolled ? 'backdrop-blur-md bg-opacity-60' : ''"
    class="navbar bg-base-100 shadow-sm fixed top-0 left-0 w-full transition-all duration-300">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">daisyUI</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li><a>Link</a></li>
            <li>
                <details>
                    <summary>Parent</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>
