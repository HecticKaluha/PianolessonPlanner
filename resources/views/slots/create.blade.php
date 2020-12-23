@push('style')

@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make slots') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form class=""
                          action="/slot/store"
                          method="post">
                        @csrf

{{--                        select period start--}}

{{--                        select period end--}}

{{--                        select days--}}

{{--                        select time--}}



                        <label for="startTime">Start time</label>

                    </form>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    @endpush
</x-app-layout>
