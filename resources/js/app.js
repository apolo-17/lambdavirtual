
require('./bootstrap');

window.Vue = require('vue');
//window.VueRouter = require('vue-router');
import VueRouter from 'vue-router';
import {routes} from './routes';

Vue.use(VueRouter)

const router = new VueRouter({routes,mode: 'history'
})
//router.go('/');

Vue.component('exam-creation', require('./components/ExamCreation.vue').default);
Vue.component('exam-form', require('./components/ExamForm.vue').default);
Vue.component('exam-question-and-answers', require('./components/ExamQuestionsAnswers.vue').default);
Vue.component('dates-questionary', require('./components/DatesQuestionary.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
