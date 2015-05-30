<table>
  <tr>
    <th>Numero empleado</th>
    <th>Salario</th>
  </tr>
  <tbody>
    <?php 
    //$departments;
    $respuesta2;
    foreach($respuesta2 as $resp): ?>
      <tr>
        <td><?php echo $resp->emp_no ?></td>
        <td><?php echo $resp->salary ?></td>
      </tr>
    <?php endforeach;?>
  </tbody>
  <?=$this->pagination->create_links()?>
</table>