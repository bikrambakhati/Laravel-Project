<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Admissions</h1>
                <a class=" rounded-2xl bg-(--primary) py-2 px-2 text-white" href="/admission/index">Add New</a>
            </div>

            <div>
                {{-- {{ $courses }} --}}
                <table class="w-full mt-5 text-center gap-6">
                    <thead>
                        <tr>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">SN</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">name</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">Email</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">Phone</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">Course Id</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admission as $admission)
                            <tr>
                                <td class="border border-grey-300 px-3 py-2">{{ $admission->id }}</td>
                                <td class="border border-grey-300 px-3 py-2">{{ $admission->name }}</td>
                                <td class="border border-grey-300 px-3 py-2">{{ $admission->email }}</td>
                                <td class="border border-grey-300 px-3 py-2">{{ $admission->phone }}</td>
                                <td class="border border-grey-300 px-3 py-2">{{ $admission->course_id }}</td>
                                <td class="border border-grey-300 px-3 py-2">
                                    <div class="flex items-center gap-6">
                                        <form action="/admission/edit/{{ $admission->id }}" method="get">
                                            <button class="bg-[green] text-sm text-white rounded px-3 py-2"
                                                type="submit">
                                                Edit
                                            </button>
                                        </form>
                                        <form action="/admission/delete/{{ $admission->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="bg-[red] text-sm text-white rounded px-3 py-2"
                                                type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </div>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>
