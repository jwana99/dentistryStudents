@extends('dashboard.layout')

@section('content')
    <div id="app" class="flex mt-5 w-full justify-center">
        <div class="bg-gray-100 rounded-md shadow-md p-4 w-11/12">
            a bitchy bitch.
        </div>
    </div>
@endsection
@push('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {},
            methods: {},
            mounted() {}
        });
    </script>
@endpush
