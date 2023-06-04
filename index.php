<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menghitung Kebutuhan Kalori Harian</title>
    <meta name="description" contents="Calories">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <nav>
            <div class="wrapper">
                <img class="logo" src="image/1.png" alt="logo">
                <div class ="menu">
                    <ul class="nav_links">
                        <li>
                            <a href="#home">HOME</a>
                        </li>
                        <li>
                            <a href="#referensi">REFERENSI</a>
                        </li>
                        <li>
                            <a href="#about">ABOUT</a>
                        </li>
                        <li>
                            <a class="tombol" href="#kalkulator">KALKULATOR</a>
                        </li>
                    </ul>   
                </div>
            </div>       
        </nav>
        <div class="wrapper">
            <!-- untuk home -->
            <section id="home">
                <img class="gambar" src="image/2.png" alt="">
                <div class="kolom">
                    <h2>Mengapa kita harus menjaga kalori yang masuk ke tubuh kita ?</h2>
                    <p class="deskripsi">Kita perlu menjaga kalori yang ada di tubuh kita karena kalori merupakan satuan energi yang digunakan oleh tubuh untuk melakukan fungsi-fungsi penting, seperti menjaga metabolisme basal, menjalankan aktivitas sehari-hari, dan mendukung pertumbuhan dan perbaikan jaringan tubuh.</p>
                </div>
            </section>
            <!-- untuk kaklkulator -->
            <section class="kalkulator" id="kalkulator">
                <p class="alasan">Mau tau kebutuhan kalori Anda??</p>
                <h2 class="desc">Mari hitung kebutuhan kalori harian Anda !</h2>
                <form class="form" method="post">
                    <h1>KALKULATOR KALORI</h1>
                        <table>
                            <tr>
                                <td>
                                    <label><strong>Berat Badan (Kg) :</strong></label>
                                        <input type="number" name="num1" value="<?php echo isset($_POST['reset']) ? '' : (isset($_POST['num1']) ? $_POST['num1'] : ''); ?>" required placeholder="Masukkan Berat Badan Anda" />
                                </td>
                            </tr>               
                        <td>
                        <label>
                            <strong>Tinggi Badan (Cm) :</strong>
                        </label>
                            <input type="number" name="num2" value="<?php echo isset($_POST['reset']) ? '' : (isset($_POST['num2']) ? $_POST['num2'] : ''); ?>" required placeholder="Masukkan Tinggi Badan Anda" />
                        </td>
                    <tr>
                        <td>
                        <label><strong>Usia :</strong></label> 
                            <input type="number" name="num3" value="<?php echo isset($_POST['reset']) ? '' : (isset($_POST['num3']) ? $_POST['num3'] : ''); ?>" required placeholder="Masukkan Usia Anda" />
                        </td>
                    </tr>

                    <tr>
                        <div style="margin-bottom: 1rem;">
                        <label class='jk'>Jenis Kelamin :</label> 
                            <input class="lp" type="radio" name="jk" value="l" <?php echo isset($_POST['reset']) ? '' : (isset($_POST['jk']) && $_POST['jk'] == 'l' ? 'checked' : ''); ?> required />Laki-Laki
                            <input class="lp" type="radio" name="jk" value="p" <?php echo isset($_POST['reset']) ? '' : (isset($_POST['jk']) && $_POST['jk'] == 'p' ? 'checked' : ''); ?> required />Perempuan
                        </div>
                    </tr>

                    <tr>
                        <td>
                        <label><strong>Level Aktivitas Fisik</strong></label>
                        <select name="laf" required>
                            <option value="">Pilih Level Aktivitas Fisik Anda</option>
                            <option value="1" <?php echo isset($_POST['reset']) ? '' : (isset($_POST['laf']) && $_POST['laf'] == '1' ? 'selected' : ''); ?>>Tidak Aktif/Sangat Jarang Berolahraga</option>
                            <option value="2" <?php echo isset($_POST['reset']) ? '' : (isset($_POST['laf']) && $_POST['laf'] == '2' ? 'selected' : ''); ?>>Aktivitas Ringan/Berolahraga 1-3 Hari/Minggu</option>
                            <option value="3" <?php echo isset($_POST['reset']) ? '' : (isset($_POST['laf']) && $_POST['laf'] == '3' ? 'selected' : ''); ?>>Aktivitas Sedang/Berolahraga 3-5 Hari/Minggu</option>
                            <option value="4" <?php echo isset($_POST['reset']) ? '' : (isset($_POST['laf']) && $_POST['laf'] == '4' ? 'selected' : ''); ?>>Aktivitas Berat/Berolahraga 6-7 Hari/Minggu</option>
                            <option value="5" <?php echo isset($_POST['reset']) ? '' : (isset($_POST['laf']) && $_POST['laf'] == '5' ? 'selected' : ''); ?>>Aktivitas Sangat Berat/Sangat Sering Berolahraga</option>
                        </select>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <button type="submit" name="submit" value="hitung">Hitung !</button>
                            <button type="submit" name="reset" value="reset">Reset</button>
                        </td>
                    </tr>
                    <td>
                        <img src="image/healthy-food-calories-calculator.png" alt="" style="float:center;width:10vh;height:12vh;border-radius:10px;">
                    </td>
                </table>
                <?php
                    if (isset($_POST['submit'])) {
                        $b = $_POST['num1'];
                        $t = $_POST['num2'];
                        $u = $_POST['num3'];
                        $k = $_POST['jk'];
                        $af = $_POST['laf'];
                
                        if ($k == "l") {
                            switch ($af) {
                                case "1":
                                    $mbr = 66.5 + (13.75 * $b) + (5.003 * $t) - (6.75 * $u);
                                    $cal = $mbr * 1.2;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "2":
                                    $mbr = 66.5 + (13.75 * $b) + (5.003 * $t) - (6.75 * $u);
                                    $cal = $mbr * 1.375;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "3":
                                    $mbr = 66.5 + (13.75 * $b) + (5.003 * $t) - (6.75 * $u);
                                    $cal = $mbr * 1.55;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "4":
                                    $mbr = 66.5 + (13.75 * $b) + (5.003 * $t) - (6.75 * $u);
                                    $cal = $mbr * 1.725;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "5":
                                    $mbr = 66.5 + (13.75 * $b) + (5.003 * $t) - (6.75 * $u);
                                    $cal = $mbr * 1.9;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;
                            }
                        } elseif ($k == "p") {
                            switch ($af) {
                                case "1":
                                    $mbr = 655.1 + (9.563 * $b) + (1.850 * $t) - (4.676 * $u);
                                    $cal = $mbr * 1.2;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "2":
                                    $mbr = 655.1 + (9.563 * $b) + (1.850 * $t) - (4.676 * $u);
                                    $cal = $mbr * 1.375;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "3":
                                    $mbr = 655.1 + (9.563 * $b) + (1.850 * $t) - (4.676 * $u);
                                    $cal = $mbr * 1.55;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "4":
                                    $mbr = 655.1 + (9.563 * $b) + (1.850 * $t) - (4.676 * $u);
                                    $cal = $mbr * 1.725;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;

                                case "5":
                                    $mbr = 655.1 + (9.563 * $b) + (1.850 * $t) - (4.676 * $u);
                                    $cal = $mbr * 1.9;
                                    echo "</br>";
                                    echo "Kebutuhan Kalori Anda: " . "</br>" . "</br>" . $cal . " Kalori/Hari";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";
                                    break;
                            }
                        }
                    }
                    ?>                       
                    </form>
            </section>
            <!-- untuk referensi -->
            <section id="referensi">
                <div class="kolom">
                    <h2>Rekomendasi makanan sehat beserta kalorinya</h2>
                    <p class="php">
                    <?php
                    abstract class Produk {
                        private $kalori;

                        public function __construct( $kalori = "kalori" ) {
                            $this->kalori = $kalori;
                        }

                        public function setKaloris( $kalori ) {
                            return $this->kalori = $kalori;
                        }

                        public function getKalori() {
                            return $this->kalori;
                        }

                        public function getInfo() {
                            $str = "{$this->kalori}";
                            return $str;
                        }
                    }

                    class Nanas extends Produk {
                        public function getInfoProduk() {
                            $str = "Nanas (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Kentang_Rebus extends Produk {
                        public function getInfoProduk() {
                            $str = "Kentang Rebus (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Bayam_Rebus extends Produk {
                        public function getInfoProduk() {
                            $str = "Bayam Rebus (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Daging_Ayam_Panggang extends Produk {
                        public function getInfoProduk() {
                            $str = "Daging Ayam Panggang (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Ikan_Salmon_Panggang extends Produk {
                        public function getInfoProduk() {
                            $str = "Ikan Salmon Panggang (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Telur_Rebus extends Produk {
                        public function getInfoProduk() {
                            $str = "Telur Rebus (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Kacang_kacangan extends Produk {
                        public function getInfoProduk() {
                            $str = "Kacang-kacangan (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Sayur_sayuran extends Produk {
                        public function getInfoProduk() {
                            $str = "Sayur-sayuran (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class Teh_Hijau extends Produk {
                        public function getInfoProduk() {
                            $str = "Teh Hijau (kalori : " . $this->getInfo() . " per 100 gram)";
                        return $str;
                        }
                    }

                    class cetakInfoProduk {
                        public $daftarProduk = array();

                        public function tambahProduk( Produk $produk ) {
                            $this->daftarProduk[] = $produk;
                        }

                        public function cetak() {
                            $str = "Contoh Makanan : <br>";

                            foreach( $this->daftarProduk as $p ) {
                                $str .= "- {$p->getInfoProduk()} <br>";
                            }
                            return $str;
                        }
                    }

                    $produk1 = new Nanas(61);
                    $produk2 = new Kentang_Rebus(77);
                    $produk3 = new Bayam_Rebus(23);
                    $produk4 = new Daging_Ayam_Panggang(167);
                    $produk5 = new Ikan_Salmon_Panggang(171);
                    $produk6 = new Telur_Rebus(155);
                    $produk7 = new Kacang_kacangan(567);
                    $produk8 = new Sayur_sayuran(25);
                    $produk9 = new Teh_Hijau(2);

                    $cetakProduk = new CetakInfoProduk();
                    $cetakProduk->tambahProduk( $produk1 );
                    $cetakProduk->tambahProduk( $produk2 );
                    $cetakProduk->tambahProduk( $produk3 );
                    $cetakProduk->tambahProduk( $produk4 );
                    $cetakProduk->tambahProduk( $produk5 );
                    $cetakProduk->tambahProduk( $produk6 );
                    $cetakProduk->tambahProduk( $produk7 );
                    $cetakProduk->tambahProduk( $produk8 );
                    $cetakProduk->tambahProduk( $produk9 );
                    echo $cetakProduk->cetak();
                    ?>
                    </p>
                </div>
                <img class="gambar2" src="image/4.png" alt="">
            </section>
            <!-- untuk about -->
            <section class="about" id="about">
                <h1>About Me</h1>

                <?php
                $aboutInfo = array(
                    array(
                        "name" => "NAUFAL YOGA PRATAMA",
                        "fakultas" => "Teknik",
                        "jurusan" => "Teknik Komputer",
                        "NIM" => "21120122130059",
                        "Angkatan" => "2022",
                        "lokasi" => array(
                            array("kecamatan" => "Bojong", "kabupaten" => "Pekalongan", "provinsi" => "Jawa Tengah"),
                            array("kecamatan" => "Tembalang", "kabupaten" => "Semarang", "provinsi" => "Jawa Tengah")
                        ),
                    ),
                );
                ?>

                <?php foreach ($aboutInfo as $tentang): ?>
                    <h2 class="naufal"><?php echo $tentang["name"]; ?></h2>
                    <p>
                        <strong>Fakultas :</strong> <?php echo $tentang["fakultas"]; ?><br>
                        <strong>Jurusan :</strong> <?php echo $tentang["jurusan"]; ?><br>
                        <strong>NIM :</strong> <?php echo $tentang["NIM"]; ?><br>
                        <strong>Angkatan :</strong> <?php echo $tentang["Angkatan"]; ?><br>
                        <strong>Alamat :</strong><br>
                        <?php foreach ($tentang["lokasi"] as $lokasii): ?>
                            - <?php echo $lokasii["kecamatan"]; ?>, <?php echo $lokasii["kabupaten"]; ?>, <?php echo $lokasii["provinsi"]; ?><br>
                        <?php endforeach; ?>
                    </p>
                <?php endforeach;
                ?>

            </section>
        </div>
        <div id="copyright">
            <div class="wrapper">
                &copy; 2023. <b>Naufal Pratama</b> All Rights Reserved.
            </div>
        </div>
</body>
</html>