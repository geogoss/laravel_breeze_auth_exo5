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

                    <div class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Add roles</h2>
                        <form action="/roles" method="POST">
                            @csrf
                            <div>
                                <input name="role" id="username" type="text"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            </div>
                            <div class="flex justify-end mt-6">
                                <button type="submit"
                                    class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                            </div>
                        </form>
                    </div>

                    <!-- component -->
                    <div class="container mt-20">


                        <table class="text-left w-full">
                            <thead class="bg-black flex text-white w-full">
                                <tr class="flex w-full mb-4">
                                    <th class="p-4 w-1/4">#</th>
                                    <th class="p-4 w-1/4">role</th>
                                    <th class="p-4 w-1/4"></th>
                                </tr>
                            </thead>
                            <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                            <tbody
                                class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full"
                                style="height: 50vh;">
                                @foreach ($roles as $role)
                                    <tr class="flex w-full mb-4">
                                        <td class="p-4 w-1/4">{{ $role->id }}</td>
                                        <td class="p-4 w-1/4">{{ $role->role }}</td>
                                        <td class="p-4 w-1/4">
                                            <form action="/role/{{ $role->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-80">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
