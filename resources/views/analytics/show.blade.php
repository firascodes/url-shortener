<x-layout>
    <x-nav />

    <div class="container flex flex-col justify-center text-center max-w-4xl mx-auto my-14">
        <a href="/analytics" class="text-left w-min text-red-500 mb-5 hover:text-cyan-950">Back</a>
        <div class="bg-gray-50 dark:bg-red-500 dark:text-gray-200 p-6 rounded-lg shadow mb-2">
            <h1 class="text-xl font-bold mb-2 text-gray-700 dark:text-gray-200">Analytics for<a
                    class="ml-4 bg-white px-4 py-1 hover:text-red-500 text-cyan-950 " href="{{ url('/') . '/' .
                $shortLink->shortened_url }}" target="_blank">{{ url('/') . '/' .
                    $shortLink->shortened_url }}</a></h1>

            <h2 class="text-lg mb-2 text-gray-600 dark:text-gray-200">Original URL: {{ $shortLink->original_url }}</h2>
            <h3 class="text-md text-gray-500 dark:text-gray-200">Total Clicks: {{ $shortLink->click_count }}</h3>
        </div>
    </div>
    <div class="max-w-4xl mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 my-10">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class=" bg-gray-50 dark:bg-red-500 dark:text-gray-200">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-s font-bold text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    IP</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-s font-bold text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Country</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-s font-bold text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    City</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-s font-bold text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Clicked At</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($clicks as $click)
                            <tr>
                                <td class="font-medium px-6 py-3 whitespace-nowrap text-cyan-950">{{ $click->ip_address
                                    }}</td>
                                <td class="font-medium px-6 py-3 whitespace-nowrap text-cyan-950">{{ $click->country }}
                                </td>
                                <td class="font-medium px-6 py-3 whitespace-nowrap text-cyan-950">{{ $click->city }}
                                </td>
                                <td class="font-medium px-6 py-3 whitespace-nowrap text-cyan-950">{{ $click->created_at
                                    }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</x-layout>