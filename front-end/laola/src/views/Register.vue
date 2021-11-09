<template>
  <img src="../assets/logo.png" alt="logo la-ola" />
  <h1>C'est parti !</h1>
  <h3>Créer un compte</h3>
  <button @click="setRegistrationScheme('club')">Club</button>
  <button @click="setRegistrationScheme('individual')">Particulier</button>
  <form id="club" v-if="registrationScheme === 'club'">
    <input type="text" id="" placeholder="Nom du club" />
    <input type="text" id="" placeholder="Nom du représentant" />
    <input type="email" id="" placeholder="Email" />
    <input type="password" id="" placeholder="Mot de passe" />
    <input type="password" id="" placeholder="Confirmation du mot de passe" />
    <div id="button">
      <button id="connexion">Connexion</button>
    </div>
  </form>
  <form id="particulier" v-if="registrationScheme === 'individual'">
    <input type="text" id="" placeholder="Nom" />
    <input type="email" id="" placeholder="Email" />
    <input type="password" id="" placeholder="Mot de passe" />
    <input type="password" id="" placeholder="Confirmation du mot de passe" />
    <input type="text" id="" placeholder="Code de parrainage" />
    <div id="button">
      <button id="connexion">Connexion</button>
    </div>
  </form>
  <div>
    <a href="./Home">Retour à l'acceuil</a>
  </div>
</template>
<script>
export default {
  name: "Register",
  components: {},
  data() {
    return {
      registrationScheme: "",
    };
  },
  // apparition formulaire en data propertie/v-if
  methods: {
    setRegistrationScheme(type) {
      this.registrationScheme = type;
    },
  },
};
</script>
