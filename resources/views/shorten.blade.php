<x-layout>
    <x-nav />
    <section class="text-center">

        <div class="flex flex-col justify-center items-center">

            <h1 class="text-cyan-950 text-5xl font-bold font-['Inter'] mb-16 mt-24">Shorten!</h1>
            <div class="bg-[#F3E3C3] text-cyan-950 text-4xl font-bold font-['Inter'] rounded-xl px-10 py-16">
                <h2 class="text-2xl font-semibold font-['Inter'] mb-4">Paste the long URL to be shortened</h2>

                <form action="/shorten" method="POST" class="flex">
                    @csrf
                    <input type="url" name="original_url" class="py-2 w-[500px] text-xl pl-10" placeholder="Enter URL">
                    <button class="bg-red-500 px-3 py-2 text-white text-2xl hover:bg-red-600"
                        type="submit">URLify</button>
                </form>
            </div>

            @if(session('shortened_url'))
            <div class="bg-[#F3E3C3] px-10 py-8 text-cyan-950 text-4xl font-bold font-['Inter'] rounded-xl 
            border-8 border-amber-100 border-opacity-10 mt-20">
                <div class="text-2xl font-semibold font-['Inter'] flex">
                    Shortened URL ->

                    <a class="ml-4 bg-white px-4 hover:text-red-500" href="{{session('shortened_url')}}"
                        target="_blank">{{session('shortened_url')}}</a>

                </div>
            </div>
            @endif

        </div>
    </section>
</x-layout>