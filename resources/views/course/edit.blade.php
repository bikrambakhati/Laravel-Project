<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center mb-10">
                <h1 class="text-3xl font-semibold">Edit Courses</h1>
                <a class="rounded-2xl bg-(--primary) py-2 px-2 text-white" href="/course/create">Back</a>
            </div>
            <form action="/course/update/{{ $course->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name">Course Name</label>
                        <input type="text"name="name" id="name"
                            placeholder="eg.Laravel"value="{{ $course->name }}"
                            class="border border-gray-400 w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="price">Course Price</label>
                        <input type="number"name="price" id="price" value="{{ $course->price }}"
                            class="border border-gray-400 w-full px-2 py-1">
                    </div>

                </div>
                <div class="col-span-2">
                    <label for="description">Description</label>
                    <textarea name="description"id="description" rows="8" class="border border-gray-400 w-full px-2 py-1">{{ $course->description }}"</textarea>
                </div>
                <div>
                    <button type="submit" class= "rounded bg-[green] py-2 px-2 text-white">Submit</button>
                </div>
            </form>


        </div>
    </section>
</x-layout>
