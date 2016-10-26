<h1>lista de usuarios</h1>

<table>
      <tr>
      <th>Usernama</th>
      <th>Password</th>
      </tr>
<?php foreach ($users as $user): ?>
     <tr>
	     <td><?php echo $user; ?> </td>
	     <td></td>
     </tr>

<?php endforeach; ?>
</table>