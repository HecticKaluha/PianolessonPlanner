@push('styles')

@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View slots') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form class="bootstrap relative"
                          action="{{route('destroySlot', ['slot'=> $slot->id])}}"
                          method="post">
                        @csrf

                        <h2 class="text-xl pb-4">Are you sure you want to remove the slot below?</h2>
                        @include('slots.details')
                        <div class="form-group w-full inline-flex space-x-4">
                            <input class="w-6/12 my-2 bg-red-500 cursor-pointer hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Yes, delete">
                            <a href="{{url()->previous()}}" class="w-6/12 my-2 block text-center bg-gray-500 cursor-pointer hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">No</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    @endpush
</x-app-layout>
