<?php
    require_once 'functions.php';

    $id = $_GET['id'];

    if( hapus($id) > 0 ){
        echo "
           <script>
           alert('data berhasil dihapus');
           document.location.href = 'stokObat.php';
           </script>
        ";
       
    }else{
       echo "
           <script>
           alert('gagal dihapus');
           document.location.href = 'stokObat.php';
           </script>
        ";
    }


?>