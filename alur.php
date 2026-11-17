<?php
// Mengambil data input dari form index.php, default 5 jika kosong
$tinggi = isset($_POST['tinggi']) ? (int)$_POST['tinggi'] : 5;
if ($tinggi > 20) $tinggi = 20;
if ($tinggi < 1) $tinggi = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alur Hasil Pola Bintang</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f4f6f9;
            color: #334155;
            min-height: 100vh;
            padding: 30px;
        }
        .main-container {
            max-width: 900px;
            margin: 0 auto;
        }
        .header-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px 25px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        h2 {
            font-size: 18px;
            color: #1e293b;
        }
        .btn-back {
            background: #f1f5f9;
            color: #475569;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            border: 1px solid #cbd5e1;
            transition: background 0.2s;
        }
        .btn-back:hover {
            background: #e2e8f0;
        }

        /* Layout Grid 2x2 untuk 4 Pola Bintang */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 20px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
        }

        .card-title {
            font-size: 14px;
            font-weight: 600;
            color: #4f46e5;
            margin-bottom: 12px;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 6px;
        }

        .pattern-box {
            background: #f8fafc;
            border-radius: 8px;
            padding: 12px;
            min-height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: auto;
            border: 1px solid #f1f5f9;
        }

        pre {
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.2;
            color: #334155;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #94a3b8;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="main-container">
    <div class="header-section">
        <h2>Hasil Alur Pola Bintang (N = <?= $tinggi ?>)</h2>
        <a href="index.php" class="btn-back">← Kembali / Ubah Angka</a>
    </div>

    <div class="grid-container">
        
        <!-- 01. Piramida ke Atas -->
        <div class="card">
            <div class="card-title">01. Piramida ke Atas</div>
            <div class="pattern-box">
                <pre><?php
                    for ($i = 1; $i <= $tinggi; $i++) {
                        for ($spasi = $tinggi - $i; $spasi > 0; $spasi--) {
                            echo " ";
                        }
                        for ($j = 1; $j <= $i; $j++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                ?></pre>
            </div>
        </div>

        <!-- 02. Piramida ke Bawah -->
        <div class="card">
            <div class="card-title">02. Piramida ke Bawah</div>
            <div class="pattern-box">
                <pre><?php
                    for ($i = $tinggi; $i >= 1; $i--) {
                        for ($spasi = $tinggi - $i; $spasi > 0; $spasi--) {
                            echo " ";
                        }
                        for ($j = 1; $j <= $i; $j++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                ?></pre>
            </div>
        </div>

        <!-- 03. Segitiga Samping Kiri -->
        <div class="card">
            <div class="card-title">03. Segitiga Samping Kiri</div>
            <div class="pattern-box">
                <pre><?php
                    for ($i = 1; $i <= $tinggi; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                ?></pre>
            </div>
        </div>

        <!-- 04. Segitiga Samping Kanan -->
        <div class="card">
            <div class="card-title">04. Segitiga Samping Kanan</div>
            <div class="pattern-box">
                <pre><?php
                    for ($i = 1; $i <= $tinggi; $i++) {
                        for ($spasi = $tinggi - $i; $spasi > 0; $spasi--) {
                            echo "  ";
                        }
                        for ($j = 1; $j <= $i; $j++) {
                            echo "* ";
                        }
                        echo "\n";
                    }
                ?></pre>
            </div>
        </div>

    </div>

    <div class="footer">
        Program Generator Pola Bintang | PHP
    </div>
</div>

</body>
</html>