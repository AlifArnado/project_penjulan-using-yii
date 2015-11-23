<style type="text/css" media="screen">
    table.dataGrid {
        border-collapse:collapse;
        border:1px solid black;
        width: 100%;
        #font-size: 8px;
    }
    table.dataGrid tr {
        border:1px solid black;
        padding: 15px 15px 15px 15px;
    }

    .center {
        text-align:center;
    }

    .border {
        border:1px solid black;
    }
</style>

<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
?>

<h1>Stok Pembayaran No <?php echo $_GET['no_nota']; ?></h1>
	<table class="dataGrid">
		<tr bgcolor="aqua">
            <th>KD</th>
            <th>NAMA BARANG</th>
            <th>QTY</th>
            <th>SATUAN</th>
            <th>HARGA</th>
            <th>TOTAL</th>
		</tr>
		<?php 
			$hasil = $model->findAll();
			$jum=0;
		 ?>
		 <?php foreach ($hasil as $has): ?>
		 <tr>
		 	<td class="border"><?php echo $has->barang_id; ?></td>
            <td class="border"><?php echo $has->barang->nama_barang; ?></td>
            <td class="border"><?php echo $has->qty; ?></td>
            <td class="border"><?php echo $has->barang->satuan; ?></td>
            <td class="border"><?php echo number_format($has->barang->harga); ?></td>
            <td class="border"><?php echo number_format($has->barang->harga*$has->qty); ?></td>
         </tr>
         <?php $jum+=$has->barang->harga*$has->qty;?>
		 <?php endforeach ?>
		 <tr bgcolor="orange">
           <td colspan="5" scope="row">JUMLAH</td>
           <td class="border"><?php echo number_format($jum); ?></td>
		 </tr>	
	</table>