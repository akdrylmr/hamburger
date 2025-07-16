<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'the TAM Burger'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'the TAM Burger - Eşsiz lezzetlerimizle damak tadınıza hitap ediyoruz. Franchise fırsatları için bize ulaşın.'; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">the TAM Burger</div>
            <ul class="nav-links">
                <li><a href="/" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Ana Sayfa</a></li>
                <li><a href="/about.php" <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'class="active"' : ''; ?>>Hakkımızda</a></li>
                <li><a href="/menu.php" <?php echo basename($_SERVER['PHP_SELF']) == 'menu.php' ? 'class="active"' : ''; ?>>Menü</a></li>
                <li><a href="/franchise.php" <?php echo basename($_SERVER['PHP_SELF']) == 'franchise.php' ? 'class="active"' : ''; ?>>Franchise</a></li>
                <li><a href="/contact.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'class="active"' : ''; ?>>İletişim</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>
