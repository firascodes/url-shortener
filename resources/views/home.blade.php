<x-layout>
    <div class="flex flex-col justify-center items-center h-screen w-screen">
        <div class="text-center">
            <div class="text-red-500 text-[80px] font-bold font-['Inter'] text-center">URLify</div>
            <div class=" text-cyan-950 text-2xl font-semibold font-['Inter']">Turn your
                Long links into shorter verions!</div>
            <div class="mt-5 flex justify-center gap-4">
                <a href="/shortenPage">
                    <button
                        class=" bg-red-500 rounded-[49px] hover:underline text-white text-2xl font-semibold font-['Inter'] px-4 py-2">Shorten</button>
                </a>
                <a href="/analytics">
                    <button
                        class=" bg-red-500 rounded-[49px] hover:underline text-white text-2xl font-semibold font-['Inter'] px-4 py-2">Analytics</button>
                </a>
            </div>

        </div>
    </div>
</x-layout>