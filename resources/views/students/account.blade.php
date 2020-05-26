@extends('layout')

@section('content')
    <div id="app" class="flex items-center h-auto w-full sm:w-8/12 mt-24 mb-12">
        <div class="bg-gray-100 p-4 sm:pr-14 rounded-lg w-full sm:w-8/12 shadow-xl">
            {{--mobile avatar--}}
            <div class="flex justify-center">
                <div class="w-1/2">
                    <img src="https://api.adorable.io/avatars/285/hehe"
                         class="block lg:hidden rounded-full shadow-2xl -mt-20 mb-4 h-auto w-full bg-cover bg-center border border-gray-400">
                </div>
            </div>
            {{--Students Name--}}
            <div class="w-full">
                <h1 class="text-2xl font-extrabold capitalize tracking-wide leading-8 text-gray-800 pb-1 border-b border-gray-600">
                    Orjuwan Dakhil Jawadh
                </h1>
            </div>
            {{--Patients Progress--}}
            <div class="flex relative flex-col mt-4">
                <h1 class="text-sm text-gray-700 font-bold mb-1">
                    Patients Progress
                </h1>
                <div class="h-32 overflow-y-auto">
                    <div class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                        <div class="flex justify-start w-full">
                            <div class="flex">
                                <p class="text-white text-xs self-center font-semibold leading-5">
                                    Someone Someone - 07816151297
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end w-full">
                            <div>
                          <span
                              class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-red-700">
                            Unfinishedh
                        </span>
                            </div>

                        </div>

                    </div>
                    <div class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                        <div class="flex justify-start w-full">
                            <div class="flex">
                                <p class="text-white text-xs self-center font-semibold leading-5">
                                    Someone Someone - 07816151297
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end w-full">
                            <div>
                          <span
                              class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-300 text-purple-700">
                            Finished
                        </span>
                            </div>

                        </div>

                    </div>
                    <div class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                        <div class="flex justify-start w-full">
                            <div class="flex">
                                <p class="text-white text-xs self-center font-semibold leading-5">
                                    Someone Someone - 07816151297
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end w-full">
                            <div>
                          <span
                              class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-300 text-purple-700">
                            Finished
                        </span>
                            </div>

                        </div>

                    </div>
                    <div class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                        <div class="flex justify-start w-full">
                            <div class="flex">
                                <p class="text-white text-xs self-center font-semibold leading-5">
                                    Someone Someone - 07816151297
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end w-full">
                            <div>
                          <span
                              class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-300 text-purple-700">
                            Finished
                        </span>
                            </div>

                        </div>

                    </div>
                    <div class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                        <div class="flex justify-start w-full">
                            <div class="flex">
                                <p class="text-white text-xs self-center font-semibold leading-5">
                                    Someone Someone - 07816151297
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end w-full">
                            <div>
                          <span
                              class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-300 text-purple-700">
                            Finished
                        </span>
                            </div>

                        </div>

                    </div>
                    <div class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                        <div class="flex justify-start w-full">
                            <div class="flex">
                                <p class="text-white text-xs self-center font-semibold leading-5">
                                    Someone Someone - 07816151297
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end w-full">
                            <div>
                          <span
                              class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-300 text-purple-700">
                            Finished
                        </span>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="h-5 sm:h-10 gradient absolute w-full bottom-0">
                </div>
            </div>
            {{--Request patient--}}
            <div class="flex w-full justify-end mt-6">
                <a class="text-sm font-semibold leading-5 text-blue-600 hover:text-blue-400 cursor-pointer">
                    Need A Patient?
                </a>
            </div>
        </div>
        {{--desktop avatar--}}
        <div>
            <img src="https://api.adorable.io/avatars/285/hehe"
                 class="rounded-none w-0 sm:w-full -ml-10 lg:rounded-lg shadow-2xl hidden lg:block">
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
