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
                    <h2 class="text-2xl font-bold mb-4">Clinicians Form Submissions</h2>
                    <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200 bg-white text-sm">
                            <thead class="bg-gray-50 text-left">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">SL</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Clinic Name</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Phone</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Specialization
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Specialization
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Practice size</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Preferred demo
                                        time</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Telehealth</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">About</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($items as $key => $item)
                                    <tr>
                                        <td>
                                            {{ ++$key }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->clinic_name ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->contact_name ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->contact_email ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->contact_phone ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->specialization ?? 'N/A' }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->practice_size ?? 'N/A' }}
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ \App\Helpers\SystemHelper::formatDate($item->preferred_demo_time) ?? ($item->preferred_demo_time ?? 'N/A') }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->telehealth }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $item->about_us }}
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

                        <!-- Pagination Links -->
                        <div class="flex justify-between items-center px-4 py-2">
                            {{ $items->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
