import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import PartnersView from '../views/PartnersView.vue'
import ProductsView from '../views/ProductsView.vue'
import ServicesView from '../views/serviceview/ServicesView.vue'
import CompanyServicesView from '../views/serviceview/CompanyServicesView.vue'
import ProductServicesView from '../views/serviceview/ProductServicesView.vue'
import AddPartner from '../views/add/AddPartner.vue'
import AddService from '../views/add/AddService'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/partner/:company',
    name: 'companyServices',
    component: CompanyServicesView,
    props: true
  }, 
  {
    path: '/product/:product',
    name: 'productServices',
    component: ProductServicesView,
    props: true
  }, 
  {
    path: '/services',
    name: 'serviceSummary',
    component: ServicesView
  },
  {
    path: '/partners',
    name: 'partners',
    component: PartnersView
  },
  {
    path: '/products',
    name: 'products',
    component: ProductsView
  },
  {
    path: '/partner/add',
    name: 'addPartner',
    component: AddPartner,
  },
  {
    path: '/product/:product/add',
    name: 'addServiceByProduct',
    component: AddService,
    props: true
  },
  {
    path: '/partner/:company/add',
    name: 'addServiceByCompany',
    component: AddService,
    props: true
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
