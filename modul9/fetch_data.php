<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  td {
    border: 1px solid black;
    padding: 8px;
  }
</style>

<body>
<table>
<tr>
    <td>ID BT</td>
    <td>NAMA</td>
    <td>EMAIL</td>
    <td>ISI</td>
</tr>
<?php
$hasil   = mysqli_query($con,"select *from buku_tamu");
if ($hasil) {
    while ($row =mysqli_fetch_row($hasil)) {
        echo "<tr>";
        echo "<td>". $row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td>";
    }   
}
?>
</table>
</body>