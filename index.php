<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Pola Bintang - Beranda</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f4f6f9; /* Warna latar lembut */
            color: #334155;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        h2 {
            font-size: 20px;
            color: #1e293b;
            margin-bottom: 6px;
        }
        p.desc {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 500;
            color: #475569;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            background: #f8fafc;
            color: #1e293b;
            font-size: 15px;
            outline: none;
            transition: border-color 0.2s;
        }
        input[type="number"]:focus {
            border-color: #6366f1;
        }
        button {
            width: 100%;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #4f46e5; /* Warna tombol soft blue-purple */
            color: white;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Program Generator Pola Bintang</h2>
    <p class="desc">Masukkan jumlah baris untuk melihat hasil pola bintang di alur pemrosesan.</p>
    
    <!-- Form mengarah ke alur.php dengan metode POST -->
    <form action="alur.php" method="POST">
        <div class="form-group">
            <label for="tinggi">Jumlah Baris (1 - 20):</label>
            <input type="number" id="tinggi" name="tinggi" min="1" max="20" value="5" required>
        </div>
        <button type="submit">Buat Pola Bintang</button>
    </form>
</div>

</body>
</html>