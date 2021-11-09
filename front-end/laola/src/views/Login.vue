<template>
  <img src="../assets/logo.png" alt="logo la-ola" />
  <h1>Bienvenue sur la Ola</h1>
  <h3>Connectez-vous</h3>
  <form id="">
    <input
      type="email"
      id="email"
      placeholder="Email"
      v-model="emailLogin"
      required
    />
    <input type="password" id="password" placeholder="Password" required />
    <div id="">
      <button id="">Connectez-vous</button>
    </div>
  </form>
  <div>
    <a href="">Mot de passe oublié ?</a>
    <p>
      Vous n'êtes pas inscrit ?
      <a href="./register">Inscrivez-vous</a>
    </p>
  </div>
  <div>
    <a href="/">Retour à l'acceuil</a>
  </div>
</template>
<script>
export default {
  name: "Login",
  components: {},
  data() {
    return {
      emailLogin: "",
      inputPassword: "",
    };
  },
};
</script>
