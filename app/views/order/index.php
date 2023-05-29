<?php

// var_dump($data);
?>

<h2 class="judul-halaman">Data Pemesanan</h2>

<a href="Tambah" class="btn">Tambah Pemesanan</a>

<table>
    <tr>
        <th>NO</th>
        <th>PEMBELI</th>
        <th>TANGGAL</th>
        <th>KODE</th>
        <th>TTL</th>
        <th>KURIR</th>
        <th>ONGKIR (Rp)</th>
        <th>DEADLINE PEMBAYARAN</th>
        <th>BATAL ORDER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php 
    $no = 1;
    foreach ($data['dataOrder'] as $row) { 
    ?>
    <tr>
        <td class="text-center" style="width: 50px;"><?= $no; ?></td>
        <td><?= $row['user_nama']; ?></td>
        <td class="text-center"><?= $row['order_tgl']; ?></td>
        <td class="text-center"><?= $row['order_kode']; ?></td>
        <td><?= $row['order_ttl']; ?></td>
        <td><?= $row['order_kurir']; ?></td>
        <td class="text-center"><?= $row['order_ongkir']; ?></td>
        <td class="text-center"><?= $row['order_byr_deadline']; ?></td>
        <td class="text-center"><?= $row['order_batal']; ?></td>
        <td class="text-center" style="width: 20px;">
            <a class="btn-edit" href="Edit/<?= $row['order_id']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </a>
        </td>
        <td class="text-center" style="width: 20px;">
            <a class="btn-delete" href="Delete/<?= $row['order_id']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
            </a>
        </td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>