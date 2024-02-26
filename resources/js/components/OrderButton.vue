<template>
    <div class="button-container">
<!--        <input type="hidden" name="productId" :value="productId" >-->
        <router-link :to="{name: 'Checkout',
        params: {productId: productId} ,
        query: {productId: productId, sku: sku}}">

        <button  type="submit" class="order-button">Order now</button>
        </router-link>
    </div>

</template>

<script>



export default {

    name: 'OrderButton',
    props: {
        productId: Number,
        sku: String,
        required: true,
    },
    // methods: {
    //     navigateToCheckout() {
    //         this.$router.push({
    //             path: 'Checkout',
    //             params: { productId: this.productId }
    //             //query: { product_id: this.product.id}
    //         });
    //     }
    // }
}
</script>

<style scoped>
.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    width: 230px;
    height: 40px;
}
.order-button {
    background-color: #ffa800;
    color: #000000;
    border-radius: 20px;
    border: none;
    font-weight: bold;
    align-items: center;
    font-size: 16px;
}
</style>

