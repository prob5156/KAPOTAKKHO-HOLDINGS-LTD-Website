<?php $__env->startSection('title', 'Department Management'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <h2 class="text-xl font-bold text-slate-800">All Departments</h2>
        <a href="<?php echo e(route('admin.departments.create')); ?>" class="bg-amber-600 hover:bg-amber-700 text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Add Department
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="bg-slate-50 text-slate-500 border-b border-slate-100 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Department Info</th>
                        <th class="px-6 py-4 font-semibold">Code</th>
                        <th class="px-6 py-4 font-semibold">Manager</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                    <?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    </div>
                                    <div>
                                        <div class="font-medium text-slate-900"><?php echo e($department->name); ?></div>
                                        <div class="text-xs text-slate-500 w-48 truncate"><?php echo e($department->description ?? 'No description provided'); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4"><span class="px-2 py-1 bg-slate-100 rounded text-xs font-mono text-slate-600"><?php echo e($department->code); ?></span></td>
                            <td class="px-6 py-4"><?php echo e($department->manager ?? 'Not Assigned'); ?></td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 rounded-full text-xs font-medium <?php echo e($department->status === 'Active' ? 'bg-green-100 text-green-700' : 'bg-rose-100 text-rose-700'); ?>">
                                    <?php echo e($department->status); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="<?php echo e(route('admin.departments.edit', $department)); ?>" class="text-indigo-600 hover:text-indigo-900 mx-2 font-medium">Edit</a>
                                <form action="<?php echo e(route('admin.departments.destroy', $department)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-rose-600 hover:text-rose-900 font-medium">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-slate-500">
                                <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                No departments found. Click "Add Department" to create one.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\KAPOTAKKHO_NEW\resources\views/admin/departments/index.blade.php ENDPATH**/ ?>