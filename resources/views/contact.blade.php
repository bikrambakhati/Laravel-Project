<x-layout>
    <section>
        <div class="container py-10 ">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold mb-10">Fill Your Contact Info</h2>
                <a href="/contact/index" class="bg-(--primary) text-lg text-white rounded-2xl px-3 py-2">View Contacts</a>
            </div>
            <div>
                <form action="/contact/store" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 mb-3 gap-10">
                        <label for="name">Full Name</label>
                        <input class="border border-grey-300 w-fulll" type="text" name="name" id="name">
                        <label for="number">Contact number</label>
                        <input class="border border-grey-300 w-fulll" type="number" name="number" id="number">
                        <label for="address">Address</label>
                        <input class="border border-grey-300 w-fulll" type="text" name="address" id="address">
                        <label for="email">Email</label>
                        <input class="border border-grey-300 w-fulll" type="email" name="email" id="email">
                    </div>
                    <div>
                        <button type="submit" class="bg-[green] text-xl text-white px-3 py-2 mt-6">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
