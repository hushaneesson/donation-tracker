<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="px-4  lg:px-8">
                        @if (Session::has('success'))
                            <p class="bg-green-100 p-2 my-4 rounded-md text-green-800">{{ Session::get('success') }}
                            </p>
                        @endif
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-xl font-semibold text-gray-900">Donations</h1>
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                                ${{ number_format($total, 2) }}
                            </div>

                        </div>
                        <form action="{{ route('new-donation') }}" method="POST"
                            class="mt-8 py-3 px-2 bg-indigo-50 rounded-md md:flex space-y-3 md:space-x-4">
                            @csrf


                            <input type="text" name="donor" id="donor" placeholder="Name"
                                autocomplete="given-name"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-1/3 shadow-sm sm:text-sm border-gray-300 rounded-md">



                            <input type="number" name="amount" id="amount" placeholder="Amount ($)"
                                autocomplete="off"
                                class="focus:ring-indigo-500 w-full focus:border-indigo-500 block md:w-1/3 shadow-sm sm:text-sm border-gray-300 rounded-md">


                            <button type="submit"
                                class=" rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                                Donation</button>
                        </form>
                        <div class="mt-8 flex flex-col">
                            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-300">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                        Name</th>
                                                    <th scope="col"
                                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                        Amount</th>
                                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                @if ($donations->isEmpty())
                                                    <tr>
                                                        <td colspan="3"
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            No donations made as yet</td>
                                                    </tr>
                                                @endif
                                                @foreach ($donations as $donation)
                                                    <tr>
                                                        <td
                                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                            {{ $donation->donor }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            ${{ number_format($donation->amount, 2) }}</td>
                                                        <td
                                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                            <a href="#"
                                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>


                                    </div>

                                    <div class="mt-4 w-full">
                                        {{ $donations->links('vendor.pagination.tailwind') }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
