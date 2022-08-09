<template>
    <h2>{{ company }}</h2>
    <div v-if="services" class="gridTable">
        <div v-for="service in services" :key="service.Id">
            <ServiceListing :post="service" :redirected="true" />
        </div>
        <router-link :to="{ name: 'addServiceByCompany', params: { company: company}}">
            <div class="listing">
                <img alt="Plus" src="../../../public/icons8-plus.svg" style="max-width: 170px" />
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
    name: 'CompanyServicesView',
    props: {
        company: String
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
        fetch(BACK_END + "/partner/" + this.company)
            .then((response) => response.json())
            .then((data) => this.services = data)
            .catch(err => console.log(err.message))
    }
}
</script>