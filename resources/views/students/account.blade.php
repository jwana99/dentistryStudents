@extends('layout')

@section('content')
    <div id="app" class="flex items-center h-auto w-full sm:w-8/12 mt-24 mb-12">
        <div class="bg-gray-100 p-4 pl- rounded-lg sm:w-8/12 shadow-xl">
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
        </div>

        <div class="sm:w-4/12 -ml-10">
            <img src="https://api.adorable.io/avatars/285/hehe"
                 class="rounded-lg w-full h-auto shadow-lg">
        </div>

    </div>
@endsection

@push('script')
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                student: {
                    name: "",
                    email: "",
                    number: "",
                    stage: "",
                }
            },
            methods: {
                getStudents() {
                    // axios.get('/').then(response->(this.name == data.respnose.name))
                }
            },
            mounted() {
                this.getStudents()
            }
        })
    </script>
@endpush
{{--<div class="flex-wrap w-full items-center sm:ml-10 mt-10">--}}
{{--    <div class="flex w-6/12">--}}
{{--        <!--Main Col-->--}}
{{--        <div id="profile"--}}
{{--             class="flex w-full lg:w-3/5 rounded-lg shadow-2xl bg-gray-100">--}}
{{--            <div class="p-1 md:p-5 text-center lg:text-left">--}}
{{--                <!-- Image for mobile view-->--}}
{{--                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"--}}
{{--                     style="background-image: url('https://api.adorable.io/avatars/285/student')"></div>--}}
{{--                <h1 class="text-3xl pt-6 sm:pt-1">The Full Name</h1>--}}
{{--                <div class="mx-auto lg:mx-0 w-full pt-2 border-b-2 border-gray-900 opacity-25"></div>--}}

{{--                <div class="flex flex-wrap ml-2 w-full mt-2">--}}
{{--                    <h1 class="text-2xl sm:ml-0">Current Patient</h1>--}}
{{--                    <h1 class="text-left text-gray-700 text-md tracking-wider mt-2 w-full">Name: patient</h1>--}}
{{--                    <h1 class="text-left text-gray-700 text-md tracking-wider w-full">Phone Number:--}}
{{--                        874578437864</h1>--}}
{{--                    <h1 class="text-left text-gray-700 text-md tracking-wider w-full">Procedure: cleaning</h1>--}}
{{--                    <h1 class="text-2xl mt-1 sm:ml-0">Past Patients</h1>--}}
{{--                    <h1 class="text-left text-gray-700 text-md tracking-wider mt-2 w-full">Name: patient</h1>--}}
{{--                    <h1 class="text-left text-gray-700 text-md tracking-wider w-full">Phone Number:--}}
{{--                        874578437864</h1>--}}
{{--                    <h1 class="text-left text-gray-700 text-md tracking-wider w-full">Procedure: cleaning</h1>--}}

{{--                                      <h1 class="text-2xl text-center sm:ml-0">No current patients</h1>--}}
{{--                </div>--}}

{{--                                <div class="flex flex-wrap w-full ml-2 sm:ml-0">--}}
{{--                                    <div class="flex w-full sm:w-1/2">--}}
{{--                                        <h1 class="text-3xl text-blue-500 font-semibold">11</h1>--}}
{{--                                        <h1 class="text-gray-900 text-sm font-semibold mt-4 ml-1">Finished Patients</h1>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex w-full sm:justify-end sm:w-1/2">--}}
{{--                                        <h1 class="text-3xl text-red-500 font-semibold">9</h1>--}}
{{--                                        <h1 class="text-gray-900 text-sm font-semibold mt-4 ml-1">Unfinished Patients</h1>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                <div class="flex w-full justify-end p-2 sm:p-0 mt-4">--}}
{{--                    <h1 class="text-blue-700 hover:text-blue-500 text-md cursor-pointer">Need a patient?</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="flex w-11/12 ml-3 sm:-ml-10 -mt-6 sm:mt-0 rounded-lg--}}
{{--                        sm:w-5/12">--}}
{{--        <!-- Big profile image for side bar (desktop) -->--}}
{{--        <img src="https://api.adorable.io/avatars/285/hehe"--}}
{{--             class="rounded-none lg:rounded-lg shadow-2xl">--}}
{{--        <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->--}}
{{--    </div>--}}
{{--</div>--}}
