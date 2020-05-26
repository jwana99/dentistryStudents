<?php $__env->startSection('content'); ?>
    <div class="flex flex-col sm:mt-18 my-8 items-center md:w-1/2 w-full bg-gray-100 rounded border-2 p-4">
        <h1 class="text-xl text-gray-900 uppercase mt-6 mb-2">Create Your Account</h1>
        <div class="mx-auto lg:mx-0 w-full sm:w-1/2 border-b-2 border-gray-900 opacity-25"></div>
        
        <form method="POST" action="/register" class="w-full md:w-3/4 justify-center">
            <?php echo csrf_field(); ?>
            <div class="w-full px-3 mt-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-first-name">
                    Full Name
                </label>
                
                <input
                    class="w-full text-gray-700 border border-gray-400 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-gray-600"
                    type="text" name="name" placeholder="Jane Doe">
            </div>
            <div class="w-full px-3 mt-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-first-name">
                    Email Adress
                </label>
                
                <input
                    class="w-full te    xt-gray-700 border border-gray-400 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-gray-600"
                    type="text" name="email" placeholder="janedoe@gmail.com">
            </div>
            <div class="w-full px-3 mt-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-first-name">
                    Phone Number
                </label>
                
                <input
                    class="w-full text-gray-700 border border-gray-400 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-gray-600"
                    type="text" name="number" placeholder="07816151297">
            </div>
            <div class="w-full px-3 mt-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-first-name">
                    Password
                </label>
                
                <input
                    class="w-full text-gray-700 border border-gray-400 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-gray-600"
                    type="text" name="password" placeholder="Jane Doe">
            </div>
            <div class="w-full px-3 mt-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-first-name">
                    Password check
                </label>
                
                <input
                    class="w-full text-gray-700 border border-gray-400 rounded-md py-2 px-3 leading-tight focus:outline-none bg-white focus:border-gray-600"
                    type="text" placeholder="Jane Doe">
            </div>
            <div class="flex flex-wrap w-full mt-3 mb-3">
                <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-state">
                        College Year
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full border border-gray-400 text-gray-700 py-2 px-3 pr-8 rounded-md leading-tight focus:outline-none bg-white focus:border-gray-600"
                            name="stage" id="grid-state">
                            <option>Fourth Stage</option>
                            <option>Fifth Stage</option>
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
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-state">
                        Type
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full border border-gray-400 text-gray-700 py-2 px-3 pr-8 rounded-md leading-tight focus:outline-none bg-white focus:border-gray-600"
                            name="process_type" id="grid-state">
                            <option>Filling</option>
                            <option>Filling</option>
                            <option>Filling</option>
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
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jawana\Desktop\teethStudents\resources\views/sudents/form.blade.php ENDPATH**/ ?>