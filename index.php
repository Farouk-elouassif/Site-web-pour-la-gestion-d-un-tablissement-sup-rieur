<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="imgs/fsttlogo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>FST-Tanger</title>
</head>
<body>
<header class="flex justify-center items-center flex-col">
  <div id="contact" class="flex flex-wrap p-2 bg-blue-900 justify-center space-around sm:flex-col lg:flex-row  text-yellow-500 w-screen">
    <p class="ml-3"><i class="fa-solid fa-envelope"></i> administration.fstt@uae.ac.ma</p>
    <p class="ml-3 "><i class="fa-solid fa-phone"></i> + 212 (0)5 39 39 39 54/ 55</p>
    <div class="flex ml-3 lg:ml-20 ">
      <a href="https://www.facebook.com/fstt.ac.ma/?locale=fr_FR" target="_blank" class="ml-3"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://www.instagram.com/fsttanger/?hl=fr" target="_blank" class="ml-3"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://www.linkedin.com/school/fsttanger/posts/?feedView=all" target="_blank" class="ml-3"><i class="fa-brands fa-linkedin"></i></a>
    </div>
  </div>

  <div id="headerlogos" class="flex flex-row justify-center space-around p-4 border-b-2 w-3/4">
    <a href="#" class="lg:mr-72 lg:mt-1 sm:mr-1"><img src="imgs/fst-1024x383.png" alt="" width="215" ></a>
    <a href="#" class="lg:ml-72 lg:mt-3 sm:ml-1 sm:mt-2"><img src="imgs/logo-uae-1024x297.png" alt="" width="230" ></a>
  </div>

  <nav class="relative">
  <div class="flex justify-between items-center">
    <!-- Hamburger Icon -->
    <div class=" text-3xl cursor-pointer lg:hidden" id="menu-toggle">
      <i class="fa-solid fa-bars text-yellow-500"></i>
    </div>
  </div>

  <!-- Nav Links -->
  <ul id="navbar" class="hidden flex-col lg:flex lg:flex-row lg:justify-center space-x-6 font-semibold cursor-pointer transition-all duration-500">
    <li class="hover:text-yellow-400 duration-300 p-4 flex items-center justify-center">Faculté<i class="fa-solid fa-caret-down ml-1"></i></li>
    <li class="hover:text-yellow-400 duration-300 p-4 flex items-center justify-center">Formation<i class="fa-solid fa-caret-down ml-1"></i></li>
    <li class="hover:text-yellow-400 duration-300 p-4 flex items-center justify-center">Recherche<i class="fa-solid fa-caret-down ml-1"></i></li>
    <li class="hover:text-yellow-400 duration-300 p-4 flex items-center justify-center">Espace Entreprise<i class="fa-solid fa-caret-down ml-1"></i></li>
    <li class="hover:text-yellow-400 duration-300 p-4 flex items-center justify-center">Espace Etudiant<i class="fa-solid fa-caret-down ml-1"></i></li>
    <li class="hover:text-yellow-400 duration-300 p-4 flex items-center justify-center">E-Learning<i class="fa-solid fa-caret-down ml-1"></i></li>
    <li class="hover:text-yellow-400 duration-300 p-4 flex items-center justify-center">E-Services<i class="fa-solid fa-caret-down ml-1"></i></li>
  </ul>
</nav>


</header>


  <script src="app.js"></script>
</body>
</html>