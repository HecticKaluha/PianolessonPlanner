@push('styles')
    <link rel="stylesheet" href="https://toert.github.io/Isolated-Bootstrap/versions/3.3.7/iso_bootstrap3.3.7min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit slot') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="bootstrap relative"
                          action="{{route('updateSlot', ['slot' => $slot->id])}}"
                          method="post">
                        @csrf

                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-12/12 w-full">
                                <label class="control-label" for="date">Date</label>
                                <input class="form-control" data-datePicker id="date" name="date" value="{{$slot->date->format('d/m/Y')}}" placeholder="MM-DD-YYYY" type="text"/>
                                @if ($errors->has('date'))
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-6/12">
                                <label class="control-label" for="startTime">Start time</label>
                                <input class="form-control" data-timePicker id="startTime" name="startTime" value="{{$slot->startTime->format('H:i')}}" placeholder="HH:MM" type="text"/>
                                @if ($errors->has('startTime'))
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $errors->first('startTime') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group w-6/12">
                                <label class="control-label" for="endTime">End time</label>
                                <input class="form-control" data-timePicker id="endTime" name="endTime" value="{{$slot->endTime->format('H:i')}}"placeholder="HH:MM" type="text"/>
                                @if ($errors->has('endTime'))
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $errors->first('endTime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group w-12/12 w-full">
                            <label class="control-label" for="category">Category</label>
                            <select class="form-control" name="category" id="category">
                                <option value="null" {{$slot->category->id == null ? 'selected' : ''}} > - none selected - </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$slot->category->id == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <span class="text-red-500" role="alert">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-12/12 w-full">
                                <label class="control-label" for="name">Name</label>
                                <input class="form-control" name="name" id="name" placeholder="Name" value="{{$slot->name}}" type="text">
                                @if ($errors->has('name'))
                                    <span class="text-red-500" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group w-12/12 w-full">
                                <label class="control-label" for="email">E-mail</label>
                                <input class="form-control" name="email" id="email" placeholder="E-mail" value="{{$slot->email}}" type="text">
                                @if ($errors->has('email'))
                                    <span class="text-red-500" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group w-12/12 w-full">
                            <label class="control-label" for="remarks">Remarks</label>
                            <textarea class="form-control" name="remarks" id="remarks" placeholder="Remarks" rows="8">{{$slot->remarks}}</textarea>

                            @if ($errors->has('remarks'))
                                <span class="text-red-500" role="alert">
                                    <strong>{{ $errors->first('remarks') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input class="bg-blue-500 cursor-pointer w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

        <script>
            var defaults = {
                calendarWeeks: true,
                showClear: false,
                showClose: true,
                allowInputToggle: true,
                useCurrent: false,
                showTodayButton: true,
                ignoreReadonly: true,
                toolbarPlacement: 'top',
                locale: 'nl',
                icons: {
                    time: 'fa fa-clock-o',
                    date: 'fa fa-calendar',
                    up: 'fa fa-angle-up',
                    down: 'fa fa-angle-down',
                    previous: 'fa fa-angle-left',
                    next: 'fa fa-angle-right',
                    today: 'fa fa-dot-circle-o',
                    clear: 'fa fa-trash',
                    close: 'fa fa-times'
                }
            };

            $(function() {
                var optionsDate = $.extend({}, defaults, {
                    format:'DD-MM-YYYY',
                    minDate: new Date(),
                });
                var optionsTime = $.extend({}, defaults, {
                    format:'HH:mm',
                });

                $('input[data-datePicker]').datetimepicker(optionsDate);
                $('input[data-timePicker]').datetimepicker(optionsTime);
            });
        </script>
    @endpush
</x-app-layout>
