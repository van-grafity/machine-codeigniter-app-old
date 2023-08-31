<html>

<head>
    <title>Welcome</title>

    <style type="text/css">
    .bg-gambar {
        background-image: url(images/sewing1.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 100%;
    }

    html,
    body {
        font-family: 'Cambria', 'Cochin', Georgia, Times, 'Times New Roman', serif;
        text-align: center;
        font-size: xx-large;
        font-weight: bold;
        height: 100%;
    }

    .pesan {
        position: relative;
        top: 350px;
        width: auto;
        color: red;
    }

    .h1 {
        font-size: 3vw;
        color: red;
    }
    </style>
</head>

<body>
    <div class="bg-gambar">
        <div class="pesan">
            <div class="h1">MACHINE APPLICATION</div>
            <div class="h2">An Application for Shipping Department</div>

            <?php if (session()->get('isLoggedIn')) : ?>
            <a href="<?php echo base_url('home'); ?>">Login</a>
            <?php else : ?>
            <a href="<?php echo base_url('login'); ?>">Login</a>
            <?php endif ?>
        </div>
    </div>
    </div>
</body>

</html>