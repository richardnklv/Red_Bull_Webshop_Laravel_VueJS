<template>
    <div class="product-info">
        <h1>{{ name }}</h1>
        <p>{{ description }}</p>
    </div>
</template>

<script>
export default {
    name: 'ProductInfo',
    props: {
        name: Object,
        description: String
    }
}
</script>

<style>

</style>
