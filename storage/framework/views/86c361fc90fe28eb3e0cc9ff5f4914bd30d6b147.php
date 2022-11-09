<?php $__env->startSection('encabezado'); ?>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
<br>
<div class="container">
    <form method="POST" action="<?php echo e(route('productos.store')); ?>">
        <?php echo csrf_field(); ?>
    <div class="form-row">

    <div class="form-group col-3">
      <label for="formGroupExampleInput">Nombre del producto</label>
      <input type="text" class="form-control" id="Nombre_del_producto" name="Nombre_del_Producto" placeholder="COMPUTADORA HP">
     </div>
    <div class="form-group col-3">
      <label for="formGroupExampleInput2">Detalle</label>
      <input type="text" class="form-control" id="Detalle" name="Detalle" placeholder="PANTALLA FULL HD">
    </div>
    <div class="form-group col-3">
        <label for="formGroupExampleInput2">Precio unitario</label>
        <input type="text" class="form-control" id="Precio_Unitario" name="Precio_Unitario" placeholder="5000">
      </div>
    <div class="form-group col-3">
        <label for="formGroupExampleInput2">Cantidad</label>
        <input type="text" class="form-control" id="Cantidad" name="Cantidad" placeholder="1">
      </div>
  </form>
    <div style="aling_center">
    <button type="submit" class="btn btn-primary">Enviar</button>

    <input type="submit"  class="btn btn-danger" onclick="history.back()" name="Cancelar" value="Cancelar">
    </div>
</div>
<br> <br> <br><br><br><br><br><br><br><br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('piepagina'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Examen\resources\views/alta.blade.php ENDPATH**/ ?>