<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="/favicon.png" />
  <title>
    Blog
  </title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XNK710ELQ9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-XNK710ELQ9');
  </script>
  <!-- Spectre.css framework -->
  <link rel="stylesheet" href="/css/spectre/spectre.min.css">
  <link rel="stylesheet" href="/css/spectre/spectre-exp.min.css">
  <link rel="stylesheet" href="/css/spectre/spectre-icons.min.css">

  <!-- theme css & js -->
  <link rel="stylesheet" href="/css/book.css">
  <script src="/js/book.js"></script>

  <!-- tocbot -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.11.1/tocbot.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.11.1/tocbot.css">
</head>

<body>
  <div id="navbar" class="#">
    <div class="card topnav">
      <div class="book-navbar">
        <header class="navbar">
          <section class="navbar-section">
            <a onclick="open_sidebar()">
              <i class="icon icon-menu"></i>
            </a>
          </section>
        </header>
      </div>
    </div>
  </div>

  <div class="book-container">

    <!-- left side bar -->
    <?php include 'lsidebar.php'; ?>

    <div class="off-canvas-content">
      <div class="columns">
        <div class="column col-8 col-lg-12">
          <div class="book-content">
            <div class="book-post">