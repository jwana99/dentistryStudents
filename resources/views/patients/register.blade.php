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
                {{--patient info--}}
                <div class="flex flex-wrap w-full mt-6 mb-3">
                    {{--the type--}}

                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-first-name">
                            Procedure Type:
                        </label>
                        <div class="relative w-full">
                            <select v-model="selected"
                                    class="appearance-none w-full shadow-lg bg-white text-gray-600 text-sm border border-gray-400 rounded-md py-2 px-4 focus:outline-none focus:border-purple-400 ">
                                <option disabled hidden :value="null">Choose the procedure you want</option>
                                <option v-for="procedure in procedures">
                                    @{{ procedure }}
                                </option>
                            </select>
                            <div class="pointer-events-none absolute right-0 top-0 mt-3 mr-2">
                                <svg class="fill-current bg-white text-center text-purple-400 h-4 w-4"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <input name="procedure_type" type="text" hidden v-bind:value="selected">
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
                procedures: [],
                selected: null
            },
            methods: {
                showProcedures() {
                    axios.get('/students/api/procedures/fifth').then(response => {
                        this.procedures = response.data.procedures;
                    })
                }
            },
            mounted() {
                this.showProcedures();
            }
        })
    </script>
@endpush
{{--#todo--}}
{{--#8E5BB3--}}
