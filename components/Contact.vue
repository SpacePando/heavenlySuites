



<!--TODO make it work  -->



<template>
    <div>
        <section >
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-12 text-4xl tracking-tight font-bold text-center text-black-900 dark:text-black">Contact Us</h2>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Your email</label>
                        <input v-model="info.email" type="email" id="email" class="shadow-sm bg-black-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Subject</label>
                        <input v-model="info.subject" type="text" id="subject" class="block p-3 w-full text-sm text-black-900 bg-black-50 rounded-lg border border-black-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">Your message</label>
                        <textarea v-model="info.msg" id="message" rows="6" class="block p-2.5 w-full text-sm text-black-900 bg-black-50 rounded-lg shadow-sm border border-black-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-black rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" @click="send()">Send message</button>
      </form>
  </div>
</section>
    </div>
</template>

<script >
export default {
    name:"contactFrom",
    data(){
        return {
           info:{}
        }
    }

}
useHead({
    link: [
        { href: "/api/contact" },
    ]
  })



</script>

<style scoped>

</style>