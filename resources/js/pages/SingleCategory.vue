<template>
  <section>
    <div class="container">
        <h2>{{category.name}}</h2>
    </div>
  </section>
</template>

<script>
export default {
    name : 'SingleCategory',
    data() {
        return {
            category: null,
        }
    },
    created() {
        axios.get(`/api/categories/${this.$route.params.slug}`)
        .then((response) => {
            this.category = response.data;
        })
        .catch((e) => {
            console.log(e);
        })
    }
}
</script>

<style>

</style>