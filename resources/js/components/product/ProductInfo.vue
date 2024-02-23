<template>
    <div class="product-info">
        <h1>{{ product.name }}</h1>
        <p>{{ product.description }}</p>
        <p>SKU: {{ product.base_sku }}</p>
    </div>
</template>

<script>
export default {
    name: 'ProductInfo',
    props: {
        product: Object
    }
}
</script>

<style>

</style>
