<?php if (isset($_SESSION['identity'])): ?>
    <h1>Hacer Pedido</h1>
    <p>
        <a href="<?=base_url?>carrito/index">Ver carrito</a>
    </p>
    <br/>
    <h3>Direccion para el envio:</h3> 
    <form action="<?=base_url?>pedido/add" method="POST">
      <label for="provincia">Provincia</label>
      <input type="text" name="provincia" required />

      <label for="localidad">Localidad</label>
      <input type="text" name="localidad" required />

      <label for="direccion">Direccion</label>
      <input type="text" name="direccion" required />

      <input type="submit" value="Confirmar pedido" />
    </form>
<?php else: ?>
    <h1>Necesitas estar identificado</h1>
    <p>Por favor inicia sesion para poder hacer el pedido</p>
<?php endif; ?>
