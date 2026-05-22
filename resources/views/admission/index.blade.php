<x-layout>
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center mb-10">
                <h1 class="text-3xl font-semibold">Admission Create</h1>
                <a class="rounded-2xl bg-(--primary) py-2 px-2 text-white" href="/admission/create">Back</a>
            </div>
            <form action="/admission/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name"> Name</label>
                        <input type="text"name="name" id="name" class="border border-gray-400 w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text"name="email" id="email"
                            class="border border-gray-400 w-full px-2 py-1">
                    </div>

                </div>
                <div class="col-span-2">
                    <label for="phone">Contact Number</label>
                    <input type="tel"name="phone" id="phone" class="border border-gray-400 w-full px-2 py-1">

                </div>
                <div>
                    <label for="course_id">Enter your Course Id</label>
                    <select name="course_id"id="course_id" class="border border-gray-400 w-full px-2 py-1">
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text"name="course_id" id="course_id"
                        class="border border-gray-400 w-full px-2 py-1"> --}}
                </div>
                <div>
                    <button type="submit" class= "rounded bg-[green] py-2 px-2 text-white mt-5">Submit</button>
                </div>
            </form>


        </div>
    </section>
</x-layout>
