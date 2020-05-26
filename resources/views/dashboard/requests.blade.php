@extends('dashboard.layout')

@section('content')
    <div id="app" class="flex mt-5 w-full justify-center">

        <div class="bg-gray-100 rounded-md shadow-md p-4 w-11/12">
            <h1 class="md:text-3xl text-2xl font-semibold text-purple-500 tracking-wide">Requests</h1>
            {{--sorting--}}
            <div class="flex flex-wrap w-full">
                <div class="flex flex-wrap justify-start w-8/12">
                    {{--search--}}
                    <div class="my-1 md:my-3 mr-2">
                        <div class="relative text-gray-600">
                            <input type="input" name="search" placeholder="Search"
                                   class="bg-white border py-2 px-3 focus:border-purple-600 pr-5 rounded-md shadow-md text-sm focus:outline-none">

                            <svg class="h-4 w-4 focus:text-purple-600 fill-current absolute right-0 top-0 mt-3 mr-4"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                            </svg>
                        </div>
                    </div>
                    {{--grade--}}
                    <div class="my-1 md:my-3 mr-2">
                        <div class="flex">
                            {{--grade--}}
                            <div class="bg-white py-1 px-2 rounded-md shadow-md border border-gray-300 h-9">
                                <button
                                    class="py-1 px-1 text-sm hover:bg-purple-700 hover:text-white text-gray-700 rounded-md focus:outline-none">
                                    Grade 4
                                </button>
                                <button
                                    class="py-1 px-1 text-sm hover:bg-purple-700 hover:text-white text-gray-700 rounded-md focus:outline-none">
                                    Grade 5
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--type--}}
                    <div class="my-1 md:my-3 mr-2">
                        <div class="relative">
                            <select id="grid-state"
                                    class="block appearance-none text-gray-700 bg-white border focus:border-purple-600 pr-20 border-gray-300 text-gray-700 py-2 px-3 rounded-md text-sm focus:outline-none shadow-md">
                                <option>Periodontics</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                {{--pagination--}}
                <div class="flex justify-end w-4/12">
                    <div class="flex mt-0 sm:mt-3 self-end md:self-start">
                        <button @click="paginate(-1)"
                                type="button"
                                class="bg-white hover:bg-purple-600 hover:text-white focus:outline-none border focus:border-purple-600 border-gray-300 text-purple-700 font-extrabold text-md py-1 px-2 mr-2 rounded-md shadow-md">
                            <svg class="fill-current h-8 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M7.05 9.293L6.343 10 12 15.657l1.414-1.414L9.172 10l4.242-4.243L12 4.343z"/>
                            </svg>
                        </button>
                        <button @click="paginate(1)"
                                type="button"
                                class="bg-white hover:bg-purple-600 hover:text-white focus:outline-none border focus:border-purple-600 border-gray-300 text-purple-700 font-extrabold text-md py-1 px-2 rounded-md shadow-md">
                            <svg class="fill-current h-8 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{--requests table--}}
            <div class="grid grid-col-1 mt-4 overflow-auto">
                <div class="flex">
                    <table class="text-left w-full border-collapse">
                        <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead class="bg-purple-600">
                        <tr>
                            <th class="font-semibold rounded-tl-md py-2 px-3 text-sm text-gray-100">
                                Name
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Grade
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Type
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Patients
                            </th>
                            <th class="py-2 px-3 rounded-tr-md font-semibold text-sm text-gray-100">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Jwana smth
                                smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Fourth</td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Smth Smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                <div class="inset-y-0 right-0 flex">
                                    <select
                                        class="rounded-md px-2 text-gray-700 py-1 border border-gray-300 focus:outline-none focus:border-purple-600 shadow-md">
                                        <option>someone</option>
                                        <option>someone someone</option>
                                        <option>someone someone someone</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500 text-purple-800 font-semibold hover:text-purple-500 cursor-pointer">
                                save
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Jwana smth
                                smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Fourth</td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Smth Smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                <div class="inset-y-0 right-0 flex">
                                    <select
                                        class="rounded-md px-2 text-gray-700 py-1 border border-gray-300 focus:outline-none focus:border-purple-600 shadow-md">
                                        <option>someone</option>
                                        <option>someone someone</option>
                                        <option>someone someone someone</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500 text-purple-800 font-semibold hover:text-purple-500 cursor-pointer">
                                save
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Jwana smth
                                smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Fourth</td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Smth Smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                <div class="inset-y-0 right-0 flex">
                                    <select
                                        class="rounded-md px-2 text-gray-700 py-1 border border-gray-300 focus:outline-none focus:border-purple-600 shadow-md">
                                        <option>someone</option>
                                        <option>someone someone</option>
                                        <option>someone someone someone</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500 text-purple-800 font-semibold hover:text-purple-500 cursor-pointer">
                                save
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Jwana smth
                                smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Fourth</td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Smth Smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                <div class="inset-y-0 right-0 flex">
                                    <select
                                        class="rounded-md px-2 text-gray-700 py-1 border border-gray-300 focus:outline-none focus:border-purple-600 shadow-md">
                                        <option>someone</option>
                                        <option>someone someone</option>
                                        <option>someone someone someone</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500 text-purple-800 font-semibold hover:text-purple-500 cursor-pointer">
                                save
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Jwana smth
                                smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Fourth</td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Smth Smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                <div class="inset-y-0 right-0 flex">
                                    <select
                                        class="rounded-md px-2 text-gray-700 py-1 border border-gray-300 focus:outline-none focus:border-purple-600 shadow-md">
                                        <option>someone</option>
                                        <option>someone someone</option>
                                        <option>someone someone someone</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500 text-purple-800 font-semibold hover:text-purple-500 cursor-pointer">
                                save
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Jwana smth
                                smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Fourth</td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">Smth Smth
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                <div class="inset-y-0 right-0 flex">
                                    <select
                                        class="rounded-md px-2 text-gray-700 py-1 border border-gray-300 focus:outline-none focus:border-purple-600 shadow-md">
                                        <option>someone</option>
                                        <option>someone someone</option>
                                        <option>someone someone someone</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500 text-purple-800 font-semibold hover:text-purple-500 cursor-pointer">
                                save
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
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
                activatedStage: [],
                patients: [],
                page: 1,
                lastPage: 1,
            },
            methods: {
                activatingStage(stage) {
                    this.activatedStage = stage;
                    console.log(this.activatedStage)
                },
                paginate(value) {
                    this.page += value;
                    if (this.page > this.lastPage) {
                        this.page = this.lastPage;
                        return;
                    } else if (this.page < 1) {
                        this.page = 1;
                        return;
                    }
                    this.fetchData();
                },
            },

        })
    </script>

@endpush
