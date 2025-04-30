

<?php $__env->startSection('content'); ?>
<div class="feedback-container">
    <h2 class="section-heading">We Value Your Feedback</h2>

    <form method="POST" action="/feedback" class="feedback-form">
        <?php echo csrf_field(); ?>

        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="feedback">Your Feedback</label>
        <textarea id="feedback" name="feedback" rows="5" placeholder="Share your thoughts with us..." required></textarea>

        <button type="submit" class="btn">Submit Feedback</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tour-operator\resources\views/feedback.blade.php ENDPATH**/ ?>