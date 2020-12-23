@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
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

                    <form class="bootstrap"
                          action="/slot/store"
                          method="post">
                        @csrf

{{--                        select period start--}}

{{--                        select period end--}}

{{--                        select days--}}

{{--                        select starttime--}}

{{--                        select endtime--}}


                        <div class="form-group">
                            <label class="control-label" for="startDate">Start date</label>
                            <input class="form-control" data-datepicker id="startDate" name="startDate" placeholder="MM/DD/YYY" type="text"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="endDate">End date</label>
                            <input class="form-control" data-datepicker id="endDate" name="endDate" placeholder="MM/DD/YYY" type="text"/>
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

                        <div class="form-group">
                            <label class="control-label" for="startTime">Start time</label>
                            <input class="form-control" data-timePicker id="startTime" name="startTime" placeholder="HH:MM" type="text"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="endTime">End time</label>
                            <input class="form-control" data-timePicker id="endTime" name="endTime" placeholder="HH:MM" type="text"/>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function(){
                var date_input=$('input[data-datepicker]');
                var container=$('.bootstrap form').length>0 ? $('.bootstrap form').parent() : "body";
                var options={
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);

                $('#startDate').datepicker();
                $('#endTime').datepicker();
            })

        </script>
    @endpush
</x-app-layout>
