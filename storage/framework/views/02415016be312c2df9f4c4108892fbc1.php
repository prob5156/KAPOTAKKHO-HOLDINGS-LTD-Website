<?php $__env->startSection('title', 'Project Management'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <h2 class="text-xl font-bold text-slate-800">All Projects</h2>
        <div class="flex items-center gap-4 w-full sm:w-auto">
            <form action="<?php echo e(route('admin.projects.index')); ?>" method="GET" class="flex-1 sm:w-64">
                <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Search projects..." class="w-full px-4 py-2 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
            </form>
            <a href="<?php echo e(route('admin.projects.create')); ?>" class="bg-amber-600 hover:bg-amber-700 text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm flex items-center gap-2 whitespace-nowrap">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Project
            </a>
        </div>
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
                        <th class="px-6 py-4 font-semibold">Project Name</th>
                        <th class="px-6 py-4 font-semibold">Client</th>
                        <th class="px-6 py-4 font-semibold">Start Date</th>
                        <th class="px-6 py-4 font-semibold">End Date</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                    <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="font-medium text-slate-900"><?php echo e($project->name); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4"><?php echo e($project->client ?? 'Internal'); ?></td>
                            <td class="px-6 py-4"><?php echo e($project->start_date ? $project->start_date->format('M d, Y') : 'N/A'); ?></td>
                            <td class="px-6 py-4"><?php echo e($project->end_date ? $project->end_date->format('M d, Y') : 'N/A'); ?></td>
                            <td class="px-6 py-4">
                                <?php
                                    $statusClasses = [
                                        'Planning' => 'bg-blue-100 text-blue-700',
                                        'In Progress' => 'bg-amber-100 text-amber-700',
                                        'Completed' => 'bg-green-100 text-green-700',
                                        'On Hold' => 'bg-slate-200 text-slate-700',
                                    ];
                                    $class = $statusClasses[$project->status] ?? 'bg-gray-100 text-gray-700';
                                ?>
                                <span class="px-2.5 py-1 rounded-full text-xs font-medium <?php echo e($class); ?>">
                                    <?php echo e($project->status); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="<?php echo e(route('admin.projects.edit', $project)); ?>" class="text-indigo-600 hover:text-indigo-900 mx-2 font-medium">Edit</a>
                                <form action="<?php echo e(route('admin.projects.destroy', $project)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-rose-600 hover:text-rose-900 font-medium">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-slate-500">
                                <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                No projects found. Click "Add Project" to create one.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php if($projects->hasPages()): ?>
            <div class="px-6 py-4 border-t border-slate-100">
                <?php echo e($projects->withQueryString()->links()); ?>

            </div>
        <?php endif; ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\KAPOTAKKHO_NEW\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>