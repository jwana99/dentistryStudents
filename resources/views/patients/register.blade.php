@extends('layout')

@section('content')
    <div id="app"
         class="flex flex-wrap relative sm:w-10/12 w-full mt-2 mb-8 sm:mb-0 h-screen align-middle items-center justify-end">
        {{--form--}}
        <div :class="{invisible: isInvisible}"
             class="flex flex-wrap absolute p-4 bg-gray-100 items-center rounded shadow-lg sm:w-5/12 w-full z-50">
            <form method="POST" action="/patients/register" class=" w-full justify-center">
                @csrf
                <h1 class="text-3xl mt-1 px-3 text-purple-700 font-semibold">Sign up form</h1>
                {{--name--}}
                <div class="w-full px-3 mt-6">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Full Name
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="name" type="text" placeholder="Jane Doe">
                </div>
                {{--number--}}
                <div class="w-full px-3 mt-5">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Phone number
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-500"
                        name="number" type="text" placeholder="077898898797">
                </div>
                {{--email--}}
                <div class="w-full px-3 mt-5">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Email address
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-500"
                        name="email" type="text" placeholder="077898898797">
                    <h1 class="text-xs text-gray-600 italic">
                        PS: email is optional
                    </h1>
                </div>
                {{--patient info--}}
                <div class="flex flex-wrap w-full mt-6 mb-3">
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
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md sm:cursor-pointer">
                            </div>
                            <div class="flex mx-1 sm:mx-2">
                                <input
                                    readonly
                                    value="Cleaning"
                                    @click="activatingType('Cleaning')"
                                    :class="{'bg-purple-600': activatedType.includes('Cleaning')}"
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md sm:cursor-pointer">
                            </div>
                            <div class="flex mx-1 sm:mx-2">
                                <input
                                    readonly
                                    value="Detoothing"
                                    @click="activatingType('Detoothing')"
                                    :class="{'bg-purple-600': activatedType.includes('Detoothing')}"
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md sm:cursor-pointer">
                            </div>
                            <div class="flex mx-1 sm:mx-2">
                                <input
                                    readonly
                                    value="Drilling"
                                    @click="activatingType('Drilling')"
                                    :class="{'bg-purple-600': activatedType.includes('Drilling')}"
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md sm:cursor-pointer">
                            </div>
                        </div>
                    </div>
                </div>
                {{--Sign up--}}
                <div class="flex w-full justify-end items-end mt-2 sm:mt-6">
                    <button type="submit"
                            class="bg-white hover:bg-purple-600 hover:text-white hover:border-purple-400 text-gray-800 focus:outline-none font-semibold text-sm py-1 px-3 my-2 border-b-2 border-purple-600 rounded-md shadow-md">
                        Sign up
                    </button>
                </div>
            </form>
        </div>

        {{--welcoming--}}
        <div class="flex justify-around flex-wrap absolute bg-gray-100 shadow-lg rounded w-full z-40 sm:visible p-10">
            <div class="flex flex-col sm:w-6/12 w-full">

                <h1 class="text-4xl sm:text-5xl text-purple-700 tracking-wide font-semibold w-full">
                    Welcome to our platform
                </h1>
                <p class="text-start text-md sm:text-sm text-purple-900 font-hairline mt-2">
                    This platform is dedicated for dentistry students to make the process of finding patients easier and
                    faster!
                    <br>
                    You can benefit from this service by signing in and we will reach out to you soon enough so
                    <t @click="isInvisible =! isInvisible, isVisible =! isVisible"
                       class="font-extrabold text-md text-purple-900 hover:text-purple-600 cursor-pointer">
                        SIGN UP
                    </t>
                    now, what are you waiting for?
                </p>
            </div>
            {{--image--}}
            <div :class="{invisible: isVisible}"
                 class="flex sm:w-5/12 w-full mt-10">
                <img src="/fliped-sign-in.png" alt="">
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var vue = new Vue({
            el: '#app',
            data: {
                isInvisible: true,
                isVisible: false,
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
{{--#todo--}}
{{--#8E5BB3--}}
