<x-layout>
    <x-nav />
    <main class="text-center">
        <h1 class="text-cyan-950 text-5xl font-bold font-['Inter']  mt-24">Analytics</h1>
        @foreach($links as $link)
        <p>{{ $link->original_url }} -> {{url('/')}}/{{ $link->shortened_url }} | Clicks: {{ $link->click_count }}</p>
        @endforeach

        <!-- For pagination links -->
        {{ $links->links() }}



    </main>
</x-layout>