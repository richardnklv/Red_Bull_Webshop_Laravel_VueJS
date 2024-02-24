<template>
    <div class="product-image">
        <img :src="`https://simracewebshop.com/wp-content/uploads/2021/10/playseat_evolution_red_bull_-_front.png`"
             alt="Product image" />
    </div>
</template>

<script>
export default {
    name: 'ProductImage',
    props: {
        imageUrl: String
    }
}
</script>

<style>

</style>
