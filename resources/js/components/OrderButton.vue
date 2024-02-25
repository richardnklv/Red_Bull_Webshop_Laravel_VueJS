<template>
    <div class="button-container">
    <form method="POST" :action="'/order'">
        <input type="hidden" name="_token" :value="csrf">

        <input type="hidden" name="product_id" :value="product.id">
        <button type="submit" class="order-button">Order now</button>
    </form>
    </div>
</template>

<script>
export default {
    name: 'OrderButton',
    props: {
        product: Object
    }
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

