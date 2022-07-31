<template>
  <section>
    <div class="container">
        <h2>{{post.title}}</h2>
        <img v-if="post.image" :src="post.image_path" :alt="post.title">
    </div>
  </section>
</template>

<script>
export default {
    name: 'SinglePost',
    data() {
        return {
            post: null
        }
    },
    created() {
        axios.get(`/api/posts/${this.$route.params.slug}`)
        .then((response) => {
            this.post = response.data;
        })
        .catch((e) => {
            console.log(e);
        })
    } 
}
</script>

<style>

</style>