<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-4">Manage SEO</h2>
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200 bg-white text-sm">
                            <thead class="bg-gray-50 text-left">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">SL</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Page url</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Meta Title</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Description</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Keywords</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Canonical URL</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">OG Title</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">OG Description</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($items as $key => $item)
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->page_slug ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->title ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->description ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->keywords ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->canonical_url ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->og_title ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->og_description ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                            <form action="#" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="px-4 py-2 text-center text-red-500 font-bold">
                                            No data found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
