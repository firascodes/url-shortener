<nav class="bg-red-500 flex justify-between">
    <a href="/" class="py-4 px-6 text-white text-4xl font-bold font-['Inter']">URLify</a>
    <div class="flex pr-10 gap-3 justify-center items-center">
        <a href="/analytics"
            class="p-3 hover:bg-white hover:text-red-500 hover:rounded-2xl text-2xl font-semibold font-['Inter'] {{ Request::is('analytics') ? "
            bg-white text-red-500 rounded-2xl" : "text-white" }} ">Analytics</a>
        <a href=" /shorten"
            class="p-3 hover:bg-white hover:text-red-500 hover:rounded-2xl text-2xl font-semibold font-['Inter'] {{ Request::is('shorten') ? "
            bg-white text-red-500 rounded-2xl" : "text-white" }}">Shorten</a>
    </div>
</nav>