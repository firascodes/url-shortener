<x-layout>
    <x-nav />

    <h1>Analytics for {{ url('/') . '/' . $shortLink->shortened_url }}</h1>

    <h2>Original URL: {{ $shortLink->original_url }}</h2>
    <h3>Total Clicks: {{ $shortLink->click_count }}</h3>

    <h2>Click Details</h2>
    <table>
        <thead>
            <tr>
                <th>IP</th>
                <th>Country</th>
                <th>City</th>
                <th>Clicked At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clicks as $click)
            <tr>
                <td>{{ $click->ip }}</td>
                <td>{{ $click->country }}</td>
                <td>{{ $click->city }}</td>
                <td>{{ $click->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>