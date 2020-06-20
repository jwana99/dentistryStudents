<?php $__env->startSection('content'); ?>
    <div id="app" class="">
        <div class="">
            <h1 class="md:text-3xl text-2xl font-semibold text-purple-500 tracking-wide">Patients</h1>
            
            <div class="flex flex-wrap w-full">
                <div class="flex flex-wrap justify-start w-8/12">
                    
                    <div class="my-1 md:my-3 mr-2">
                        <div class="relative text-gray-600">
                            <input v-model="searched" type="input" name="search" placeholder="Search"
                                   class="bg-white border py-2 px-3 focus:border-purple-600 pr-5 rounded-md shadow-md text-sm focus:outline-none">
                            <svg class="h-4 w-4 focus:text-purple-600 fill-current absolute right-0 top-0 mt-3 mr-4"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                            </svg>
                        </div>
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
                                Procedure Type
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Current Status
                            </th>
                            <th class="py-2 px-3 rounded-tr-md font-semibold text-sm text-gray-100">
                                Number
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="patient in searching">
                            <td class="capitalize text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                {{ patient.name }}
                            </td>
                            <td class="capitalize text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                {{ patient.procedure_type }}
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                <span
                                    :class="patient.status =='available' ? 'bg-purple-200 text-purple-700'  : 'bg-red-200 text-red-700'"
                                    class="capitalize px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                                    {{ patient.status }}
                                </span>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                {{ patient.number }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="flex border-t-2 border-purple-700 font-semibold w-full justify-between p-2 text-xs text-purple-700 tracking-wide leading-4">
                <div :class="{'text-gray-500' : page == 1}" @click="paginate(-1)"
                     class="flex cursor-pointer">< Previous
                </div>
                <div class="flex">Page {{ page }} of {{ lastPage }}</div>
                <div :class="{'text-gray-500' : lastPage == page}" @click="paginate(1)"
                     class="flex cursor-pointer">Next >
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
                searched: '',
            },
            methods: {
                getData() {
                    axios.get(`/dashboard/api/patients?page=${this.page}`).then(response => {
                        this.patients = response.data.patients.data;
                        this.lastPage = response.data.patients.last_page;
                        this.page = response.data.patients.current_page;
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
                    this.getData();
                },
            },
            computed: {
                searching() {
                    return this.patients.filter(patient => {
                        return patient.name.toLocaleLowerCase().includes(this.searched.toLocaleLowerCase().trim())
                    })
                }
            },
            mounted() {
                this.getData();
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/dashboard/patients.blade.php ENDPATH**/ ?>