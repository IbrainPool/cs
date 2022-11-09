<?php $__env->startSection('encabezado'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>

<div class="container">
    <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <table class="table">
     <thead>
            <tr>

            <th scope="col">Nombre del producto </th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Cantidad</th>

            </tr>
     </thead>
     <tbody >
        <tr >
         <td><a href="<?php echo e(route('productos.show',$producto->id)); ?>"><?php echo e($producto->Nombre_del_Producto); ?>/Ver Detalle</a></td>
            <td><?php echo e($producto->Precio_Unitario); ?> </td>
            <td><?php echo e($producto->Cantidad); ?></td>
        </tr>
     </tbody>
      </table>
      <br><br><br><br>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">NO HAY PRODUCTOS REGISTRADOS <img src="<?php echo e(asset('img/8.png')); ?>"  style="width: 55px; height: 55px;"  alt=""></h1>
            </div>
          </div>
   <?php endif; ?>

</div>
<br> <br> <br><br>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('piepagina'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Examen\resources\views/consulta.blade.php ENDPATH**/ ?>