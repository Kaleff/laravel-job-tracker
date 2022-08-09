<template>
    <div v-if="products">
        <div v-for="product in products" :key="product.Id">
            <ProductListing :post="product" />
        </div>
    </div>
    <div v-else>
        <p>Loading</p>
    </div>
</template>
<script>
import ProductListing from '@/components/ProductListing.vue'
import { BACK_END } from '@/constants.js'

export default {
    name: 'ProductsView',
    components: {
        ProductListing
    },
    data() {
        return {
            products: null
        }
    },
    mounted() {
        fetch(BACK_END + "/products")
            .then((response) => response.json())
            .then((data) => this.products = data)
            .catch(err => console.log(err.message))
    }
}

</script>