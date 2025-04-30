

<?php $__env->startSection('content'); ?>
<div class="dashboard-container">
    <h2 class="dashboard-title">Admin Dashboard - Submitted Data</h2>

    <!-- Bookings Section -->
    <div class="data-section">
        <h3>Bookings</h3>
        <?php if(session('bookings')): ?>
            <div class="data-cards">
                <?php $__currentLoopData = session('bookings'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <strong><?php echo e($booking['name']); ?></strong><br>
                        Booked <em><?php echo e($booking['package']); ?></em><br>
                        On: <?php echo e($booking['date']); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p>No bookings yet.</p>
        <?php endif; ?>
    </div>

    <!-- Assigned Guides Section -->
    <div class="data-section">
        <h3>Assigned Guides</h3>
        <?php if(session('assignments')): ?>
            <div class="data-cards">
                <?php $__currentLoopData = session('assignments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <strong><?php echo e($a['guide']); ?></strong><br>
                        Assigned to <em><?php echo e($a['tour']); ?></em><br>
                        On: <?php echo e($a['assign_date']); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p>No guides assigned.</p>
        <?php endif; ?>
    </div>

    <!-- Custom Tours Section -->
    <div class="data-section">
        <h3>Custom Tours</h3>
        <?php if(session('custom_tours')): ?>
            <div class="data-cards">
                <?php $__currentLoopData = session('custom_tours'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <strong><?php echo e($t['name']); ?></strong><br>
                        Requested: <em><?php echo e($t['destination']); ?></em><br>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p>No custom tours planned yet.</p>
        <?php endif; ?>
    </div>

    <!-- Feedback Section -->
    <div class="data-section">
        <h3>Feedbacks</h3>
        <?php if(session('feedbacks')): ?>
            <div class="data-cards">
                <?php $__currentLoopData = session('feedbacks'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <strong><?php echo e($f['name']); ?></strong><br>
                        <q><?php echo e($f['message']); ?></q>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p>No feedback submitted yet.</p>
        <?php endif; ?>
    </div>
</div>
<?php $__currentLoopData = session('bookings'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <?php echo e($booking['name']); ?> booked a tour to <?php echo e($booking['package']); ?> on <?php echo e($booking['date']); ?>

        <form action="<?php echo e(url('/admin/delete-booking/'.$index)); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(session('assignments')): ?>
    <?php $__currentLoopData = session('assignments'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($a['guide']); ?> assigned to <?php echo e($a['tour']); ?> on <?php echo e($a['assign_date']); ?>

            <form action="<?php echo e(url('/admin/delete-assignment/'.$index)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <li>No assignments yet.</li>
<?php endif; ?>
<?php if(session('custom_tours')): ?>
    <?php $__currentLoopData = session('custom_tours'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($t['name']); ?> requested custom tour to <?php echo e($t['destination']); ?>

            <form action="<?php echo e(url('/admin/delete-custom-tour/'.$index)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <li>No custom tours yet.</li>
<?php endif; ?>

<?php if(session('feedbacks')): ?>
    <?php $__currentLoopData = session('feedbacks'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($f['name']); ?> says: "<?php echo e($f['message']); ?>"
            <form action="<?php echo e(url('/admin/delete-feedback/'.$index)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <li>No feedback submitted yet.</li>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tour-operator\resources\views/admin_dashboard.blade.php ENDPATH**/ ?>