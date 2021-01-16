<h2>Tentang Saya</h2>
<img src="<?=base_url();?>assets/img/me.jpg" class="rounded" alt="Me" width="200" height="250">
<p>Website ini adalah cerita tentang aku dan putriku Inara</p>
<h3>Menu Kiri</h3>
<ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <?php
            $link = "latihan6/controller2/pelanggan_view";
            $caption = "Master Pelanggan"; 
            $properti = array(
                'class'=>"nav-link",
            );
            echo anchor($link,$caption,$properti);
            $link = "latihan6/controller3/barang_view";
            $caption = "Master Barang"; 
            $properti = array(
                'class'=>"nav-link",
            );
            echo anchor($link,$caption,$properti);
            $link = "#";
            $caption = "Master User"; 
            $properti = array(
                'class'=>"nav-link",
            );
            echo anchor($link,$caption,$properti);
        ?>
    </li>
</ul>
<hr class="d-sm-none">
