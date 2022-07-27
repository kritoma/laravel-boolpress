<template>
    <div>
        <BaseHeader/>
        <BaseMain/>
        <BaseFooter/>
    </div>
</template>

<script>
import BaseHeader from '../components/macro/BaseHeader.vue';
import BaseMain from '../components/macro/BaseMain.vue';
import BaseFooter from '../components/macro/BaseFooter.vue';

export default {
  components: { BaseHeader, BaseMain, BaseFooter },
    name: 'App'
}
</script>

<style>

</style>