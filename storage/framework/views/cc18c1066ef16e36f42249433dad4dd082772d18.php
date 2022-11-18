<?php $__env->startSection('content'); ?>

<div class="mt-10 mx-8">

    <h1 class="block text-center mb-10 text-4xl font-bold">Gestion des utilisateurs</h1>

<center>
    <table class="table-auto border-collapse border-2 border-slate-500">

        <thead>
        <tr>
            <th class="border border-slate-600 p-4">Name</th>
            <th class="border border-slate-600 p-4">Email</th>
            <th class="border border-slate-600 p-4">Role</th>
            <th class="border border-slate-600 p-4">Edit</th>
            <th class="border border-slate-600 p-4">Delete</th>
        </tr>
    </thead>

    <?php
        use App\Models\User;
        $users = User::all();
    ?>

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <tbody>
            <tr>
            <td class="border border-slate-600 p-4 text-center"><?php echo e($user->name); ?></td>
            <td class="border border-slate-600 p-4 text-center"><?php echo e($user->email); ?></td>
            <td class="border border-slate-600 p-4 text-center"><?php echo e($user->role); ?></td>
            <td class="border border-slate-600 p-4 text-center">
                <edit-user></edit-user>
                <div id="overlay" class="hidden">
                    <div id="popup" class="mx-auto  mt-10 sticky bg-white w-5/12 rounded-lg popup shadow-black p-4">
                     <!-- component -->
              <div class="flex items-center justify-center p-12">
                 <!-- Author: FormBold Team -->
                 <!-- Learn More: https://formbold.com -->
                 <div class="mx-auto w-full max-w-[550px]">
                   <form action="/updateUser/<?php echo e($user->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                     <div class="mb-3">
                       <label
                         for="name"
                         class="mb-3 block text-base font-medium text-[#07074D]"
                       >
                         Full Name
                       </label>
                       <input
                         type="text"
                         name="name"
                         id="name"
                         placeholder="Full Name"
                         class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                       />
                     </div>

                     <div class="mb-3">
                      <label
                        for="name"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                      >
                        Rôle given
                      </label>
                      <input
                        type="text"
                        name="role"
                        id="role"
                        placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                      />
                    </div>

                     <div class="mb-3">
                       <label
                         for="email"
                         class="mb-3 block text-base font-medium text-[#07074D]"
                       >
                         Email Address
                       </label>
                       <input
                         type="email"
                         name="email"
                         id="email"
                         placeholder="example@domain.com"
                         class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                       />
                     </div>
                     <div class="mb-3">
                       <label
                         for="password"
                         class="mb-3 block text-base font-medium text-[#07074D]"
                       >
                         Password
                       </label>
                       <input
                         type="password"
                         name="password"
                         id="password"
                         placeholder="Enter your password"
                         class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                       />
                     </div>
                     <div>
                       <button
                         class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
                       >
                         Submit
                       </button>
                     </div>
                   </form>
                 </div>
               </div>
                 </div> 
             </div>
            </td>
            <td class="border border-slate-600 p-4 text-center">
                <a href="/deleteUser/<?php echo e($user->id); ?>">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>                          
                    </button>
                </a>
            </td>
            </tr>
        </tbody>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
</table>

</center>
</div>

<center>
    <div class="mt-4">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>  
        </a> 
    </div>
</center>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_pages.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mallory/Documents/Stages/1st_year/agence_immobiliere/resources/views/admin_pages/UserManagement.blade.php ENDPATH**/ ?>