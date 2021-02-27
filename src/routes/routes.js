
import home from '../pagines/home.vue'
import ferseSoci from '../pagines/ferseSoci.vue'
import avantatges from '../pagines/avantatges.vue'
import activitatsArees from '../pagines/activitats/activitatsArees.vue'
import activitatSeccions from '../pagines/activitats/activitatSeccions.vue'
import activitatsVocalies from '../pagines/activitats/activitatsVocalies.vue'


// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.

const routes = [
    { path: '/', component: home },
    { path: '/fer-seSoci', component: ferseSoci },
    { path: '/avantatges', component: avantatges },
    { path: '/activitatsArees', component: activitatsArees },
    { path: '/activitatSeccions', component: activitatSeccions },
    { path: '/activitatsVocalies', component: activitatsVocalies }
]

export default routes