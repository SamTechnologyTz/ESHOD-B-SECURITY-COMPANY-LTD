<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESHOD & B SECURITY COMPANY LIMITED</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <h1>ESHOD & B SECURITY COMPANY LIMITED</h1>
            <p>Ulinzi na Usalama Kibaha, Pwani</p>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#home">Nyumbani</a></li>
            <li><a href="#about">Kuhusu</a></li>
            <li><a href="#services">Huduma</a></li>
            <li><a href="#contact">Wasiliana Nasi</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Section: Kuhusu -->
        <section id="about">
            <div class="container">
                <h2>Kuhusu Sisi</h2>
                <p>ESHOD & B SECURITY COMPANY LIMITED ni kampuni mpya inayotoa huduma za ulinzi katika Kibaha, Pwani. Tunatoa huduma za ulinzi wa majengo, biashara, na matukio maalum.</p>
            </div>
        </section>

        <!-- Section: Huduma -->
        <section id="services">
            <div class="container">
                <h2>Huduma Zetu</h2>
                <ul>
                    <li>Ulinzi wa Majengo</li>
                    <li>Ulinzi wa Matukio</li>
                    <li>Ulinzi wa Biashara</li>
                    <li>Huduma za Usafirishaji wa Vifaa vya Thamani</li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Section: Wasiliana Nasi -->
    <section id="contact">
        <div class="container">
            <h2>Wasiliana Nasi</h2>
            <form action="submit_contact.php" method="POST">
                <label for="name">Jina:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Barua Pepe:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Ujumbe:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Tuma Ujumbe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 ESHOD & B SECURITY COMPANY LIMITED. Haki zote zimehifadhiwa.</p>
        </div>
    </footer>

</body>
</html>
