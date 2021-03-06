<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initialscale=1.0" />
    <title>Transaction Hapus</title>
    <link rel="stylesheet" href="{{ asset("/css/admin.css") }}" />
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
                <img src="{{ asset("/assets/logo.png") }}" alt="" />
                <button class="btn">
                    <a href="../logout.php">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Hapus Transaction</h3>
                <div class="form-login">
                    <h4>Ingin Menghapus Data ?</h4>
                    <form action="{{ url('/transaction/delete/'. $transaction->id_transaction) }}" method="get">
                        <input type="hidden" name="id" value="" />
                        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin-top: 50px;">
                            Yes
                        </button>
                        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%;">
                            <a href="{{ url('/transaction/noDelete') }}">No</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>