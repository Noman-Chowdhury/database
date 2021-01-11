<?php $__env->startSection('content'); ?>

<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">Add Products</button>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Subcategory</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->subcategories->name); ?></td>
            <td><?php echo e($product->subcategories->categories->name); ?></td>
            <td>
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>


            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>






  <!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModal5Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal5Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?php echo e(route('seller.addproduct')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Enter Product Name</label>
              <input type="text"  name="productname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Select Subcategory</label>
                <select name="subcategory">
                    <?php $__currentLoopData = $subcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($subcat->id); ?>"> <?php echo e($subcat->name); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Enter Product Description</label>
                <input type="text"  name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/backend/layouts/dashboard.blade.php ENDPATH**/ ?>