<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initialscale=1.0" />
    <title>Transaction Edit</title>
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;70
0&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="../admin.php">Home</a>
            <a href="../categories/categories.php">Categories</a>
            <a href="transaction.php">Transaction</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="../assets/logo.png" alt="" />
                <button class="btn">
                    <a href="../logout.php">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Edit Transaction</h3>
                <div class="form-login">
                    <form action="{{ url('/transaction/update/'.$transaction->id_transaction) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" value="{{ $transaction->id_transaction }}">
                        <label for="nama">Nama</label>
                        <input class="input" type="text" name="nama" id="nama" placeholder="Nama" value="{{ $transaction->nama }}" />
                        <label for="jenis">Jenis</label>
                        <input class="input" type="text" name="jenis" id="jenis" placeholder="Jenis" value="{{ $transaction->jenis }}" />
                        <label for="harga">Harga</label>
                        <input class="input" type="text" name="harga" id="harga" placeholder="Harga" value="{{ $transaction->harga }}" />
                        <label for="tgl">Tanggal</label>
                        <input class="input" type="date" name="tgl" id="tgl" style="margin-bottom: 20px" value="{{ $transaction->tgl }}" />
                        <button type="submit" class="btn btn-simpan" name="edit">
                            Edit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>