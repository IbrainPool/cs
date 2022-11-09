<?php $__env->startSection('encabezado'); ?>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>

<div class="container">
<table class="table">


    <thead>
      <tr>

        <th scope="col">Nombre del producto </th>
        <th scope="col">Detalle</th>
        <th scope="col">Precio Unitario</th>
        <th scope="col">Cantidad</th>


      </tr>
    </thead>
    <tbody >
      <tr >
        <td><?php echo e($producto->Nombre_del_Producto); ?></td>
        <td><?php echo e($producto->Detalle); ?></td>
        <td><?php echo e($producto->Precio_Unitario); ?></td>
        <td><?php echo e($producto->Cantidad); ?></td>
      </tr>
    </tbody>
  </table>
  <input type="submit"  class="btn btn-success" onclick="history.back()" name="Cancelar" value="Regresar">

</div>
<br> <br> <br><br><br><br><br>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('piepagina'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Examen\resources\views/detalleproduc.blade.php ENDPATH**/ ?>