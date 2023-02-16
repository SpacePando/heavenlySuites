<template>
  <div>
    <header class="shadow-sm bg-white">
      <nav class="container mx-auto p-4 flex justify-between">
        <NuxtLink to="/log/log" class="font-bold">Heavenly Suites</NuxtLink>
        <!-- <img src="/assets/logo.png" alt="logo" class="h-6"> -->
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
    <footer class="container mx-auto p-4 flex justify-between border-t-2 mt-20">
      <ul class="flex gap-4">
        <li><button class="flex"><i class="material-icons mr-2">send</i><span>Email</span></button></li>
        <li><button class="flex"><i class="material-icons mr-2">call</i><span>Phone Number</span></button></li>
      </ul>
    </footer>
  </div>
</template>

<style scoped>
  .router-link-exact-active {
    color: #263e77;
  }
</style>