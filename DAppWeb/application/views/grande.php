<table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Departamento</th>
    <th>Titulo</th>
  </tr>
  <tbody>
    <?php 
    //$departments;
    $respuesta3;
    foreach($respuesta3 as $resp): ?>
      <tr>
        <td><?php echo $resp->first_name ?></td>
        <td><?php echo $resp->last_name ?></td>
        <td><?php echo $resp->dept_name ?></td>
        <td><?php echo $resp->title ?></td>
        
        
      </tr>
    <?php endforeach;?>
  </tbody>
  
</table>