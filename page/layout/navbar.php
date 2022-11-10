<style>

  .dropdown {
  /* position: relative;
  display: inline-block; */
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
      <div class="container top1logo">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
             
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
            <div class="w-64 h-full shadow-md absolute" id="sidenavSecExample">
            <div class="col-span-12">
                <a href="index.html" class="logo col-span-6">
                <img  style="width: auto; height: 70px;"
                    class="img-fluid"
                    src="../assets//images//logoperpus.png"
                    alt=""/>
                  <h1 class="ml-4 text-l text-bold col-span-6" >Perpustakaan Bersama</h1>
                </a>
              </div>
        <ul class="relative px-1">
          <li class="relative">
            <a href="home.php" class="flex items-center text-md py-4 px-6 h-12 overflow-hidden text-gray-600 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <span>Dashboard</span></a>
            </li>
          <li class="relative">
            <a href="?page=katalog" class="flex items-center text-md py-4 px-6 h-12 overflow-hidden text-gray-600 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <span>Katalog</span></a>
            </li>
            <li class="relative dropdown py-4">
                <a href="home.php" class="flex items-center text-md px-6 overflow-hidden text-gray-600 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <span>Master</span>
                <div class="dropdown-content">
                      <p class="text-left"><a class="text-dark-600" href="?page=buku">Data Buku</a></p>
                      <p class="text-left"><a class="text-dark-600" href="?page=kategori">Data Kategori Buku</a></p>
                      <p class="text-left"><a class="text-dark-600" href="?page=rak">Data Rak Buku</a></p>
                      <p class="text-left"><a class="text-dark-600" href="?page=data_peminjam">Data Peminjaman</a></p>
                    </div>
                </a>
                
            </li>
            <li class="relative dropdown py-4">
                <a href="home.php" class="flex items-center text-md px-6 overflow-hidden text-gray-600 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <span>Transaksi</span>
                <div class="dropdown-content">
                      <p class="text-left"><a class="text-dark-600" href="?page=peminjaman">Peminjaman Buku</a></p>
                      <p class="text-left"><a class="text-dark-600" href="?page=pengembalian">Pengembalian Buku</a></p>
                    </div>
                </a>
                
            </li>
        </ul>
    </div>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->