<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Edit
        </h1>
    </div>
</div>

<div class="flex justify-center pt-20">
    <form action="{{route('package.update', $destin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="block">
            <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="name"
                value="{{ $destin->title }}">

            <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="founded"
                value="{{ $destin->description }}">

            <input
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="description"
                value="{{ $destin->url }}">

            <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                Submit
            </button>
        </div>
    </form>
</div>
