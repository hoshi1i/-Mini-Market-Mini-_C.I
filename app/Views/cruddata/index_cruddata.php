<h2>Data Login</h2>

<table>
  <tr>
    <th>Gmail</th>
    <th>Password</th>
    <th>Username</th>
  </tr>
    <?php
        $no = 0;
        foreach ($db_login as $key)
        $no++;
    ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $key['password']; ?></td>
    <td><?php echo $key['username']; ?></td>
  </tr>
</table>
