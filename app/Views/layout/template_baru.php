<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Portofolio' ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9f9f9;
            color: #222;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .neon-cyan {
            color: #00bcd4;
            text-shadow:
                0 0 1px #00e5ff,
                0 0 1px #00e5ff,
                0 0 2px #00bcd4;
        }

        .neon-pink {
            color: #e91e63;
            text-shadow:
                0 0 5px #ff80ab,
                0 0 10px #f06292,
                0 0 15px #e91e63;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #007acc;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            color: #444;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #00bcd4;
        }

        .hero {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 70vh;
            filter: brightness(85%);
            display: block;
        }

        .hero-tagline {
            background-color: #e3f2fd;
            padding: 3rem 2rem;
            text-align: center;
        }

        .hero-tagline h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            color: #007acc;
        }

        .hero-tagline p {
            font-size: 1.2rem;
            max-width: 500px;
            margin: 0 auto;
            color: #555;
        }

        footer {
            text-align: center;
            padding: 2rem;
            background-color: #f0f0f0;
            border-top: 1px solid #ddd;
            font-size: 0.9rem;
            color: #666;
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

        .about-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .about-container h1,
        .about-container h2 {
            text-align: center;
            color: #007acc;
        }

        .about-container img {
            display: block;
            margin: 1rem auto;
            border-radius: 50%;
            max-width: 180px;
        }

        .skills ul {
            list-style: square;
            padding-left: 1.5rem;
        }

        .skills li {
            margin-bottom: 0.5rem;
        }

        .contact-container,
        .portfolio-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .contact-container h1,
        .portfolio-container h1 {
            text-align: center;
            color: #007acc;
            margin-bottom: 1rem;
        }

        .portfolio-items .item {
            border-left: 4px solid #007acc;
            padding-left: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-container {
            max-width: 800px;
            margin: 3rem auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-container h1 {
            text-align: center;
            color: #007acc;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .contact-container p {
            text-align: center;
            color: #555;
            margin-bottom: 2rem;
        }

        .contact-container ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 2rem;
        }

        .contact-container ul li {
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
        }

        .contact-container form {
            display: flex;
            flex-direction: column;
        }

        .contact-container form label {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .contact-container form input,
        .contact-container form textarea {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-container form button {
            padding: 1rem;
            background-color: #007acc;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-container form button:hover {
            background-color: #005f8c;
        }
    </style>

</head>

<body>

    <nav>
        <div class="logo neon-cyan">My<span class="neon-pink">Portofolio</span></div>
        <div class="nav-links">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/homeporto'); ?>">Home</a>
            <a class="nav-link" href="<?= base_url('/aboutme'); ?>">About me</a>
            <a class="nav-link" href="<?= base_url('/portofolio'); ?>">Portofolio</a>
            <a class="nav-link" href="<?= base_url('/contactme'); ?>">Contact</a>

        </div>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        &copy; <?= date('Y') ?> My Portofolio — All rights reserved.
    </footer>

</body>

</html>