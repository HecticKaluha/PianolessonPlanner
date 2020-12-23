@push('style')
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

                    <form class=""
                          action="/slot/store"
                          method="post">
                        @csrf

{{--                        select period start--}}

{{--                        select period end--}}

{{--                        select days--}}

{{--                        select time--}}


                        <div class="bootstrap-iso bootstrap">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <!-- Form code begins -->
                                        <form method="post">
                                            <div class="form-group"> <!-- Date input -->
                                                <label class="control-label" for="date">Date</label>
                                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                                            </div>
                                            <div class="form-group"> <!-- Submit button -->
                                                <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                                            </div>
                                        </form>
                                        <!-- Form code ends -->

                                    </div>
                                </div>
                            </div>
                        </div>


                        <label for="startTime">Start time</label>

                    </form>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                var options={
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            })
        </script>
    @endpush
</x-app-layout>
