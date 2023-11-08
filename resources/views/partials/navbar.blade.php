<nav class="py-3 bg-slate-800 text-white sticky top-0 z-50 shadow-lg">
    <div>
        <div class="flex flex-cols-3 gap-4 place-content-around">
            <a href="">
                <div class="flex justify-center items-center gap-3">
                    <img class="rounded-full w-10 h-10"
                        src="https://images.unsplash.com/flagged/photo-1562599838-8cc871c241a5?auto=format&fit=crop&q=80&w=1780&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <div class="flex align-middle">
                        <h1>MINI-BLOG</h1>
                    </div>
                </div>
            </a>
            <div class="flex justify-center items-center">
                <ul class="flex gap-4">
                    <a href="/">
                        <li
                            class="px-5 py-2 rounded-lg hover:bg-slate-900 transition {{ $title === 'Home' ? 'active' : '' }}">
                            Home</li>
                    </a>
                    <a href="/about">
                        <li
                            class="px-5 py-2 rounded-lg hover:bg-slate-900 transition {{ $title === 'About' ? 'active' : '' }}">
                            About</li>
                    </a>
                    <a href="/blogs">
                        <li
                            class="px-5 py-2 rounded-lg hover:bg-slate-900 transition {{ $title === 'Blogs' ? 'active' : '' }}">
                            Blog</li>
                    </a>
                </ul>
            </div>
            <div class="flex justify-center items-center">
                <a href="">
                    <h1 class="px-5 py-2 rounded-lg hover:bg-slate-900 transition">Login</h1>
                </a>
            </div>
        </div>
    </div>
</nav>
