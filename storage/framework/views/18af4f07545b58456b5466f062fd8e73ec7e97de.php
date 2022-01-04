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
        
        <div class="p-3" style="width: 100%;">
            <div id="search">
                <form method="POST" style="display:flex;padding-top:10px">
                    <div class="form-group">
                        <input name="searchtext" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Search a Student">
                    </div>
                    <div style="bottom:0;padding-left:10px">
                        <button style="height:37px" name="searchbtn" type="submit" class="btn transparent-bg btn-primary">
                            <span class="material-icons-outlined">
                                search
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">selling price</th>                        
                        <th class="text-center" scope="col">actual price</th>
                        <th class="text-center" scope="col">dicount</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($product->name); ?></td>
                        <td class="text-center"><?php echo e($product->selling_price); ?></td>
                        <td class="text-center"><?php echo e($product->actual_price); ?></td>
                        <td class="text-center"><?php echo e($product->discount); ?>%</td>
                        <td class="text-center">
                            <form method="post">
                                <a style="height:23px" name="profileBtn" href="<?php echo e(route('admin.edit-product', $product->id)); ?>" type="submit" class="btn btn-sm">
                                    <span class="material-icons">
                                        edit
                                    </span>
                                </a>
                            </form>
                        </td>
                        <td class="text-center">
                            <form method="post">
                                <a name="deleteItem" class="btn btn-sm" href="<?php echo e(route('delete_product', $product->id)); ?>">
                                    <span class="material-icons">
                                        delete
                                    </span>
                                </a>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <form method="post" action="<?php echo e(route('insert_product')); ?>" class="p-3 d-flex flex-column align-items-center" enctype="multipart/form-data" style=" margin-top:10px">
            <?php echo csrf_field(); ?>
            <div >
            <input type="text" name="name" placeholder="Product Name" class="form-control shadow-none m-2">
            <input type="text" name="category" placeholder="category" class="form-control shadow-none m-2">
            <input type="text" name="subcategory" placeholder="subCategory" class="form-control shadow-none m-2">
            <input type="number"  name="selling_price" placeholder="Selling price" class="form-control shadow-none m-2">
            <input type="number"  name="actual_price" placeholder="Actual price" class="form-control shadow-none m-2">
            <input type="number"  name="discount" placeholder="discount" class="form-control shadow-none m-2">
            <input type="file" accept="image/*" name="product-images[]" class="product-images form-control shadow-none m-2" placeholder="image" multiple>
            </div>

            <div class="preview_img d-flex flex-wrap" style="padding:10px 0;width: 230px;">
            </div>
            
            <button type="submit" name="createNewCourseBtn" class="addbtn btn btn-primary ">Insert Product</button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH G:\xampp\htdocs\FlipkartClone\resources\views/admin/products.blade.php ENDPATH**/ ?>