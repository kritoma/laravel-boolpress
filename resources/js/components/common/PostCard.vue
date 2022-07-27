<template>
  <div class="post">
    <h2>{{title}}</h2>
    <p>{{content}}</p>
    <div class="date">{{date}}</div>
    <router-link :to="{ name: 'single-post', params: {slug: slug} }" >Leggi di più</router-link>
  </div>
</template>

<script>
export default {
    name: 'PostCard',
    props: {
        title:{
            type: String
        },
        content: {
            type: String
        },
        date: {
            type: String
        },
        slug: {
            type: String
        }
    }
}
</script>

<style lang='scss' scoped>

</style>