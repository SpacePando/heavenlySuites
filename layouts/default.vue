<template>
  <div>
    <header class="shadow-sm bg-white">
      <nav class="container mx-auto p-4 flex justify-between">
        <NuxtLink to="/" class="font-bold">Heavenly Suites</NuxtLink>
        <ul class="flex gap-4">
          <li><NuxtLink to="/">Home</NuxtLink></li>
          <li><NuxtLink to="/about">About</NuxtLink></li>
          <li><NuxtLink to="/log" class="btn">Account</NuxtLink></li>
        </ul>
      </nav>
    </header>
    <div class="container mx-auto p-4">
      <slot />
    </div>
    <footer class="container mx-auto p-4 flex justify-between border-t-2 mt-20 " >
      <ul class="flex gap-4">
        <li><NuxtLink class="flex" to="./about"><i class="material-icons mr-2">send</i><span>Email</span></NuxtLink></li>
        <li><NuxtLink class="flex"><i class="material-icons mr-2">call</i><span>Phone Number</span></NuxtLink></li>
      </ul>
    </footer>
  </div>
</template>

<style scoped>
  .router-link-exact-active {
    color: #263e77;
  }
  
</style>




<!-- <template>
<div class="bg-grey-light font-sans leading-normal tracking-normal">

<header>
  <nav class="flex items-center justify-between flex-wrap bg-grey-darkest p-6 fixed w-full z-10 pin-t">
    <div class="flex items-center flex-no-shrink text-white mr-6">
      <NuxtLink class="text-white no-underline hover:text-white hover:no-underline" href="#">
        <span class="text-2xl pl-2"><i class="em em-grinning"></i> Brand McBrandface</span>
      </NuxtLink>
    </div>
  
    <div class="block lg:hidden">
      <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
  
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <NuxtLink class="inline-block py-2 px-4 text-white no-underline" href="#">Active</NuxtLink>
        </li>
        <li class="mr-3">
          <NuxtLink class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" href="#">link</NuxtLink>
        </li>
        <li class="mr-3">
          <NuxtLink class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" href="#">link</NuxtLink>
        </li>
        <li class="mr-3">
          <NuxtLink class="inline-block text-grey-dark no-underline hover:text-grey-lighter hover:text-underline py-2 px-4" href="#">link</NuxtLink>
        </li>
      </ul>
    </div>
  </nav>
</header>


<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-18">
  <slot />
</div>


<footer class="container mx-auto p-4 flex justify-between border-t-2 mt-20 " >
      <ul class="flex gap-4">
        <li><button class="flex"><i class="material-icons mr-2">send</i><span>Email</span></button></li>
        <li><button class="flex"><i class="material-icons mr-2">call</i><span>Phone Number</span></button></li>
      </ul>
</footer>


</div>
</template>

<script>
  //Javascript to toggle the menu
  document.getElementById('nav-toggle').onclick = function(){
    document.getElementById("nav-content").classList.toggle("hidden");
  }
</script>

<style scoped>
  .router-link-exact-active {
    color: #263e77;
  }
</style> -->


