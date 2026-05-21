<x-layout>
    <div>
        {{-- {{ $contacts }} --}}
        <table>
            <thead>
                <tr>
                    <th class="border border-gray-800 px-2 py-3">Id</th>
                    <th class="border border-gray-800 px-2 py-3">name</th>
                    <th class="border border-gray-800 px-2 py-3">contact</th>
                    <th class="border border-gray-800 px-2 py-3">adress</th>
                    <th class="border border-gray-800 px-2 py-3">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($contacts as $contact)
                    <tr>
                        <td class="border border-gray-300 px-2 py-3">{{ $contact->id }}</td>
                        <td class="border border-gray-300 px-2 py-3">{{ $contact->name }}</td>
                        <td class="border border-gray-300 px-2 py-3">{{ $contact->number }}</td>
                        <td class="border border-gray-300 px-2 py-3">{{ $contact->address }}</td>
                        <td class="border border-gray-300 px-2 py-3">
                            <div class="flex items-center gap-6">
                                <form action=""method="Post">
                                    <button type="submit"
                                        class="bg-[green] rounded-xl px-3 py-2 text-sm font-semibold text-white">Edit</button>
                                </form>
                                <form action="/contact/delete/{{ $contact->id }}"method="Post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                        class="bg-[red] rounded-xl px-3 py-2 text-sm font-semibold text-white">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-layout>
