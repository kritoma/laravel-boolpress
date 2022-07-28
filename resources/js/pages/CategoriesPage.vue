<template>
  <section>
    <div class="container">
        <ul>
            <li v-for="category in categories" :key="category.id">
                <h2>{{category.name}}</h2>
                <router-link :to="{ name: 'single-category', params: {slug: slug} }">info</router-link>
            </li>
        </ul>
    </div>
  </section>
</template>

<script>
export default {
    name :'CategoriesPage',
    data() {
        return {
            categories: null,
        }
    },
    created() {
        axios.get('/api/categories')
        .then((response) => {
            this.categories = response.data;
        })
        .catch((e) => {
            console.log(e);
        })
    }
}
</script>

<style>

</style>