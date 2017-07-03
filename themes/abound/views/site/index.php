<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl;
?>

<div class="row-fluid">


    <div class="span9">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-picture"></span>Deskripsi',
            'titleCssClass' => ''
        ));
        ?>

        <div style="height: 180px;width:100%;margin-top:15px; margin-bottom:15px;">
            <p> Aset mempunyai sifat sebagai manfaat ekonomik dan bukan sebagai sumber ekonomik karena manfaat ekonomik tidak membatasi bentuk atau jenis sumber ekonomik yang dapat dimasukkan sebagai aset yang umumnya terbagi manjadi aset tetap dan tidak berwujud. Dengan banyaknya asset yang dimiliki oleh instansi tentu saja perlu adanya manajemen yang mengelolaan informasi tersebut.

            </p>
            <p>Manajemen asset menjadi bahasan yang cukup serius mengingat umur ekonomis asset yang berbeda dan butuh penanganan lebih lanjut. Secara umum, Manajemen Aset berarti proses pengelolaan aset mulai dari perencanaan (planning), pengadaan (acquisition), pengoperasian dan pemeliharaan (operation and maintenance), dan penghapusan (disposal) yang terus menerus dimonitor sehingga prosesnya berjalan dengan baik dan strategis dalam mendukung tercapainya tujuan suatu organisasi. Peran penting manajemen aset, baik di sektor publik maupun sektor swasta, semakin diakui dan tidak kalah dengan peran manajemen keuangan dan manajemen sumber daya manusia.</p>
        </div>

        <?php $this->endWidget(); ?>

        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-picture"></span>Alur',
            'titleCssClass' => ''
        ));
        ?>

        <div style="height: 180px;width:100%;margin-top:15px; margin-bottom:15px;">
            <p>
                Pada sistem Aplikasi Management Aset terdapat 4 alur penggunaan, sebagai berikut:
            </p>
            <ol>
                <li>
                    Pengaturan Sistem (Data Operator)
                    Pada tahap awal, tentukan operator atau pengguna yang dapat mengakses aplikasi ini. Tentukan personil baik sebagai operator maupun personil departemen. Isikan datanya secara lengkap pada menu setting.

                </li>
                <li>
                    Pengelolaan Data Master
                    Pada alur ini, input data departemen yang ada, lokasi, kategori barang, jenis barang, merk barang, vendor, ruangan, pemilik ruangan, dan personil.

                </li>

                <li>
                    Pengelolaan Inventarisasi
                    Setelah 2 alur telah terpenuhi, selanjutnya aplikasi ini mulai dapat difungsikan sebagaimana operasional harian. Pada pengelolaan ini terdapat beberapa fitur diantaranya Pengadaan, Barang, Barkas, Disposal, Audit, Service, Penyusutan, Mutasi, Sewa, Pinjam, dan Hibah. Sesuai fungsinya sebagaimana penjelasan pada sub Fitur dan Fungsi.

                </li>
            </ol>
        </div>

        <?php $this->endWidget(); ?>

        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => '<span class="icon-picture"></span>Fitur',
            'titleCssClass' => ''
        ));
        ?>

        <div style="height: 180px;width:100%;margin-top:15px; margin-bottom:15px;">
            <p> 
                Aset mempunyai sifat sebagai manfaat ekonomik dan bukan sebagai sumber ekonomik karena manfaat ekonomik tidak membatasi bentuk atau jenis sumber ekonomik yang dapat dimasukkan sebagai aset yang umumnya terbagi manjadi aset tetap dan tidak berwujud. Dengan banyaknya asset yang dimiliki oleh instansi tentu saja perlu adanya manajemen yang mengelolaan informasi tersebut.
            </p>
            <ol>
                <li>
                    Pengaturan Sistem (Data Operator)
                    Pada tahap awal, tentukan operator atau pengguna yang dapat mengakses aplikasi ini. Tentukan personil baik sebagai operator maupun personil departemen. Isikan datanya secara lengkap pada menu setting.

                </li>
                <li>
                    Pengelolaan Data Master
                    Pada alur ini, input data departemen yang ada, lokasi, kategori barang, jenis barang, merk barang, vendor, ruangan, pemilik ruangan, dan personil.

                </li>

                <li>
                    Pengelolaan Inventarisasi
                    Setelah 2 alur telah terpenuhi, selanjutnya aplikasi ini mulai dapat difungsikan sebagaimana operasional harian. Pada pengelolaan ini terdapat beberapa fitur diantaranya Pengadaan, Barang, Barkas, Disposal, Audit, Service, Penyusutan, Mutasi, Sewa, Pinjam, dan Hibah. Sesuai fungsinya sebagaimana penjelasan pada sub Fitur dan Fungsi.

                </li>
            </ol>
        </div>

        <?php $this->endWidget(); ?>

    </div>
    <div class="span3">
        <div class="summary">
            <ul>
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/credit.png" width="36" height="36" alt="Monthly Income">
                    </span>
                    <span class="summary-number"><a href="http://www.sttindonesia.ac.id" target="_new">STT Indonesia</a></span>
                </li>
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/page_white_edit.png" width="36" height="36" alt="Open Invoices">
                    </span>
                    <span class="summary-number"><a href="http://simak.sttindonesia.ac.id" target="_new">SIMAK</a></span>
                </li>
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/page_white_excel.png" width="36" height="36" alt="Open Quotes<">
                    </span>
                    <span class="summary-number"><a href="http://180.242.93.57/~slims/" target="_new">Perpustakaan</a></span>
                </li>
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/group.png" width="36" height="36" alt="Active Members">
                    </span>
                    <span class="summary-number"><a href="http://180.242.93.57/~digilib/" target="_new">Digilib</a></span>
                    <span class="summary-title"> Active Members</span>
                </li>
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/folder_page.png" width="36" height="36" alt="Recent Conversions">
                    </span>
                    <span class="summary-number"><a href="http://180.242.93.57/~siuas/" target="_new">SIUAS</a></span>
            </ul>
        </div>

    </div>
</div>





