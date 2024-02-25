<template>
    <div class="product-image">
        <img :src="`https://simracewebshop.com/wp-content/uploads/2021/10/playseat_evolution_red_bull_-_front.png`"
             class="image"
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

<style scoped>
.image {
    border-radius: 3px;
    width: 400px; /* Or any other fixed width */
    height: auto; /* This maintains the aspect ratio */
    object-fit: cover; /* This will cover the area without stretching the image */
}

</style>
