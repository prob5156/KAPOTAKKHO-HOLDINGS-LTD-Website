<?php $__env->startSection('title', 'Contact Inquiries'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <h2 class="text-xl font-bold text-slate-800">Contact Messages</h2>
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
                        <th class="px-6 py-4 font-semibold">Sender Details</th>
                        <th class="px-6 py-4 font-semibold">Subject</th>
                        <th class="px-6 py-4 font-semibold">Date</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                    <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-slate-50/50 transition-colors <?php echo e($contact->status === 'Unread' ? 'bg-amber-50/30' : ''); ?>">
                            <td class="px-6 py-4">
                                <div class="font-medium text-slate-900"><?php echo e($contact->name); ?></div>
                                <div class="text-xs text-slate-500"><?php echo e($contact->email); ?></div>
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-800"><?php echo e($contact->subject); ?></td>
                            <td class="px-6 py-4 text-xs text-slate-500"><?php echo e($contact->created_at->format('M d, Y h:i A')); ?></td>
                            <td class="px-6 py-4">
                                <?php
                                    $statusClasses = [
                                        'Unread' => 'bg-rose-100 text-rose-700 font-bold',
                                        'Read' => 'bg-slate-100 text-slate-600',
                                        'Replied' => 'bg-green-100 text-green-700',
                                    ];
                                    $class = $statusClasses[$contact->status] ?? 'bg-gray-100 text-gray-700';
                                ?>
                                <span class="px-2.5 py-1 rounded-full text-xs <?php echo e($class); ?>">
                                    <?php echo e($contact->status); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="<?php echo e(route('admin.contacts.show', $contact)); ?>" class="text-indigo-600 hover:text-indigo-900 mx-2 font-medium">View</a>
                                <form action="<?php echo e(route('admin.contacts.destroy', $contact)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-rose-600 hover:text-rose-900 font-medium">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-slate-500">
                                <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                No contact messages found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel\KAPOTAKKHO_NEW\resources\views/admin/contacts/index.blade.php ENDPATH**/ ?>