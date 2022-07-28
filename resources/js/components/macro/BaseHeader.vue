<template>
<header>
    <div class="container">
        <div class="flex">
            <div class="logo">
                <h1>BoolBLog</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><router-link :to="{ name: 'home'}">Home</router-link></li>
                    <li><router-link :to="{ name: 'about'}">Chi siamo</router-link></li>
                    <li><router-link :to="{ name: 'categories-page'}">Categorie</router-link></li>
                    <li><a href="/admin/home">Area privata</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
</template>

<script>
export default {
    name: 'BaseHeader',
}
</script>

<style lang='scss' scoped>
.flex {
    display: flex;
    justify-content: space-between;
    align-items: center;

    .navbar {
        ul{
            list-style: none;
            display: flex;
            gap: 1.25rem;
            align-items: center;
            margin-bottom: 0;
        }
    }
}
</style>