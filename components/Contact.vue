



<!--TODO make it work  -->



<template>
    <div>
        <section >
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-12 text-4xl tracking-tight font-bold text-center text-black-900 dark:text-black">Contact Ons</h2>
                <form action="#" class="space-y-8" name="contact" netlify>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Email</label>
                        <input v-model="info.email" type="email" id="email" name="email"
                                class="shadow-sm bg-black-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Onderwerp</label>
                        <input v-model="info.subject" name="subject" type="text" id="subject" class="block p-3 w-full text-sm text-black-900 bg-black-50 rounded-lg border border-black-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Laat ons weten hoe wij u kunnen helpen" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">Bericht</label>
                        <textarea v-model="info.msg" name="message" id="message" rows="6" class="block p-2.5 w-full text-sm text-black-900 bg-black-50 rounded-lg shadow-sm border border-black-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-black-700 dark:border-black-600 dark:placeholder-black-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Schrijf iets naar ons..."></textarea>
                    </div>
                    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-black rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" >Verzenden</button>
      </form>
  </div>
  {{ guests }}
</section>
    </div>
</template>

<script >
export default {
    name:"contactFrom",
    data(){
        return {
           info:{},
           guests:[],
        }
    },
    created(){
        
            fetch("http://vanhaudt.slc-mul.online/getguests.php?id=1").then(
               response =>  response.json()  

               
                
            ).then(
                response => this.guests = JSON.parse(JSON.stringify(response)).info


            ).catch(
                console.log("There was a FF error")
            )
        },
    
    methods:{
        send(){
            console.log("sending email")
            fetch("http://vanhaudt.slc-mul.online/sendEmail.php").then(
               response =>  response.json()  

               
                
            ).then(
                response => this.guests = JSON.parse(JSON.stringify(response)).info


            )
        }
    },
};


</script>

<style scoped>

</style>