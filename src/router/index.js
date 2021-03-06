import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [{
        path: '/',
        name: 'home',
        component: HomeView
    },
    {
        path: '/about',
        name: 'about',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/AboutView.vue')
    },
    {
        path: '/login',
        name: 'login',

        component: () =>
            import ('../views/LogInView.vue')
    },
    {
        path: '/users',
        name: 'users',

        component: () =>
            import ('../views/UsersApp.vue')
    },
    {
        path: '/detail',
        name: 'detail',

        component: () =>
            import ('../views/DetailUsers.vue')
    },
    {
        path: '/register',
        name: 'register',

        component: () =>
            import ('../views/RegisterUsers.vue')
    }

]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router