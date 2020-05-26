<?php $__env->startSection('content'); ?>
    <div id="app" class="flex mt-5 w-full justify-center">
        <div class="bg-gray-100 rounded-md shadow-md p-4 w-11/12">
            <h1 class="md:text-3xl text-2xl font-semibold text-purple-500 tracking-wide">Patients</h1>
            
            <div class="flex flex-wrap w-full">
                <div class="flex flex-wrap justify-start w-8/12">
                    
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
                </div>
                
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

            
            <div class="grid grid-col-1 mt-4 overflow-x-auto overflow-y-auto">
                <div class="flex">
                    <table class="text-left w-full border-collapse">
                        <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead class="bg-purple-600">
                        <tr>
                            <th class="font-semibold rounded-tl-md py-2 px-3 text-sm text-gray-100">
                                Name
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Type
                            </th>
                            <th class="py-2 px-3 rounded-tr-md font-semibold text-sm text-gray-100">
                                Number
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="patient in patients">
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                {{ patient.name }}
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                {{ patients.type }}
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-b border-gray-500">
                                {{ patient.number }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                patients: [],
                page: 1,
                lastPage: 1,
            },
            methods: {
                fetchData() {
                    axios.get(`/dashboard/api/patients?page=${this.page}`).then(response => {
                        this.patients = response.data.patients.data;
                        this.lastPage = response.data.patients.lastPage;
                    })
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
            mounted() {
                this.fetchData();
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/dashboard/patients.blade.php ENDPATH**/ ?>