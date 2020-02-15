
import home from '../pagines/home.vue'
import ferseSoci from '../pagines/ferseSoci.vue'

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.

const routes = [
    { path: '/', component: home },
    { path: '/fer-seSoci', component: ferseSoci }
]

export default routes