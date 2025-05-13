<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #808080;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .neon-cyan {
            color: #00ffff;
            text-shadow:
                0 0 1px #00ffff,
                0 0 1px #00ffff,
                0 0 1px #00ced1;
        }

        .neon-pink {
            color: #ff40a6;
            text-shadow:
                0 0 5px #ff40a6,
                0 0 10px #ff40a6,
                0 0 20px #ff1cae;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: rgba(0, 0, 0, 0.85);
            border-bottom: 1px solid #222;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a:hover {
            color: #00ffff;
        }

        .hero {
            position: relative;
            width: 100%;
            oferflow: hidden;
        }

        .hero img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 70vh;
            filter: brightness(70%);
            display: block;
        }

        .hero-tagline {
            background-color: #111;
            padding: 3rem 2rem;
            text-align: center;
        }

        .hero-tagline h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }

        .hero-tagline p {
            font-size: 1.2rem;
            max-width: 70px;
            margin: 0 auto;
            color: #ccc;
        }

        footer {
            text-align: center;
            padding: 2rem;
            background-color: #008d80;
            border-top: 1px solid #222;
            font-size: 0.9rem;
            color: #555;
        }

        @media(max-width: 768px) {
            .hero-tagline h1 {
                font-size: 2rem;
            }

            .nav-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo neon-cyan">Neon<span class="neon-pink">Jepang</span></div>
        <div class="nav-links">
            <a class="nav-link active" aria-current="page" href="<?= base_url(''); ?>">Home</a>
            <a class="nav-link" href="<?= base_url('/about'); ?>">About</a>
            <a class="nav-link" href="<?= base_url('/contact'); ?>">Contact Us</a>
            <a class="nav-link" href="<?= base_url('/product'); ?>">Product</a>

        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer>
        &copy;2025 Neon Jepang. Dibuat dengan cinta dan cahaya
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>