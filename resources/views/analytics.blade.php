<x-layout>
    <x-nav />
    <main class="text-center">
        <h1 class="text-cyan-950 text-5xl font-bold font-['Inter']  mt-24">Analytics</h1>
        {{-- @foreach($links as $link)
        <p>{{ $link->original_url }} -> {{url('/')}}/{{ $link->shortened_url }} | Clicks: {{ $link->click_count }}</p>
        @endforeach

        <!-- For pagination links -->
        {{ $links->links() }} --}}

        <div class="max-w-6xl mx-auto">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 my-10">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class=" bg-gray-50 dark:bg-red-500 dark:text-gray-200">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-s font-bold text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Long Url</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-s font-bold text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Short URL</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-s font-bold text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                        Clicks</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($links as $link)
                                <tr>
                                    <td class="font-medium px-6 py-4 whitespace-nowrap text-cyan-950">{{
                                        $link->original_url }}</td>
                                    <td
                                        class="font-medium px-6 py-4 whitespace-nowrap text-red-500 hover:text-cyan-950">
                                        <a href="{{url('/')}}/{{ $link->shortened_url }}">{{url('/')}}/{{
                                            $link->shortened_url }}</a>
                                    </td>
                                    <td class="font-medium px-6 py-4 whitespace-nowrap text-cyan-950">{{
                                        $link->click_count }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="m-2 p-2 font-medium text-cyan-950">Pagination {{ $links->links() }} </div>
                    </div>
                </div>
            </div>

        </div>



    </main>
</x-layout>