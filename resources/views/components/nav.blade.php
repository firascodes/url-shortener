<nav class="bg-red-500 flex justify-between">
    <a href="/" class="py-2 px-3 text-white text-3xl font-bold font-['Inter']">URLify</a>
    <div class="flex pr-6 gap-4 justify-center items-center">
        <a href="/analytics"
            class="p-2 py-3  hover:underline  text-xl font-semibold font-['Inter'] {{ Request::is('analytics') ? "
            bg-red-600 text-white rounded" : " text-white" }} ">Analytics</a>
        <a href=" /shortenPage"
            class="p-2 py-3 hover:underline text-xl font-semibold font-['Inter'] {{ Request::is('shortenPage') ? "
            bg-red-600 text-white rounded" : " text-white" }}">Shorten</a>
        {{-- <a href="#" class="p-2 py-3 hover:underline  text-xl font-semibold font-['Inter'] {{ Request::is('') ? "
            bg-red-600 text-white rounded" : "text-white" }} ">Log In</a> --}}
    </div>
</nav>