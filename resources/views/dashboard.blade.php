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
                    <h2 class="text-2xl font-bold">Get in touch form submitted</h2>
                    <div class="overflow-x-auto rounded-lg border border-gray-200 mt-4">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="text-left">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Company Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Phone</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Services</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">About</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Details</th>
                            </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">RL Technologies</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John Doe</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">johnrl@yopmail.com</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">(210) 046 8975</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Telehealth Platform</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Customer</td>
                                    <td class="px-4 py-2 font-medium text-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus error quibusdam quas voluptatibus, possimus molestiae ex amet neque asperiores impedit? Amet cupiditate facilis laudantium quidem, ratione provident et dolores quasi!</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
