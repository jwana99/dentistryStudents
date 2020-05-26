<?php $__env->startSection('content'); ?>
    <div id="app"
         class="flex flex-wrap relative sm:w-10/12 w-full mb-8 sm:mb-0 h-screen align-middle items-center justify-end">
        
        <div :class="{invisible: isInvisible}"
             class="flex flex-wrap absolute p-4 mb-4 bg-gray-100 items-center rounded shadow-lg sm:w-5/12 w-full z-50">
            <form method="POST" action="/students/register" class=" w-full justify-center">
                <?php echo csrf_field(); ?>
                <h1 class="text-3xl px-3 text-purple-700 font-semibold">Sign up form</h1>

                
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Full Name
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="name" type="text" placeholder="Jane Doe">
                </div>
                
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Email address
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="email" type="text" placeholder="me@jane.com">
                </div>
                
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        Phone number
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-500"
                        name="number" type="text" placeholder="077898898797">
                </div>
                
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        password
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        name="password" type="password" placeholder="testtest8">
                </div>
                
                <div class="w-full px-3 mt-3">
                    <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-first-name">
                        password check
                    </label>
                    <input
                        class="w-full text-gray-700 shadow-sm border-b-2 border-gray-7600 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-purple-600"
                        type="password" placeholder="testtest8">
                </div>
                
                <div class="flex flex-wrap w-full mt-3 mb-3">
                    <div class="w-full px-3 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-600 mb-1 text-xs" for="grid-state">
                            College Year
                        </label>
                        <div class="flex flex-wrap justify-center">
                            <div class="flex mx-1 sm:mx-2">
                                <input
                                    readonly
                                    name="stage"
                                    value="Fourth stage"
                                    @click="activatingStage('Fourth Stage')"
                                    :class="{'bg-purple-600': activatedStage.includes('Fourth Stage')}"
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                            </div>
                            <div class="flex mx-1 sm:mx-2">
                                <input
                                    readonly
                                    name="stage"
                                    value="Fifth stage"
                                    @click="activatingStage('Fifth Stage')"
                                    :class="{'bg-purple-600': activatedStage.includes('Fifth Stage')}"
                                    class="text-center focus:outline-none text-sm text-white bg-gray-700 rounded-md py-1 m-1 shadow-md cursor-pointer">
                            </div>
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
                    <t @click="isInvisible =! isInvisible, isVisible =! isVisible"
                       class="font-extrabold text-md text-purple-900 hover:text-purple-600 cursor-pointer">
                        SIGN UP
                    </t>
                    or if already have an account you can access it by
                    simply clicking
                    <t class="font-extrabold text-md text-purple-900 hover:text-purple-600 cursor-pointer">
                        LOGIN
                    </t>
                </p>
            </div>
            
            <div :class="{invisible: isVisible}"
                 class="flex sm:w-5/12 w-full mt-10">
                <img src="/fliped-sign-in.png" alt="">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        var vue = new Vue({
            el: '#app',
            data: {
                isInvisible: true,
                isVisible: false,
                activatedType: [],
                activatedStage: [],
                name: "test",
            },
            methods: {
                activatingType(type) {
                    let index = this.activatedType.indexOf(type);
                    if (index == -1) this.activatedType.push(type);
                    else this.activatedType.splice(index, 1);

                },
                activatingStage(stage) {
                    this.activatedStage = stage;
                    console.log(this.activatedStage)
                },
            },

        })
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/students/register.blade.php ENDPATH**/ ?>