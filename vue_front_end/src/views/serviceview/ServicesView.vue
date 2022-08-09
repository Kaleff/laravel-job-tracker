<template>        
    <h4>Sort by
            <a class="activeLink">{{ sortBy }}</a> |
            <a @click="toggleCat('type')" v-if="sortBy != 'type'" class="passiveLink">type</a>
            <a @click="toggleCat('company')" v-if="sortBy != 'company'" class="passiveLink">company</a>
    </h4>
    <div v-if="services" class="gridTable">
        <div v-for="service in services" :key="service.Id">
            <ServiceListing :post="service" />
        </div>
    </div>
    <div v-else>
        <p>Loading</p>
    </div>
</template>
<script>
import ServiceListing from '@/components/ServiceListing.vue'
import { BACK_END } from '@/constants.js'

export default {
    name: 'ServicesView',
    components: {
        ServiceListing
    },
    methods: {
        toggleCat(category) {
            this.sortBy = category;
            this.fetchData();
        },
        fetchData() {
            fetch(BACK_END + "/services/" + this.sortBy)
                .then((response) => response.json())
                .then((data) => this.services = data)
                .catch(err => console.log(err.message))
        }
    },
    data() {
        return {
            services: null,
            sortBy: 'type'
        }
    },
    mounted() {
        this.fetchData();
    }
}
</script>