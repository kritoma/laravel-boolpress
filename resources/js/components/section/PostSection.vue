<template>
  <section>
    <div class="container">
        <div class="row">
            <div class="col-3" v-for="post in posts" :key="post.id">
                <PostCard :title="post.title" :content="post.content" :date="post.created_at" :slug="post.slug" />
            </div>
        </div>
    </div>
  </section>
</template>

<script>
import PostCard from '../common/PostCard.vue';

export default {
  components: { PostCard },
    name: 'PostSection',
    data() {
        return {
            posts: null,
        }
    },
    created() {
        axios.get('/api/posts')
        .then ((response) => {
            this.posts = response.data
        })
        .catch((e) => {
            console.log(e)
        })
    }
}
</script>

<style lang='scss' scoped>

</style>