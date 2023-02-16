<template>
    <div class="cards text-center">
        <form name="form_Signin" method="post" action="" class="form">
          <h1 class="h3 text-2xl mb-3 fw-normal">Please login </h1>

          <table class="mx-auto">
            <div class="form-floating mb-5 flex ">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                name="email"
                required
              />
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-5 flex  ">
              <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
                name="wachtwoord"
                required
              />
              
              <label for="floatingPassword"><i class="material-symbols-outlined">person</i><span>Password</span></label>
            </div>
          </table>

          <button
            class="w-100 btn mr-4"
            type="submit"
            value="verstuuren"
            name="submit"
            data-bs-toggle="modal" 
            data-bs-target="#exampleModal"
          >
            login
          </button>
        </form>
    </div>
    <div class="cards_1 mt-12 text-center">
      <form name="form_Signin" method="post" action="" class="form">

        <h1 class="h3 mb-3 fw-normal form-floating mb-5 flex  text-2xl">Please sign in</h1>

        <table class="mx-auto">
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, Naam" class="mx-auto">Naam</label>
            <input
              type="text"
              class="form-control"
              placeholder="Password"
              id="floatingInput"
              name="naam"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, VoorNaam" class="mx-auto">Voornaam</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="voornaam"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, straat" class="mx-auto">straat</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="straat"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, huisnummer" class="mx-auto">huisnummer</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="huisnummer"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, bus" class="mx-auto">bus</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="bus"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, postcode" class="mx-auto">postcode</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="postcode"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, gemeente" class="mx-auto">gemeente</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="gemeente"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, land" class="mx-auto">land</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="land"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput, telefoonnummer" class="mx-auto">telefoonnummer</label>
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Password"
              name="telefoonnummer"
              required
            />
          </div>
          <div class="form-floating mb-5 flex ">
            <label for="floatingInput" class="mx-auto">Email address</label>
            <input
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
              name="email"
              required
            />
          </div>
          <div class="form-floating mb-5 flex">
            <label for="floatingPassword" class="mx-auto">Password</label>

            <input
              type="password"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              name="wachtwoord"
              required
            />
          </div>
        </table>

        <button
          class="w-100 btn btn-lg btn-primary"
          type="submit"
          value="registreer"
          name="button_submit"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          Sign in
        </button>
         <!-- <li>
           <NuxtLink to="/index"> Go Back </NuxtLink>
         </li> -->

      </form>
    </div>
</template>

<script setup>

</script>

<style scoped>

</style>