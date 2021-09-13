<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Side Bar Navigation</title>
    <!-- bootstrap 5 css -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/bootstrap.js"></script>
    
    <!-- BOX ICONS CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
<!-- table of content -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.13.4/tocbot.css">
    <!-- custom css -->
    <link href="css/sidebars.css" rel="stylesheet">
</head>

<div class="side-navbar flex-shrink-0 p-3 active-nav" id="sidebar">
  <a href="/" class="d-flex align-items-center pb-3 mb-3 link-light text-decoration-none border-bottom " style="width: 100px;">
    <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-5 fw-semibold">Collapsible</span>
  </a>
  <ul class="list-unstyled ps-0">
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        Home
      </button>
      <div class="collapse show" id="home-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-light rounded">Overview</a></li>
          <li><a href="#" class="link-light rounded">Updates</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        Dashboard
      </button>
      <div class="collapse" id="dashboard-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-light rounded">Overview</a></li>
          <li><a href="#" class="link-light rounded">Weekly</a></li>
        </ul>
      </div>
    </li>
    <li class="border-top my-3" style="width: 100px;"></li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
        Account
      </button>
      <div class="collapse" id="account-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-light rounded">New...</a></li>
          <li><a href="#" class="link-light rounded">Profile</a></li>
        </ul>
      </div>
    </li>
    <li class="border-top my-3" style="width: 100px;"></li>
  </ul>
</div>



<div class="rside-navbar" id="rsidebar">
  <!-- js-toc -->
<div class="js-toc toc toc-right"></div>
<div>
  <br>
  <a onclick="go_top()">Top</a>
  <br>
  <a onclick="go_bottom()">Bottom</a>
</div>
</div>



