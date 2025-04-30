

<?php $__env->startSection('content'); ?>
<div class="custom-tour-container">
    <h2 class="section-heading">Customize Your Tour</h2>

    <form method="POST" action="/custom-tour" class="custom-tour-form">
        <?php echo csrf_field(); ?>

        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="destination">Destination Preference</label>
        <input type="text" id="destination" name="destination" placeholder="e.g., Manali, Kerala" required>

        <label for="days">Number of Days</label>
        <input type="number" id="days" name="days" placeholder="e.g., 5" min="1" required>

        <label for="activities">Activities You Want</label>
        <textarea id="activities" name="activities" rows="4" placeholder="e.g., Trekking, Sightseeing, Boating" required></textarea>

        <button type="submit" class="btn">Submit Custom Plan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tour-operator\resources\views/custom_tour.blade.php ENDPATH**/ ?>