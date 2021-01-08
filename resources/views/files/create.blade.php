@push('styles')

@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make file') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="bootstrap relative"
                          action="{{url('/file/store')}}"
                          method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="w-full mb-3">
                            <span class="text-green-500" role="alert">
                                <strong>{{ session('success') }}</strong>
                            </span>
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="files">Select files</label>
                            <input id="files" name="files[]" type="file" accept=".jpeg,.png,.jpg,.gif,.svg" class="py-1 text-gray-700 bg-white text-sm focus:outline-none focus:shadow-outline w-full w-12/12" style="transition: all 0.15s ease 0s;" required multiple>
                            <span class="text-red-500" role="alert">
                                    <strong>{{ $errors->first() }}</strong>
                            </span>
                        </div>

                        <div class="">
                            <input class="bg-blue-500 cursor-pointer w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    @endpush
</x-app-layout>
