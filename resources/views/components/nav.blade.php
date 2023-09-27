<nav class="bg-red-500 flex justify-between">
    <a href="/" class="py-4 px-6 text-white text-4xl font-bold font-['Inter']">URLify</a>
    <div class="flex pr-6 gap-4 justify-center items-center">
        <a href="/analyticsPage"
            class="p-2 py-3  hover:bg-red-600  text-2xl font-semibold font-['Inter'] {{ Request::is('analyticsPage') ? "
            bg-red-600 text-white " : " text-white" }} ">Analytics</a>
        <a href=" /shortenPage"
            class="p-2 py-3 hover:bg-red-600 text-2xl font-semibold font-['Inter'] {{ Request::is('shortenPage') ? "
            bg-red-600 text-white" : " text-white" }}">Shorten</a>
        <a href="#" class="p-2 py-3 hover:bg-red-600  text-2xl font-semibold font-['Inter'] {{ Request::is('') ? "
            bg-red-600 text-white" : "text-white" }} ">Log In</a>
        <a href=" #" class="p-2 py-3 hover:bg-red-600 text-2xl font-semibold font-['Inter'] {{ Request::is('') ? "
            bg-red-600 text-white " : " text-white" }}">Register</a>
    </div>
</nav>