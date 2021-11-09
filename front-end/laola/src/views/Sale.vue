<template>
  <div id="block">
    <form @submit.prevent action="/action_page.php">
      <input type="file" id="myFile" name="filename" />
      <input type="text" placeholder="Titre de l'article" />
      <input type="text" placeholder="Description de l'article" />
      <Category />
      <input type="text" placeholder="Categorie" />
      <input type="text" placeholder="Marque" />
      <input type="text" placeholder="Etat" />
      <input type="text" placeholder="Prix" />
      <button>Ajouter</button>
    </form>
  </div>
</template>
<script>
import Category from "../components/Category.vue";
export default {
  name: "Sale",
  components: { Category },

  methods: {
    myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    },
  },
};
</script>

<style>
#block {
  width: 40vw;
  margin-left: 360px;
  margin-right: 360px;
}
#myInput:focus {
  outline: 3px solid #ddd;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
</style>
