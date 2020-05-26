@extends('layout')

@section('content')
    <div id="app"
         class="flex flex-wrap bg-gray-100 shadow-md rounded w-full sm:w-5/12 p-4 mt-10">
        <form action="/students/request" method="post">
            @csrf
            <h1 class="text-3xl mt-1 px-3 text-purple-700 font-semibold">Request a patient</h1>
            {{--patients you need--}}
            <div class="w-full px-3 mt-3">
                <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                    Number of finished patients
                </label>
                <input
                    class="text-center w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                    name="patients_needed" type="number" placeholder="10">
            </div>
            {{--type--}}
            <div class="flex flex-wrap w-full mt-3 mb-3">
                {{--the type--}}
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-first-name">
                        Type:
                    </label>
                    <div class="flex flex-wrap justify-center">
                        <div class="flex mx-1 sm:mx-2">
                            <input type="text" name="process_type" :value="activatedType" hidden>
                            <input
                                readonly
                                value="Filling"
                                @click="activatingType('Filling')"
                                :class="{'bg-purple-600': activatedType.includes('Filling')}"
                                class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                        </div>
                        <div class="flex mx-1 sm:mx-2">
                            <input
                                readonly
                                value="Cleaning"
                                @click="activatingType('Cleaning')"
                                :class="{'bg-purple-600': activatedType.includes('Cleaning')}"
                                class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                        </div>
                        <div class="flex mx-1 sm:mx-2">
                            <input
                                readonly
                                value="Detoothing"
                                @click="activatingType('Detoothing')"
                                :class="{'bg-purple-600': activatedType.includes('Detoothing')}"
                                class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                        </div>
                        <div class="flex mx-1 sm:mx-2">
                            <input
                                readonly
                                value="Drilling"
                                @click="activatingType('Drilling')"
                                :class="{'bg-purple-600': activatedType.includes('Drilling')}"
                                class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>
            {{--submit--}}
            <div class="flex w-full justify-end items-end mt-2 sm:mt-6">
                <button type="submit"
                        class="bg-white hover:bg-purple-600 hover:text-white hover:border-purple-400 text-gray-800 focus:outline-none font-semibold text-sm py-1 px-3 my-2 border-b-2 border-purple-600 rounded-md shadow-md">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>
        var vue = new Vue({
            el: '#app',
            data: {
                activatedType: [],
            },
            methods: {
                activatingType(type) {
                    this.activatedType = type;
                },
            },
        })
    </script>
@endpush
