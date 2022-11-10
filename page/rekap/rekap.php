<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}

$no = 1;
$rekap = mysqli_query($koneksi, "SELECT * FROM kas");

?>

<section>
    <div class="container">
        <p class="text-2xl font-bold mb-4">
            Data Rekapitulasi
        </p>
        <span class="text-normal mb-4">
            Data Rekapitulasi dari kas yang masuk dan keluar
        </span>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        #
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Kode
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Jenis
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Masuk
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Masuk
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($rekap as $key => $item) :
                                ?>
                                    <tr class="border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <p><?= $key + 1;?></p>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <p><?= $item['kode']; ?></p>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <p><?= $item['tgl']?></p>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <p><?= $item['keterangan'];?></p>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <p><?= $item['jenis'];?></p>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <p><?=  " Rp." . number_format($item['jumlah'], 0, '', '.'); ?></p>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <p><?=  " Rp." . number_format($item['keluar'], 0, '', '.'); ?></p>
                                        </td>
                                    </tr>

                                    <?php 
                                        $total = $total + $item['jumlah'];
                                        $total_keluar = $total_keluar + $item['keluar'];

                                        $saldo_akhir = $total - $total_keluar;                      
                                    ?>
                                
                                <?php endforeach; ?>
                                <tr class="border-b">
                                    <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <p>Total Kas Masuk</p>
                                    </td>
                                    <td colspan="2" class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <p class="text-green-500"><?=  " Rp." . number_format($total, 0, '', '.'); ?></p>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <p>Total Kas Keluar</p>
                                    </td>
                                    <td colspan="2" class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium">
                                        <p class="text-red-500"><?=  " Rp." . number_format($total_keluar, 0, '', '.'); ?></p>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <p>Saldo Akhir</p>
                                    </td>
                                    <td colspan="2" class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium">
                                        <p class="text-gray-500"><?=  " Rp." . number_format($saldo_akhir, 0, '', '.'); ?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>