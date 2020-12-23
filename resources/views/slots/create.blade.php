@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make slots') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form class="bootstrap relative"
                          action="/slot/store"
                          method="post">
                        @csrf

                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-6/12">
                                <label class="control-label" for="startDate">Start date</label>
                                <input class="form-control" data-datePicker id="startDate" name="startDate" placeholder="MM/DD/YYY" type="text"/>
                            </div>

                            <div class="form-group w-6/12">
                                <label class="control-label" for="endDate">End date</label>
                                <input class="form-control" data-datePicker id="endDate" name="endDate" placeholder="MM/DD/YYY" type="text"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="" for="days">Select days</label>
                            <div>
                                <input type="checkbox" name="days" value="1"> Monday
                                <input type="checkbox" name="days" value="2"> Tuesday
                                <input type="checkbox" name="days" value="3"> Wednesday
                                <input type="checkbox" name="days" value="4"> Thursday
                                <input type="checkbox" name="days" value="5"> Friday
                                <input type="checkbox" name="days" value="6"> Saturday
                                <input type="checkbox" name="days" value="0"> Sunday
                            </div>
                        </div>

                        <div class="inline-flex w-full w-12/12 space-x-4">
                            <div class="form-group w-6/12">
                                <label class="control-label" for="startTime">Start time</label>
                                <input class="form-control" data-timePicker id="startTime" name="startTime" placeholder="HH:MM" type="text"/>
                            </div>
                            <div class="form-group w-6/12">
                                <label class="control-label" for="endTime">End time</label>
                                <input class="form-control" data-timePicker id="endTime" name="endTime" placeholder="HH:MM" type="text"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="bg-blue-500 cursor-pointer w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit button button-info" value="submit">
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
                minDate: new Date(),
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
                var optionsDate = $.extend({}, defaults, {format:'DD-MM-YYYY'});
                var optionsTime = $.extend({}, defaults, {
                    format:'HH:mm',
                });

                $('input[data-datePicker]').datetimepicker(optionsDate);
                $('input[data-timePicker]').datetimepicker(optionsTime);
            });

        </script>
    @endpush
</x-app-layout>
