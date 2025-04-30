

<?php $__env->startSection('content'); ?>
<div class="guide-assign-container">
    <h2 class="section-heading">Assign Guide to Tour</h2>

    <form method="POST" action="/assign-guide" class="guide-form">
        <?php echo csrf_field(); ?>

        <label for="guide_name">Guide Name</label>
        <input type="text" id="guide_name" name="guide_name" placeholder="Enter guide's full name" required>

        <label for="package">Select Tour Package</label>
        <select id="package" name="package" required>
            <option value="">-- Choose a Destination --</option>
            <option>Goa</option>
            <option>Manali</option>
            <option>Kerala</option>
            <option>Himachal</option>
            <option>Nainital</option>
            <option>Kashmir</option>
        </select>

        <label for="assign_date">Assignment Date</label>
        <input type="date" id="assign_date" name="assign_date" required>

        <button type="submit" class="btn">Assign Guide</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\tour-operator\resources\views/assign_guide.blade.php ENDPATH**/ ?>