<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li class="{{request()->is('/')?'active': ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="{{request()->is('barang')?'active': ''}}"><a href="/barang"><i class="fa fa-user-circle"></i> <span>Data Barang</span></a></li>
            <li class="{{request()->is('supplier')?'active': ''}}"><a href="/supplier"><i class="fa fa-users nav-icon"></i> <span>Data Supplier</span></a></li>
            <li class="{{request()->is('transaksi')?'active': ''}}"><a href="/transaksi"><i class="fa fa-id-card"></i> <span>Data Transaksi</span></a></li>
            <li class="{{request()->is('pembayaran')?'active': ''}}"><a href="/pembayaran"><i class="fa fa-calendar"></i> <span>Data Pembayaran</span></a></li>
            <li class="{{request()->is('pembeli')?'active': ''}}"><a href="/pembeli"><i class="fa fa-users nav-icon"></i> <span>Data Pembeli</span></a></li>


            <li class="{{request()->is('/')?'active': ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="{{request()->is('supplier')?'active': ''}}"><a href="/supplier"><i class="fa fa-users nav-icon"></i> <span>Data Supplier</span></a></li>
            <li class="{{request()->is('barang')?'active': ''}}"><a href="/barang"><i class="fa fa-user-circle"></i> <span>Data Barang</span></a></li>


            <li class="{{request()->is('/')?'active': ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="{{request()->is('pembeli')?'active': ''}}"><a href="/pembeli"><i class="fa fa-users nav-icon"></i> <span>Data Pembeli</span></a></li>
            <li class="{{request()->is('barang')?'active': ''}}"><a href="/barang"><i class="fa fa-user-circle"></i> <span>Data Barang</span></a></li>
            <li class="{{request()->is('transaksi')?'active': ''}}"><a href="/transaksi"><i class="fa fa-id-card"></i> <span>Data Transaksi</span></a></li>
            <li class="{{request()->is('pembayaran')?'active': ''}}"><a href="/pembayaran"><i class="fa fa-calendar"></i> <span>Data Pembayaran</span></a></li>


            {{-- <li class="{{request()->is('/')?'active': ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="{{request()->is('barang')?'active': ''}}"><a href="/barang"><i class="fa fa-user-circle"></i> <span>Data Barang</span></a></li>
            <li class="{{request()->is('supplier')?'active': ''}}"><a href="/supplier"><i class="fa fa-users nav-icon"></i> <span>Data Supplier</span></a></li>
            <li class="{{request()->is('transaksi')?'active': ''}}"><a href="/transaksi"><i class="fa fa-id-card"></i> <span>Data Transaksi</span></a></li>
            <li class="{{request()->is('pembayaran')?'active': ''}}"><a href="/pembayaran"><i class="fa fa-calendar"></i> <span>Data Pembayaran</span></a></li>
            <li class="{{request()->is('pembeli')?'active': ''}}"><a href="/pembeli"><i class="fa fa-users nav-icon"></i> <span>Data Pembeli</span></a></li> --}}
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>