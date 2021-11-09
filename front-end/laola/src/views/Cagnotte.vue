<template>
  <div id="block">
    <a href="./Profile.vue">icone</a>
    <p>Ma Cagnotte "Don"</p>
    <p>Je choisis de reverser :</p>

    <!----------------------------- Formulaire de Don -------------------------->

    <form @submit.prevent="EnvoiDon()">
      <input type="number" placeholder="15€" id="" v-model="prixDon" />

      <p>Au Club :</p>

      <input
        type="text"
        placeholder="Olympique de Marseille"
        id=""
        v-model="nomDuClub"
      />
      <p>
        Ou trouvez un club pres de chez toi avec notre
        <a href="http://monclubpresdechezmoi.com/">partenaire</a>
      </p>

      <input type="checkbox" v-model="donAnonyme" />
      <p>Don Anonyme</p>

      <button>Faire un Don</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Cagnotte",
  components: {},
  data: function () {
    return {
      prixDon: "",
      nomDuClub: "",
      donAnonyme: "",
    };
  },
  // -------------------------- Envoi requête Don ---------------------------
  methods: {
    EnvoiDon: async function () {
      if (this.prixDon !== 0 && this.nomDuClub !== "") {
        console.log("create ok");
        alert("veuillez remplir des champs valide");
      } else {
        const body = {
          prixDon: this.prixDon,
          nomDuClub: this.nomDuClub,
        };
        console.log("requête envoie");
        const response = await axios.post("", body);
        if (response.data === "Success") {
          const redirect_url = "/compte";
          this.$router.push(redirect_url);
        }
      }
    },
  },
};
</script>
