
<ul class="list">
    <li class="header">Menu</li>
    <li class="active">
        <a href="{!! url('/home') !!}">
            <i class="material-icons">home</i>
            <span>Home</span>
        </a>
        <a href="{!! route('transaksi.index') !!}">
            <i class="material-icons">payment</i>
            <span>Transaksi Perawatan</span>
        </a>
    </li>
    <li>
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">people</i>
            <span>Pelanggan</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="{!! route('pelanggan.create') !!}">
                    <span>Registrasi Pelanggan</span>
                </a>
            </li>
            <li>
                <a href="{!! route('pelanggan.index') !!}">
                    <span>Data Pelanggan</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <span>Top Up Saldo</span>
                </a>
            </li>
        </ul>
    </li>
    <a href="{!! route('pelanggan.index') !!}">
            <i class="material-icons">people</i>
            <span>Data Perawatan</span>
    </a>
    <a href="{!! route('pelanggan.index') !!}">
            <i class="material-icons">people</i>
            <span>Manajemen Service</span>
    </a>
    <a href="{!! route('pelanggan.index') !!}">
            <i class="material-icons">people</i>
            <span>Paket</span>
    </a>
    <a href="{!! route('user.index') !!}">
            <i class="material-icons">people</i>
            <span>Manajemen User</span>
    </a>
</ul>