<template>
  <div class="home">
    <nav>
      <i class="fas fa-home"></i>
      <p>Catégorie</p>
      <i class="far fa-user"></i>
      <p>Mon compte</p>
      <i class="fas fa-shopping-cart"></i>
      <p>Panier</p>
    </nav>

    <div>
      <form id="searchbox" method="get" action="/search" autocomplete="off">
        <input
          name="q"
          type="text"
          size="15"
          placeholder="Entrer votre recherche..."
        />
        <input id="button-submit" type="submit" value=" " />
      </form>

      <i class="fas fa-sort-amount-down"></i>
      <i class="fas fa-filter"></i>
    </div>

    <img alt="Vue logo" src="../assets/chaussuresAccueil.jpg" />
  </div>

  <div>
    <h3>Les meilleures ventes</h3>
    <a href=".//">Voir plus</a>
  </div>

  <div class="cardWrapper">
    <div :key="key" v-for="(el, key) in cardsArray">
      <Card :data="el" />
    </div>
  </div>
</template>

<script>
import Card from "@/components/Card.vue";

export default {
  name: "Home",
  components: {
    Card,
  },
  data() {
    return {
      cardsArray: [
        {
          title: "AIR MAX 90",
          price: 50.0,
          points: 20,
          image: "/assets/article.jpg",
        },
        { title: "AIR MAX 90", price: 50.0, points: 20 },
        { title: "AIR MAX 90", price: 50.0, points: 20 },
        { title: "AIR MAX 90", price: 50.0, points: 20 },
      ],
    };
  },
};
</script>
<style>
#searchbox {
  width: 240px;
}
#searchbox input {
  outline: none;
}
input:focus::-webkit-input-placeholder {
  color: transparent;
}
input:focus:-moz-placeholder {
  color: transparent;
}
input:focus::-moz-placeholder {
  color: transparent;
}
#searchbox input[type="text"] {
  background: url(http://2.bp.blogspot.com/-xpzxYc77ack/VDpdOE5tzMI/AAAAAAAAAeQ/TyXhIfEIUy4/s1600/search-dark.png)
    no-repeat 10px 13px #f2f2f2;
  border: 2px solid #f2f2f2;
  font: bold 12px Arial, Helvetica, Sans-serif;
  color: #6a6f75;
  width: 160px;
  padding: 14px 17px 12px 30px;
  -webkit-border-radius: 5px 0px 0px 5px;
  -moz-border-radius: 5px 0px 0px 5px;
  border-radius: 5px 0px 0px 5px;
  text-shadow: 0 2px 3px #fff;
  -webkit-transition: all 0.7s ease 0s;
  -moz-transition: all 0.7s ease 0s;
  -o-transition: all 0.7s ease 0s;
  transition: all 0.7s ease 0s;
}
#searchbox input[type="text"]:focus {
  background: #f7f7f7;
  border: 2px solid #f7f7f7;
  width: 200px;
  padding-left: 10px;
}

#button-submit {
  background: url(http://4.bp.blogspot.com/-slkXXLUcxqg/VEQI-sJKfZI/AAAAAAAAAlA/9UtEyStfDHw/s1600/slider-arrow-right.png)
    no-repeat;
  margin-left: -40px;
  border-width: 0px;
  width: 43px;
  height: 45px;
}
</style>