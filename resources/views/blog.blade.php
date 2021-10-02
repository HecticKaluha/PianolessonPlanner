@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
@endpush
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 post">
                    <a href="{{route('createPost')}}" class="dt-button buttons-create" tabindex="0" aria-controls="file-table" type="button">
                        <span><i class="fa fa-plus" aria-hidden="true"></i> Create</span>
                    </a>

                    <div class="post">
                        <style>
                            .post h1 {
                                font-size: 30px;
                                font-weight:bold;
                            }
                            .post h2 {
                                font-size: 27px;
                                font-weight:bold;
                            }
                            .post h3 {
                                font-size: 24px;
                                font-weight:bold;
                            }
                            .post h4 {
                                font-size: 21px;
                                font-weight:bold;
                            }
                            .post h5 {
                                font-size: 18px;
                                font-weight:bold;
                            }
                            .post h6 {
                                font-size: 15px;
                                font-weight:bold;
                            }
                            .post a{
                                text-decoration: underline;
                                color:grey;
                            }
                            .post a:hover{
                                color:darkgrey;
                            }
                            .post table, th, td{
                                border: solid thin;
                            }
                            .post ul{
                                list-style-type:disc;
                            }
                            .post ol{
                                list-style-type:decimal;
                            }
                            .post ol, .post ul{
                                padding:10px 0 10px 30px;
                            }
                            .mce-toc ul{
                                list-style-type:none;
                                padding:5px;
                            }

                            img{
                                display:inline;
                                margin:5px;
                            }

                        </style>
                        @foreach($posts as $post)
                            <div class="block border-1 overflow-auto my-4 p-4 post">
                                {!! $post->post !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
