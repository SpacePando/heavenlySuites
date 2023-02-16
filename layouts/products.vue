<template>
  <div>
    <header class="shadow-sm bg-white">
      <nav class="container mx-auto p-4">
        <NuxtLink to="/user" class="font-bold">Heavenly Suites</NuxtLink>
      </nav>
    </header>
    <div class="container mx-auto p-4">
      <slot />
    </div>
    <footer class="container mx-auto p-4 flex justify-between mt-20 border-t-2 ">
      <ul class="flex gap-4">
        <li><NuxtLink to="/" class="flex"><i class="material-icons mr-2">home</i>Home</NuxtLink></li>
        <li><NuxtLink to="/about" class="flex">About</NuxtLink></li>
        <li><NuxtLink to="/log" class="flex">Log</NuxtLink></li>
      </ul>
    </footer>
  </div>
</template>

<style scoped>
  .router-link-exact-active {
    color: #263e77;
  }
</style>