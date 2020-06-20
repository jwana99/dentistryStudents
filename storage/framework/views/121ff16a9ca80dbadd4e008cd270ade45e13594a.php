<?php $__env->startSection('content'); ?>
    <div id="app" class="">
        <div class="">
            <h1 class="md:text-3xl text-2xl font-semibold text-purple-500 tracking-wide">Students</h1>
            
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
                    
                    <div class="my-1 md:my-3 mr-2">
                        <div class="flex">
                            
                            <div class="bg-white text-gray-700 py-1 px-2 rounded-md shadow-md border border-gray-300">
                                <button @click="activateStage('fourth')"
                                        :class="{'bg-purple-700 text-white': fourth}"
                                        class="py-1 px-1 text-sm hover:bg-purple-700 hover:text-white focus:bg-purple-700 focus:text-white rounded-md focus:outline-none">
                                    Grade 4
                                </button>
                                <button @click="activateStage('fifth')"
                                        :class="{'bg-purple-700 text-white': fifth}"
                                        class="py-1 px-1 text-sm hover:bg-purple-700 hover:text-white focus:bg-purple-700 focus:text-white rounded-md focus:outline-none">
                                    Grade 5
                                </button>
                            </div>
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
                                Grade
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Current Status
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Email
                            </th>
                            <th class="font-semibold py-2 px-3 text-sm text-gray-100">
                                Number
                            </th>
                            <th class="py-2 px-3 rounded-tr-md font-semibold text-sm text-gray-100">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="student in searching">
                            <td class="capitalize text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                {{ student.name }}
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                {{ student.stage }}
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                <span
                                    :class="student.status =='available' ? 'bg-purple-200 text-purple-700'  : 'bg-red-200 text-red-700'"
                                    class="capitalize px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                                   {{ student.status }}
                                </span>
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                {{ student.email }}
                            </td>
                            <td class="text-sm py-2 px-3 border-t border-gray-400 border-gray-500">
                                {{ student.number }}
                            </td>
                            <td @click="deleteStudent(student.id)"
                                class="text-sm py-2 px-3 border-t border-gray-400 border-gray-400 text-red-700 font-semibold hover:text-red-500 cursor-pointer">
                                Delete
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
                students: [],
                page: 1,
                lastPage: 1,
                searched: '',
                fourth: null,
                fifth: null,
                stage: null,
            },
            methods: {
                activateStage(stage) {
                    if (stage == 'fourth') this.fourth = true, this.fifth = false;
                    else if (stage == 'fifth') this.fifth = true, this.fourth = false;
                    this.stage = stage
                    this.getData()
                },
                getData() {
                    axios.get('/dashboard/api/students', {
                        params:
                            {
                                page: this.page,
                                stage: this.stage,
                            }
                    }).then(response => {
                        this.students = response.data.students.data;
                        this.lastPage = response.data.students.last_page;
                        this.page = response.data.students.current_page;

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
                deleteStudent(id) {
                    axios.delete(`/dashboard/students/${id}`).then(response => {
                        console.log(response)
                        window.location.reload()
                    })
                }
            },
            computed: {
                searching() {
                    return this.students.filter(student => {
                        return student.name.toLocaleLowerCase().includes(this.searched.toLocaleLowerCase().trim())
                    })
                }
            },
            mounted() {
                this.getData()
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/dashboard/students.blade.php ENDPATH**/ ?>