<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin','data' => []]); ?>
<?php $component->withName('admin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div style="display:flex;height: 100vh;">
        <?php 
        $sidebarItem = "Products";
        ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin-sidebar','data' => ['sidebarItem' => $sidebarItem]]); ?>
<?php $component->withName('admin-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['sidebarItem' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sidebarItem)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    <form method="post" action="<?php echo e(route('update_product')); ?>" class="p-3" enctype="multipart/form-data" >
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
        <input type="text" name="name" placeholder="Product Name" value="<?php echo e($product->name); ?>">
        <input type="text" name="category" placeholder="category" value="<?php echo e($product->category); ?>">
        <input type="text" name="subcategory" placeholder="subCategory" value="<?php echo e($product->subcategory); ?>">
        <input type="number"  name="price" placeholder="price" value="<?php echo e($product->price); ?>">
        <input type="number"  name="discount" placeholder="discount" value="<?php echo e($product->discount); ?>">
        <input type="file"  name="image" placeholder="image" >
        
        <button type="submit" name="createNewCourseBtn" class="addbtn btn btn-primary">Update Product</button>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/admin/edit-product.blade.php ENDPATH**/ ?>