    <div class="nav nav-tabs">
        <div class="nav-item">
            <a class="nav-link {{request()-> is('/') ? 'active' : null}}" href="/">Tabel</a> 
        </div> 
        <div class="nav-item ">
            <a class="nav-link {{request()-> is('Tambah') ? 'active' : null}}" href="/Tambah">Tambah</a>   
        </div>    
    </div>
