@extends('layout')

@section('content')
    <div id="app"
         class="flex flex-wrap relative sm:w-10/12 w-full mb-8 sm:mb-0 h-screen align-middle items-center justify-end">
        {{--form--}}
        <div :class="{invisible: isInvisible}"
             class="flex flex-wrap absolute p-4 mb-4 bg-gray-100 items-center rounded shadow-lg sm:w-5/12 w-full z-50">
            <form method="POST" action="/students/register" class=" w-full justify-center">
                @csrf
                <h1 class="text-3xl px-3 text-purple-700 font-semibold">Sign up form</h1>

                {{--name--}}
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Full Name
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="name" type="text" placeholder="Jane Doe">
                </div>
                {{--email--}}
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Email address
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="email" type="text" placeholder="me@jane.com">
                </div>
                {{--number--}}
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Phone number
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-500"
                        name="number" type="text" placeholder="077898898797">
                </div>
                {{--password--}}
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        password
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="password" type="password" placeholder="testtest8">
                </div>
                {{--pasword check--}}
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        password check
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        type="password" placeholder="testtest8">
                </div>
                {{--stage--}}
                <div class="flex flex-wrap w-full mt-3 mb-3">
                    <div class="w-full px-3 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-state">
                            College Year
                        </label>
                        <div class="flex flex-wrap justify-center">
                            <div class="flex mx-1 sm:mx-2">
                                <input
                                    readonly
                                    value="Fourth stage"
                                    @click="activatingStage('Fourth Stage')"
                                    :class="{'bg-purple-600': activatedStage.includes('Fourth Stage')}"
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                            </div>
                            <div class="flex mx-1 sm:mx-2">
                                <input
                                    readonly
                                    value="Fifth stage"
                                    @click="activatingStage('Fifth Stage')"
                                    :class="{'bg-purple-600': activatedStage.includes('Fifth Stage')}"
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                            </div>
                            <input type="text" hidden v-bind:value="activatedStage" name="stage">
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-end items-end mt-1 sm:mt-4">
                    <button type="submit"
                            class="bg-white hover:bg-purple-600 hover:text-white hover:border-purple-400 focus:outline-none text-gray-800 font-semibold text-sm py-1 px-3 my-2 border-b-2 border-purple-600 rounded-md shadow-md">
                        Sign up
                    </button>
                </div>
            </form>
        </div>

        {{--welcoming--}}
        <div class="flex justify-around flex-wrap absolute bg-gray-100 shadow-lg rounded w-full z-40 p-10">
            <div class="flex flex-col sm:w-6/12 w-full">

                <h1 class="text-4xl sm:text-5xl text-purple-700 tracking-wide font-semibold w-full">
                    Welcome to our platform
                </h1>
                <p class="text-start text-md sm:text-sm text-purple-900 font-hairline mt-2">
                    This platform is dedicated to dentistry students for make the process of finding patients easier and
                    faster!
                    <br>
                    If you still don't have an account please
                    <a @click="isInvisible =! isInvisible, isVisible =! isVisible"
                       class="font-extrabold text-md text-purple-900 hover:text-purple-600 cursor-pointer">
                        SIGN UP
                    </a>
                    or if already have an account you can access it by
                    simply clicking
                    <a class="font-extrabold text-md text-purple-900 hover:text-purple-600 cursor-pointer">
                        LOGIN
                    </a>
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
                activatedStage: '',
            },
            methods: {
                activatingStage(stage) {
                    this.activatedStage = stage;
                    console.log(this.activatedStage)
                },
            },

        })
    </script>
@endpush
{{--#8E5BB3--}}
