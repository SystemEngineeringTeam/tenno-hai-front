<x-app-layout>
    <div class="overflow-x-auto rounded-lg border border-gray-200 mx-16 mt-24 mb-64">
        <table class="min-w-full divide-y-2 divide-gray-200 text-sm">
            <thead>
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        名前
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        クリア数
                    </th>

                </tr>
            </thead>
            @foreach ($ranking as $rank)
                <tbody class="divide-y divide-gray-200">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $rank['name'] }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $rank['clear_count'] }}
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>

    @include('components.footer')
</x-app-layout>
