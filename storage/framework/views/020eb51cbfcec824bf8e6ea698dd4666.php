

<?php $__env->startSection('content'); ?>


<div class="packages-container">
    <h2 class="section-heading">Available Tour Packages</h2>

    <div class="package-cards">
        <?php
            $packages = [
                ['destination' => 'Goa', 'duration' => '3 Days', 'price' => '₹5000', 'image' => 'goa.jpg'],
                ['destination' => 'Manali', 'duration' => '5 Days', 'price' => '₹8000', 'image' => 'manali.jpg'],
                ['destination' => 'Kerala', 'duration' => '4 Days', 'price' => '₹7000', 'image' => 'kerala.jpg'],
                ['destination' => 'Himachal', 'duration' => '6 Days', 'price' => '₹8000', 'image' => 'himachal.jpg'],
                ['destination' => 'Nainital', 'duration' => '6 Days', 'price' => '₹7000', 'image' => 'nainital.jpg'],
                ['destination' => 'Kashmir', 'duration' => '4 Days', 'price' => '₹7000', 'image' => 'kashmir.jpg'],
            ];
        ?>

        <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="package-card">
            <img src="<?php echo e(asset('images/' . $package['image'])); ?>" alt="<?php echo e($package['destination']); ?>">
            <div class="card-content">
                <h3><?php echo e($package['destination']); ?></h3>
                <p><strong>Duration:</strong> <?php echo e($package['duration']); ?></p>
                <p><strong>Price:</strong> <?php echo e($package['price']); ?></p>
                <a href="/book" class="btn">Book Now</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tour-operator\resources\views/packages.blade.php ENDPATH**/ ?>