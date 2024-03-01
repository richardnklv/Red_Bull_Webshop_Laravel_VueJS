<template>
    <div class="product-image">
<!--        <img :src="`https://simracewebshop.com/wp-content/uploads/2021/10/playseat_evolution_red_bull_-_front.png`"-->
        <img src="../../../../resources/css/93290991_4072438332.jpeg"
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

<style>
.image {
    border-radius: 3px;
    //width: 400px;
    //height: auto;

}

</style>
