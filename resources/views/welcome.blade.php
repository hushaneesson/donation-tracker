<x-guest-layout class="relativve">
    <img src="{{ asset('img/banner.png') }}" alt="background" class="object-cover w-full" />
    <div class="h-screen ">
        @if (Route::has('login'))
            <div class="absolute float-right px-6 py-4 right-2 top-2 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="px-4 py-2 text-sm font-bold bg-white border rounded-md text-sky-600 border-sky-600">Dashboard</a>
              {{--  @else
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 text-sm font-bold bg-white border rounded-md text-sky-600 border-sky-600">Log
                        in</a>  --}}

                @endauth
            </div>
        @endif

        <div class="p-2 -mt-10 space-y-10 md:p-8 md:-mt-20 lg:-mt-32">

            <h1 class="text-3xl font-bold text-center text-sky-800 md:text-6xl">Duff's Back to School Fundraiser</h1>

            <div class="w-full p-8 overflow-x-auto chart-wrapper">
                <ul class="font-medium chart-y">
                    <li>$40,000</li>
                    <li>$30,000</li>
                    <li>$20,000</li>
                    <li>$10,000</li>
                    <li>$5,000</li>
                    <li>$0</li>
                </ul>
                <ul class="chart-x">
                    <li id="bar" data-year=""></li>
                </ul>

                <div class="items-center justify-center hidden h-full text-2xl md:flex">
                    <div>
                        <div>Total Received </div>
                        <div class="text-3xl font-bold text-sky-800 md:text-5xl">${{ number_format($total, 2) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center h-full text-2xl md:hidden">
                    <div>
                        <div>Total Received </div>
                        <div class="text-3xl font-bold text-sky-800 md:text-5xl">${{ number_format($total, 2) }}
                        </div>
                    </div>
                </div>

        </div>

        {{-- donors --}}
        <div class="p-2 mt-10 overflow-hidden shadow md:p-4 sm:rounded-md">
            <p class="py-1 text-lg">Donors</p>
            <ul role="list" class="grid border border-gray-200 md:grid-cols-3">
                @foreach ($donations as $donation)
                    <li class="hover:bg-gray-100">
                        <div class="flex items-center flex-1 min-w-0 px-4 py-4 sm:px-6">
                            <div class="flex-shrink-0">
                                <svg viewBox="0 0 100 100" class="w-14 h-14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M90.5,50A40,40,0,1,0,14.064,66.5H86.936A39.844,39.844,0,0,0,90.5,50Z"
                                        fill="#c7f0ff"></path>
                                    <path d="M14.064,66.5a40,40,0,0,0,72.872,0Z" fill="#daedf7"></path>
                                    <path d="M11 66.5L89 66.5" fill="none" stroke="#45413c" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M6.5 66.5L9 66.5" fill="none" stroke="#45413c" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M91 66.5L93.5 66.5" fill="none" stroke="#45413c" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M79.908,68.282a3.193,3.193,0,0,1-3.18,3.507H36.65a3.193,3.193,0,0,1-3.179-3.507l3.765-38.34a3.2,3.2,0,0,1,3.179-2.883H72.963a3.2,3.2,0,0,1,3.18,2.883Z"
                                        fill="#ffe500"></path>
                                    <path d="M60.284,27.059V22.266a6.39,6.39,0,1,0-12.78,0v4.793" fill="none"
                                        stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M54.749,19.071a6.36,6.36,0,0,0-.854,3.195v4.793" fill="none"
                                        stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M66.674,27.059V22.266a6.39,6.39,0,0,0-6.39-6.39" fill="none"
                                        stroke="#45413c" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M65.076 27.059L65.076 35.845" fill="none" stroke="#45413c"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M68.538,55.814H61.615a1.331,1.331,0,0,1-1.331-1.331V40.462a1.328,1.328,0,0,1,.479-1.022l4.313-3.595L69.39,39.44a1.328,1.328,0,0,1,.479,1.022V54.483A1.331,1.331,0,0,1,68.538,55.814Z"
                                        fill="#ff6242"></path>
                                    <path
                                        d="M61.615,55.814h3.461V35.845L60.763,39.44a1.328,1.328,0,0,0-.479,1.022V54.483A1.331,1.331,0,0,0,61.615,55.814Z"
                                        fill="#ff866e"></path>
                                    <path
                                        d="M68.538,55.814H61.615a1.331,1.331,0,0,1-1.331-1.331V40.462a1.328,1.328,0,0,1,.479-1.022l4.313-3.595L69.39,39.44a1.328,1.328,0,0,1,.479,1.022V54.483A1.331,1.331,0,0,1,68.538,55.814Z"
                                        fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path
                                        d="M56.29,82.972c0,1.323-9.3,2.4-20.768,2.4s-20.768-1.073-20.768-2.4,9.3-2.4,20.768-2.4S56.29,81.649,56.29,82.972Z"
                                        fill="#45413c" opacity=".15"></path>
                                    <path d="M35.291,49.745,57.977,27.059H40.415a3.2,3.2,0,0,0-3.179,2.883Z"
                                        fill="#fff48c"></path>
                                    <path
                                        d="M79.908,68.282a3.193,3.193,0,0,1-3.18,3.507H36.65a3.193,3.193,0,0,1-3.179-3.507l3.765-38.34a3.2,3.2,0,0,1,3.179-2.883H72.963a3.2,3.2,0,0,1,3.18,2.883Z"
                                        fill="none" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M31.523,66.194v3.73a1.716,1.716,0,0,0,1.435,1.694,43.411,43.411,0,0,0,14.328,0,1.72,1.72,0,0,0,1.435-1.694v-3.73"
                                        fill="#46b000" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M31.523,62.754v3.73a1.716,1.716,0,0,0,1.435,1.694,43.357,43.357,0,0,0,14.328,0,1.719,1.719,0,0,0,1.435-1.694v-3.73"
                                        fill="#46b000" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M31.523,59.315v3.729a1.715,1.715,0,0,0,1.435,1.694,43.357,43.357,0,0,0,14.328,0,1.718,1.718,0,0,0,1.435-1.694V59.315"
                                        fill="#46b000" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M48.721,56.736a1.72,1.72,0,0,0-1.985-1.7,43.395,43.395,0,0,1-13.228,0,1.722,1.722,0,0,0-1.985,1.7v2.869A1.716,1.716,0,0,0,32.958,61.3a43.354,43.354,0,0,0,14.328,0,1.72,1.72,0,0,0,1.435-1.694V56.736Z"
                                        fill="#6dd627" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M41.842,58.885c0,.713-.771,1.29-1.72,1.29s-1.72-.577-1.72-1.29.77-1.29,1.72-1.29S41.842,58.173,41.842,58.885Z"
                                        fill="#c8ffa1"></path>
                                    <path
                                        d="M20.366,75.433v3.729A1.716,1.716,0,0,0,21.8,80.856a43.357,43.357,0,0,0,14.328,0,1.719,1.719,0,0,0,1.435-1.694V75.433"
                                        fill="#46b000" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M20.366,71.993v3.73A1.717,1.717,0,0,0,21.8,77.417a43.411,43.411,0,0,0,14.328,0,1.72,1.72,0,0,0,1.435-1.694v-3.73"
                                        fill="#46b000" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M20.366,68.553v3.73A1.716,1.716,0,0,0,21.8,73.977a43.357,43.357,0,0,0,14.328,0,1.72,1.72,0,0,0,1.435-1.694v-3.73"
                                        fill="#46b000" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M37.564,65.974a1.722,1.722,0,0,0-1.985-1.7,43.317,43.317,0,0,1-13.229,0,1.724,1.724,0,0,0-1.984,1.7v2.87A1.715,1.715,0,0,0,21.8,70.537a43.283,43.283,0,0,0,14.328,0,1.718,1.718,0,0,0,1.435-1.693v-2.87Z"
                                        fill="#6dd627" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M30.684,68.123c0,.713-.769,1.291-1.719,1.291s-1.72-.578-1.72-1.291.77-1.289,1.72-1.289S30.684,67.411,30.684,68.123Z"
                                        fill="#c8ffa1"></path>
                                    <path
                                        d="M51.466,75.5a1.72,1.72,0,0,0-1.626-2.046,43.373,43.373,0,0,1-12.987-2.514,1.723,1.723,0,0,0-2.272,1.291l-.264,1.362-.708,3.662A1.716,1.716,0,0,0,34.7,79.187,43.326,43.326,0,0,0,48.763,81.91a1.72,1.72,0,0,0,1.731-1.39l.708-3.661Z"
                                        fill="#6dd627" stroke="#45413c" stroke-linejoin="round"></path>
                                    <path
                                        d="M44.121,77.239a1.719,1.719,0,1,1-1.361-2.015A1.719,1.719,0,0,1,44.121,77.239Z"
                                        fill="#c8ffa1"></path>
                                </svg>
                            </div>
                            <div class="flex-1 px-4 ">
                                <div>
                                    <p class="text-sm font-medium truncate text-sky-600">
                                        {{ $donation->donor }}</p>
                                    {{-- <p class="flex items-center mt-2 text-sm text-gray-500">
                                            <span class="truncate">ricardo.cooper@example.com</span>
                                        </p> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="w-full p-8 bg-gradient-to-b from-sky-400 to via-sky-600 to-sky-800" />

    </div>


    <script>
        window.addEventListener("load", () => {
            document.body.classList.add("loaded");
        });

        document.querySelector('#bar').style.height = "<?php echo $percentage . '%'; ?>";
    </script>
</x-guest-layout>
