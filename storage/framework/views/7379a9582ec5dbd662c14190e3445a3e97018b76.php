<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($post->title); ?> - My BBS
     <?php $__env->endSlot(); ?>

    <div class="back-link">
        &laquo; <a href="<?php echo e(route('posts.index')); ?>">Back</a>
    </div>

    <h1>
        <span><?php echo e($post->title); ?></span>
        <a href="<?php echo e(route('posts.edit', $post)); ?>">[Edit]</a>
        <form method="post" actions="<?php echo e(route('posts.destroy', $post)); ?>" id="delete_post">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>

            <button class="btn">[x]</button>
        </form>
    </h1>
    <p><?php echo nl2br(e($post->body)); ?></p>

    <script>
    	'use strict';

    	{
            document.getElementById('delete_post').addEventListener('submit',e =>{
                e.preventDefault();

                if(!confirm())
            })
        }
    </script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH /var/www/html/resources/views/posts/show.blade.php ENDPATH**/ ?>