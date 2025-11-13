
<?php if(isset($schema) && $schema): ?>
    <?php if(is_array($schema)): ?>
        <?php $__currentLoopData = $schema; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schemaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script type="application/ld+json">
                <?php echo json_encode($schemaItem, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <script type="application/ld+json">
            <?php echo $schema; ?>

        </script>
    <?php endif; ?>
<?php endif; ?>


<?php if(isset($dynamicSchemas) && $dynamicSchemas->count() > 0): ?>
    <?php $__currentLoopData = $dynamicSchemas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($schema->is_active && $schema->validateSchemaData()): ?>
            <script type="application/ld+json">
                <?php echo $schema->getFormattedSchema(); ?>

            </script>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    
    <?php
        $fallbackSchemas = \App\Models\Schema::where('is_active', true)->get();
    ?>
    
    <?php if($fallbackSchemas->count() > 0): ?>
        <?php $__currentLoopData = $fallbackSchemas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($schema->validateSchemaData()): ?>
                <script type="application/ld+json">
                    <?php echo $schema->getFormattedSchema(); ?>

                </script>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php endif; ?> <?php /**PATH C:\wamp64\www\adminivf\resources\views/components/schema.blade.php ENDPATH**/ ?>