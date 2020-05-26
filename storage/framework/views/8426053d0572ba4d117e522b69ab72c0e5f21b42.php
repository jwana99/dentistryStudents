<?php $__env->startSection('content'); ?>
    <div id="app" class="flex items-center h-auto w-full sm:w-8/12 mt-24 mb-12">
        <div class="bg-gray-100 p-4 pl- rounded-lg sm:w-8/12 shadow-xl">
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
            test <br>
        </div>

        <div class="sm:w-4/12 -ml-10">
            <img src="https://api.adorable.io/avatars/285/hehe"
                 class="rounded-lg w-full h-auto shadow-lg">
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
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
<?php $__env->stopPush(); ?>






















































<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/students/account.blade.php ENDPATH**/ ?>