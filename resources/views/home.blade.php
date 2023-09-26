<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>URLify</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')


</head>

<body class="antialiased bg-orange-100 flex flex-col justify-center items-center h-screen w-screen">
    <div class="text-center">
        <div class="text-red-500 text-[80px] font-bold font-['Inter'] text-center">URLify</div>
        <div class=" text-cyan-950 text-2xl font-semibold font-['Inter']">Turn your
            Long links into shorter verions!</div>
        <div class="mt-5 flex justify-center gap-4">
            <a href="/shorten">
                <button
                    class=" bg-red-500 rounded-[49px] hover:underline text-white text-2xl font-semibold font-['Inter'] px-4 py-2">Shorten</button>
            </a>
            <a href="/analytics">
                <button
                    class=" bg-red-500 rounded-[49px] hover:underline text-white text-2xl font-semibold font-['Inter'] px-4 py-2">Analytics</button>
            </a>
        </div>

    </div>
</body>

</html>