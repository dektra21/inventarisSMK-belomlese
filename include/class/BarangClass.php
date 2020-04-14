<?php
    class BarangClass {
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        public function tambahBarang($name,$jenis,$cover){
            $checkBarang = $this->pdo->query("SELECT * FROM barang WHERE nama_barang = '$name'");
            if ($checkBarang->rowCount() > 0){
                return false;
            }
            else{
                $foldercover = '../../assets/cover/';
                $uploadcover = move_uploaded_file($cover['tmp_name'], $foldercover.$cover['name']);
                $result  = $this->pdo->prepare("INSERT INTO barang(
                   nama_barang,
                   jenis_barang,
                   foto_barang)
                VALUES (:nama_barang, :jenis_barang, :foto_barang)"); 

                $result->bindParam(':nama_barang', $name);
                $result->bindParam(':jenis_barang', $jenis);
                $result->bindParam(':foto_barang', $cover['name']);
                if($result->execute()) {
                    return 'berhasil';
                }
                else {
                    return 'gagal';
                }
            }
        }
        public function barangBaru() {
            $checkSong = $this->pdo->query("SELECT * FROM barang ORDER BY id");
            if ($checkSong->rowCount() > 0) {
                while($rows = $checkSong->fetch(PDO::FETCH_OBJ))
                    $data[] = $rows;
                return $data;
            }
            return false;
        }
    }
?>