<?php
$file = file_get_contents('file.xml');
$movies = new SimpleXMLElement($file);

echo '<pre>';
print_r($movies);
echo '<pre>';
?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>PRN</th>
    <!--   <th>Type</th>
      <th>Status</th>
      <th>Expiration Date</th> -->
    </tr>
  </thead>
  <tbody>

<?php foreach ($movies->cdac->student as $stu):
  ?>
    <tr>
      <td><?php echo $stu->Profile->name; ?></td>
      <td><?php echo $stu->Profile->prn; ?></td>
     <!--  <td><?php echo $licenseElement->serviceDesc; ?></td>
      <td><?php echo $licenseElement->statusDesc; ?></td>
      <td><?php echo $licenseElement->expiredDate; ?></td> -->
    </tr>
<?php endforeach; ?>
  </tbody>
</table>