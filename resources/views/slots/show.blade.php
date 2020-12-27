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

                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-12/12 w-full">
                                <label class="control-label font-bold" for="date">Date</label>
                                <p class="form-control" id="date">{{$slot->date->format('d/m/Y')}}</p>
                            </div>
                        </div>


                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-6/12">
                                <label class="control-label font-bold" for="startTime">Start time</label>
                                <p class="form-control" id="startTime">{{$slot->startTime->format('H:i')}}</p>
                            </div>
                            <div class="form-group w-6/12">
                                <label class="control-label font-bold" for="endTime">End time</label>
                                <p class="form-control" id="endTime">{{$slot->endTime->format('H:i')}}</p>
                            </div>
                        </div>

                        <div class="form-group w-12/12 w-full">
                            <label class="control-label font-bold" for="category">Category</label>
                            <p class="form-control" id="category">{{$slot->category->name}}</p>
                        </div>

                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-12/12 w-full">
                                <label class="control-label font-bold" for="name">Name</label>
                                <p class="form-control" id="name">{{$slot->name}}</p>
                            </div>

                            <div class="form-group w-12/12 w-full">
                                <label class="control-label font-bold" for="email">E-mail</label>
                                <p class="form-control" id="email">{{$slot->email}}</p>
                            </div>
                        </div>

                        <div class="form-group w-12/12 w-full">
                            <label class="control-label font-bold" for="remarks">Remarks</label>
                            <p class="form-control" id="remarks">{{$slot->remarks}}</p>
                        </div>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    @endpush
</x-app-layout>
