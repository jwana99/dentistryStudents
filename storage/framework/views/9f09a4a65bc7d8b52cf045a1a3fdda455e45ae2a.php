<?php $__env->startSection('content'); ?>
    <div id="app" class="flex bg-gray-100 shadow-md rounded-lg w-full sm:w-6/12 p-4 mt-10">
        <div class="w-full">
            <form action="/students/request" method="post">
                <?php echo csrf_field(); ?>
                <h1 class="text-3xl mt-1 text-purple-600 font-semibold w-full border-b pb-1 border-gray-600">Request a
                    patient</h1>
                
                <div class="w-full mt-3">
                    <label class="block tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Number of finished patients
                    </label>
                    <input
                        class="text-center w-full text-gray-700 shadow-sm border-b-2 border-gray-300 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="patients_needed" type="number" placeholder="10">
                </div>
                
                <div class="w-full mt-3">
                    <select
                        class="rounded-md bg-white px-3 text-gray-700 py-2 border-b-2 border-gray-300 focus:border-b focus:outline-none focus:border-purple-600 shadow-sm">
                        <option>someone</option>
                        <option>someone someone</option>
                        <option>someone someone someone</option>
                    </select>
                </div>
                
                <div class="flex w-full justify-end items-end mt-2 sm:mt-6">
                    <button type="submit"
                            class="bg-white hover:bg-purple-600 hover:text-white hover:border-purple-400 text-gray-800 focus:outline-none font-semibold text-sm py-1 px-3 my-2 border-b-2 border-purple-600 rounded-md shadow-md">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/students/requestPatient.blade.php ENDPATH**/ ?>