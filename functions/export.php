<?php
require_once('../connection.php');
$id_webinar = $_GET["nama"];
$output = '';

$query = mysqli_query($con, "SELECT * FROM registrants WHERE id_webinar = $id_webinar");

if (mysqli_num_rows($query) > 0) {
    $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>NPM</th>
                    <th>Jurusan</th>
                    <th>Domisili</th>
                    <th>Email</th>
                    <th>Nomor Whatsapp</th>
                    </tr>
  ';
    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
        $output .= '
    <tr>  
                         <td>' . $no . '</td>  
                         <td>' . $data['nama'] . '</td>  
                         <td>' . $data['kelas'] . '</td>  
                         <td>' . $data['npm'] . '</td>  
                         <td>' . $data['jurusan'] . '</td>  
                         <td>' . $data['domisili'] . '</td>  
                         <td>' . $data['email'] . '</td>  
                         <td>' . $data['nomor_wa'] . '</td>  
    </tr>
   ';
        $no++;
    }
    $output .= '</table>';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=data.xls');
    echo $output;
}
