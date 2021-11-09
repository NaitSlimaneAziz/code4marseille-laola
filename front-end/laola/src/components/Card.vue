<template>
  <div class="card">
    <img :src="data.image" alt="article" />
    <h4>{{ data.title }}</h4>
    <h5>{{ data.price }}</h5>
    <h5>{{ data.point }}</h5>
  </div>
</template>

<script>
export default {
  name: "Card",
  props: ["data"],
};
</script>


<style scoped>
</style>
