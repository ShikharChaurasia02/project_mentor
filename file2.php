 <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Contact Number</th>
          <th>Address</th>
          <th>Email</th>
          <th>Photo</th>
        </tr>
      </thead>
      <tbody>
    <?php
$xml = simplexml_load_file("file2.xml");
foreach ($xml->college->student as $ban):
?>
    <tr>
      <td><?php echo $ban->Profile->Name;?></td>
      <td><?php echo $ban->Profile->ContactNumber;?></td>
      <td><?php echo $ban->Profile->Address->AddressLine1;?></td>
      <td><?php echo $ban->Profile->Email;?></td>
      <td><?php echo $ban->Profile->Picture;?></td>
    </tr>
<?php
endforeach;
?>
      </tbody>
    </table>