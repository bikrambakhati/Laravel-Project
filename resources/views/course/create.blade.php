<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold">Courses</h1>
                <a class=" rounded-2xl bg-(--primary) py-2 px-2 text-white" href="/course/index">Add New</a>
            </div>

            <div>
                {{-- {{ $courses }} --}}
                <table class="w-full mt-5 text-center gap-6">
                    <thead>
                        <tr>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">Id</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">name</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">Price</th>
                            <th class="border border-grey-500 px-3 py-2 bg-[yellow]">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td class="border border-grey-300 px-3 py-2">{{ $course->id }}</td>
                                <td class="border border-grey-300 px-3 py-2">{{ $course->name }}</td>
                                <td class="border border-grey-300 px-3 py-2">{{ $course->price }}</td>
                                <td class="border border-grey-300 px-3 py-2">
                                    <div class="flex items-center gap-6">
                                        <form action="/course/edit/{{ $course->id }}" method="get">
                                            <button class="bg-[green] text-sm text-white rounded px-3 py-2"
                                                type="submit">
                                                Edit
                                            </button>
                                        </form>
                                        <form action="/course/delete/{{ $course->id }}" method="post">
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
