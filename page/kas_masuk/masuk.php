<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
        die();
    }

    $no = 1;
    $data_masuk = mysqli_query($koneksi, "SELECT * FROM kas WHERE jenis = 'masuk' ");

    if(isset($_POST['simpan'])) {
        $kode = $_POST['kode'];
        $tgl = $_POST['tgl'];
        $ket = $_POST['ket'];
        $jml = $_POST['jml'];

        $insert = mysqli_query($koneksi, "INSERT INTO kas (kode, keterangan, tgl, jumlah, jenis, keluar) VALUES ('$kode', '$ket', '$tgl', '$jml', 'masuk', 0)");

        if($insert) {

            echo "
                <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = '';
                </script>";   
        }
    }
 
    if(isset($_POST['ubah'])) {
        $kode = $_POST['kode'];
        $ket = $_POST['ket'];
        $tgl = $_POST['tgl'];
        $jml = $_POST['jml'];

        $sql = mysqli_query($koneksi, "UPDATE kas SET keterangan = '$ket', tgl = '$tgl', jumlah = '$jml', jenis = 'masuk', keluar = 0 WHERE kode = '$kode' ");
        if($sql) {
            echo "
                <script>
                alert('Data Berhasil Diubah');
                document.location.href = '';
                </script>";     
        }
    }
?>

<section>
    <div class="flex justify-end">
        <button class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" type="button" onclick="toggleModal('modal-tambah')">
            Tambah Kas Masuk
        </button>
    </div>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-tambah">
        <form role="form" method="POST">    
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                        Tambah Kas Masuk
                        </h3>
                        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-tambah')">
                            <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                ×
                            </span>
                        </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <div class="flex flex-col justify-center">
                            <div class="mb-3 xl:w-96">
                                <label for="kode" class="form-label inline-block mb-2 text-gray-700">
                                    Kode
                                </label
                                >
                                <input
                                    type="text"
                                    class="
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                    "
                                    id="kode"
                                    name="kode"
                                    placeholder="Masukkan Kode"
                                />
                            </div>
                            <div class="mb-3 xl:w-96">
                                <label for="tgl" class="form-label inline-block mb-2 text-gray-700">
                                    Tanggal
                                </label
                                >
                                <input
                                type="date"
                                class="
                                    form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                "
                                id="tgl"
                                name="tgl"
                                placeholder="Example label"
                                />
                            </div>
                            <div class="mb-3 xl:w-96">
                                <label for="ket" class="form-label inline-block mb-2 text-gray-700">
                                    Keterangan
                                </label
                                >
                                <textarea
                                    class="
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                    "
                                    id="ket"
                                    name="ket"
                                    rows="3"
                                    placeholder="Keterangan....."
                                    ></textarea>
                            </div>
                            <div class="mb-3 xl:w-96">
                                <label for="jml" class="form-label inline-block mb-2 text-gray-700">
                                    Jumlah
                                </label
                                >
                                <input
                                type="text"
                                class="
                                    form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                "
                                id="jml"
                                name="jml"
                                placeholder="e.g 20000000"
                                />
                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-tambah')">
                            Tutup
                        </button>
                        <button class="bg-green-600 text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" name="simpan" type="submit" onclick="toggleModal('modal-tambah')">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-tambah-backdrop"></div>
</section>

<section>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table id="datatable" class="min-w-full">
                    <thead class="bg-white border-b">
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
                                Jumlah
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data_masuk as $key => $item) : ?>
                            <tr class="bg-gray-100 border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <?= $key + 1; ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $item['kode']?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?php $date = date_create($item['tgl']); ?>
                                    <?= date_format($date, 'd-m-Y'); ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $item['keterangan']; ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Rp. <?= number_format($item['jumlah'], 0, '', '.'); ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <button class="inline-block px-2 py-1 bg-green-500 text-white font-medium leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" type="button" onclick="toggleModal('modal-edit-<?= $item['kode']?>')">
                                       <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="?page=masuk&aksi=hapus&id=<?php echo $item['kode'];?>" class="text-white bg-red-500 px-2 py-1 rounded font-medium"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</section>

<?php foreach($data_masuk as $key => $item) : ?>
<section>
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-edit-<?php echo $item['kode'];?>">
        <form role="form" method="POST">    
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    <!--header-->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                        Tambah Kas Masuk
                        </h3>
                        <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-edit-<?php echo $item['kode'];?>')">
                            <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                ×
                            </span>
                        </button>
                    </div>
                    <!--body-->
                    <div class="relative p-6 flex-auto">
                        <div class="flex flex-col justify-center">
                            <div class="mb-3 xl:w-96">
                                <label for="kode" class="form-label inline-block mb-2 text-gray-700">
                                    Kode
                                </label
                                >
                                <input
                                    type="text"
                                    class="
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                    "
                                    id="kode"
                                    name="kode"
                                    value="<?= $item['kode']; ?>"
                                    placeholder="Masukkan Kode"
                                />
                            </div>
                            <div class="mb-3 xl:w-96">
                                <label for="tgl" class="form-label inline-block mb-2 text-gray-700">
                                    Tanggal
                                </label
                                >
                                <input
                                type="date"
                                class="
                                    form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                "
                                id="tgl"
                                name="tgl"
                                value="<?= $item['tgl']; ?>"
                                placeholder="Example label"
                                />
                            </div>
                            <div class="mb-3 xl:w-96">
                                <label for="ket" class="form-label inline-block mb-2 text-gray-700">
                                    Keterangan
                                </label
                                >
                                <textarea
                                    class="
                                        form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                    "
                                    id="ket"
                                    name="ket"
                                    rows="3"
                                    placeholder="Keterangan....."
                                    ><?= $item['keterangan']; ?></textarea>
                            </div>
                            <div class="mb-3 xl:w-96">
                                <label for="jml" class="form-label inline-block mb-2 text-gray-700">
                                    Jumlah
                                </label
                                >
                                <input
                                type="text"
                                class="
                                    form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                "
                                id="jml"
                                name="jml"
                                value="<?= $item['jumlah']; ?>"
                                placeholder="e.g 20000000"
                                />
                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-edit-<?php echo $item['kode'];?>')">
                            Tutup
                        </button>
                        <button class="bg-green-600 text-white active:bg-green-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" name="ubah" type="submit" onclick="toggleModal('modal-edit-<?php echo $item['kode'];?>')">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-edit-<?php echo $item['kode'];?>-backdrop"></div>
</section>
<?php endforeach;?>

<script type="text/javascript">
    function toggleModal(modalID){
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }
</script>