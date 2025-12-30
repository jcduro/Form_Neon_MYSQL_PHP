<?php
require_once __DIR__ . "/conexion.php"; 

$stmt = $pdo->query(
    "SELECT id, nombre, correo, telefono, pais, ciudad, fecha_registro
     FROM form_neon
     ORDER BY id DESC
     LIMIT 50");
$rows = $stmt->fetchAll();
?>

<?php if (!$rows): ?>
  <p class="vacio">Sin registros aún</p>
<?php else: ?>
  <div class="tabla-cont">
    <table class="neon-table">
      <thead>
        <tr>
          <th>#</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>País</th><th>Ciudad</th><th>Fecha</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $r): ?>
          <tr>
            <td><?= $r['id'] ?></td>
            <td><?= htmlspecialchars($r['nombre'])   ?></td>
            <td><?= htmlspecialchars($r['correo'])   ?></td>
            <td><?= htmlspecialchars($r['telefono']) ?></td>
            <td><?= htmlspecialchars($r['pais'])     ?></td>
            <td><?= htmlspecialchars($r['ciudad'])   ?></td>
            <td><?= date('d/m/Y H:i', strtotime($r['fecha_registro'])) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>
