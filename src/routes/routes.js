import HelloWorld from '../components/HelloWorld.vue'
import buttonCounter from '../components/button-counter.vue'

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.

const routes = [
    { path: '/HelloWorld', component: HelloWorld, props: {msg: 'Hello'} },
    { path: '/button-counter', component: buttonCounter }
]

export default routes