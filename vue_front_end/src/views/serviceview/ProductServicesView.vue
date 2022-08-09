<template lang="">
    <h2>{{ product.charAt(0).toUpperCase() + product.slice(1) }}</h2>
    <div v-if="services" class="gridTable">
        <div v-for="service in services" :key="service.Id">
            <ServiceListing :post="service" />
        </div>
        <router-link :to="{ name: 'addServiceByProduct', params: { product: product}}">
            <div class="listing">
                <img alt="Plus" src="../../../public/icons8-plus.svg" />
            </div>
        </router-link>
        
    </div>
    <div v-else>
        <p>Loading</p>
    </div>
</template>
<script>
import ServiceListing from '@/components/ServiceListing.vue'
import { BACK_END } from '@/constants.js'

export default {
    name: 'ProductServicesView',
    props: {
        product: String
    },
    components: {
        ServiceListing
    },
    data() {
        return {
            services: null
        }
    },
    mounted() {
        console.log(BACK_END + "/product/" + this.product);
        fetch(BACK_END + "/product/" + this.product)
            .then((response) => response.json())
            .then((data) => this.services = data)
            .catch(err => console.log(err.message))
    }
}
</script>