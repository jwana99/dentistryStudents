<?php $__env->startSection('content'); ?>
    <div id="app" class="flex items-center h-auto w-full sm:w-8/12 mt-24 mb-12">
        <div class="bg-gray-100 p-4 sm:pr-12 rounded-lg w-full sm:w-8/12 shadow-xl">
            
            <div class="flex justify-center">
                <div class="w-1/2">
                    <img src="https://api.adorable.io/avatars/285/<?php echo e(auth('student')->user()->id); ?>"
                         class="block lg:hidden rounded-full shadow-2xl -mt-20 mb-4 h-auto w-full bg-cover bg-center border border-gray-400">
                </div>
            </div>
            
            <div class="w-full">
                <h1 class="text-2xl font-extrabold capitalize tracking-wide leading-8 text-purple-600 pb-1 border-b border-gray-600">
                    <?php echo e(auth('student')->user()->name); ?>

                </h1>
            </div>
            

            <div class="flex flex-col w-full justify-start" v-show="showRequest">
                <label class="text-lg text-gray-700 font-bold mt-4 mb-2">
                    Procedure Type
                </label>
                <div class="flex">
                    <div class="relative w-full">
                        <select v-model="selected"
                                class="appearance-none w-full shadow-lg bg-white text-gray-600 text-sm border border-gray-400 rounded-md py-2 px-4 focus:outline-none focus:border-purple-400 ">
                            <option disabled hidden :value="null">Procedures</option>
                            <option v-for="procedure in procedures">
                                {{procedure}}
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
                    <button @click="sendRequest()"
                            type="submit"
                            class="bg-white transform focus:scale-105 ml-2 focus:border-purple-500 focus:outline-none border border-gray-400 text-xs text-purple-400 leading-5 tracking-wide py-2 px-4 shadow-lg rounded-md">
                        Send
                    </button>
                </div>
            </div>
            <div class="flex w-full justify-end mt-4">
                <a @click="requestPatient()"
                   class="text-xs font-semibold leading-5 text-purple-500 hover:text-purple-500 cursor-pointer">
                    Need A Patient?
                </a>
            </div>

            
            <div>
                <div class="flex relative flex-col mt-2 mb-2">
                    <h1 class="text-lg text-gray-700 font-bold">
                        Procedures Record
                    </h1>
                    <div class="h-32 overflow-y-auto">
                        <div v-for="patient in patients" class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                            <div class="flex justify-start w-full">
                                <div class="flex">
                                    <p class="text-white text-xs self-center font-semibold leading-5">
                                        {{ patient.name }} - {{ patient.number }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex justify-end w-full">
                                <div>
                          <span
                              class="capitalize px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-red-700">
                            {{patient.status}}
                        </span>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="h-5 sm:h-10 gradient absolute w-full bottom-0">
                    </div>
                </div>
                <div class="flex w-full justify-end self-end mt-6">
                    <a @click=""
                       class="text-xs font-semibold leading-5 text-purple-500 hover:text-purple-500 cursor-pointer">
                        Change Status?
                    </a>
                </div>
            </div>
        </div>
        
        <div>
            <img src="https://api.adorable.io/avatars/285/<?php echo e(auth('student')->user()->id); ?>"
                 class="rounded-none w-0 sm:w-full -ml-10 lg:rounded-lg shadow-2xl hidden lg:block">
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                stage: "<?php echo e(auth('student')->user()->stage); ?>",
                status: "<?php echo e(auth('student')->user()->status); ?>",
                procedures: [],
                selected: null,
                showRequest: false,
                patients: [],
            },
            methods: {
                showProcedures() {
                    if (this.stage == 'Fifth Stage') {
                        axios.get('/students/api/procedures/fifth').then(response => {
                            this.procedures = response.data.procedures;
                        })
                    }
                    if (this.stage == 'Fourth Stage') {
                        axios.get('/students/api/procedures/fourth').then(response => {
                            console.log(response)
                            this.procedures = response.data.procedures;
                        })
                    }
                },
                requestPatient() {
                    this.showRequest = !this.showRequest;
                },
                sendRequest() {
                    if (this.status == 'unavailable') {
                        return alert("finish what's in your plate first bitch")
                    } else {
                        axios.post('/students/requests', {
                            procedure: this.selected,
                        })
                            .then(function (response) {
                                console.log(alert('success'));

                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                    }
                },
                getMyPatients() {
                    axios.get('/students/api/patients').then(response => {
                        this.patients = response.data.patients
                    })
                }
            },
            mounted() {
                this.showProcedures();
                this.getMyPatients();

            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/students/account.blade.php ENDPATH**/ ?>