<template>
    <div v-if="partners" class="gridTable">
        <div v-for="partner in partners" :key="partner.Id">
            <PartnerListing :post="partner" />
        </div>
        <router-link to="/partner/add">
            <div class="listing">
                <img alt="Plus" src="../../public/icons8-plus.svg" />
            </div>
        </router-link>
    </div>
    <div v-else>
        <p>Loading</p>
    </div>
</template>
<script>
import PartnerListing from '@/components/PartnerListing.vue'
import { BACK_END } from '@/constants.js'

export default {
    name: 'PartnersView',
    components: {
        PartnerListing
    },
    data() {
        return {
            partners: null
        }
    },
    mounted() {
        fetch(BACK_END + "/partners")
            .then((response) => response.json())
            .then((data) => this.partners = data)
            .catch(err => console.log(err.message))
    }
}
</script>