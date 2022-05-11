<?php include '../header.php' ?>

        <tr>
          <th scope="col">NIS</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Kelas</th>
          <th scope="col">Nama Panggilan</th>
          <th scope="col">Waktu Penjemputan</th>
          <th scope="col">Status</th>
          <th scope="col"><i class="fas fa-bolt"></i></th>
        </tr>
      </thead>
      <tbody>
        <?php $crud->dataviewguru("SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='5 B - SAUDAH R.A' ORDER BY TIMESCAN DESC");?>
      </tbody>
    </table>
  </div>

<?php include '../footer.php' ?>