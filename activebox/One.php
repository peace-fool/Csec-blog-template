<?php include_once '../header.php';?> 
<?php
session_start();
if($_SESSION["boxName"] != "One"){
    header("location: /index.php");
    exit();
}
?>
<!-- content start -->

<!-- Content -->
<h1 id="hello">Hello There</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo odio, veritatis molestias beatae ad quo velit quasi, dolore nostrum, recusandae modi quis accusamus suscipit quibusdam laborum quam. Iure laudantium odio adipisci at quibusdam. Natus laboriosam facere inventore tenetur nulla, doloremque assumenda illo ad ipsa incidunt sint, reiciendis repellendus sit officia?</p>
<h1 id="second">Second</h1>
<img src="/screen.png" alt="....."><br>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia delectus commodi at quae. Dolores quod illum sed facilis ipsum dolore illo magni quae, nisi ad, quisquam pariatur, soluta numquam! Mollitia quidem neque, facere culpa quae itaque nulla ea doloremque obcaecati excepturi quam earum sed maxime fugit molestiae recusandae eum distinctio nihil, doloribus dolorem voluptatibus sunt. Quam, aliquam, cumque adipisci illum, laudantium doloribus alias impedit cupiditate eligendi fugiat ipsum nisi. Ipsum possimus in ratione, velit amet, eaque ad recusandae odio eligendi, sunt pariatur cupiditate! Tenetur ipsam atque, pariatur unde, obcaecati voluptatibus quaerat asperiores rem deserunt natus dignissimos excepturi quibusdam molestias modi.</p>
<h1 id="third">third</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, non eos illum libero earum atque animi accusantium iste et optio autem omnis minima dolore, perferendis ipsa consectetur placeat deleniti magni fuga aliquid nemo deserunt? Ratione nam quas veniam ipsum laboriosam vero itaque, debitis sed? Sint a omnis officia pariatur quaerat provident minima sequi distinctio laudantium recusandae, soluta quos vel, eligendi, corrupti vero consectetur quam! Fugit minus autem unde, nihil facilis ut. Sunt libero dicta quaerat voluptate quos, rem dignissimos eligendi facilis ut, maiores aspernatur quas eos minima numquam. Asperiores dolore doloribus quis, ducimus quod nihil voluptate iste aspernatur quam! Dolor.</p>

<!-- content end -->
<?php include_once '../footer.php';?>            