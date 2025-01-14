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
                    <h2 class="text-2xl font-bold mb-4">Contact Form Submissions</h2>
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200 bg-white text-sm">
                            <thead class="bg-gray-50 text-left">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">SL</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Requested On</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Company Name</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">First name</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Last name</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Phone</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Services</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Role</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Details</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($contactFormSubmissions as $key => $item)
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ ++$key }}
                                        </td >
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ \App\Helpers\SystemHelper::formatDate($item->created_at) ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->company_name }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->first_name }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->last_name }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->email }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->phone }}
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->services }}
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->about }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->details }}
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-4 py-2 text-center text-red-500 font-bold">
                                            No data found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="flex justify-between items-center px-4 py-2">
                            {{ $contactFormSubmissions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
