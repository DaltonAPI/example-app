<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="../test.css" type="text/css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="py-3 px-6">
                                Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Edit
                            </th>

                            <th scope="col" class="py-3 px-6">
                                Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                              @foreach($posts as $post)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">

                                <div >

                                    <div class="font-normal text-gray-500"><a href="/posts/{{ $post->slug }}" >{{$post->title}}</a></div>
                                </div>
                            </th>

                            <td class="py-4 px-6">
                                <a href="posts/{{$post->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="py-4 px-6">
                                <form method="POST" action="/admin/posts/{{ $post->id }}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="text-xs text-gray-400">Delete</button>
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


</x-app-layout>
