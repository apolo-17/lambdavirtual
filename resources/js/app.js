
require('./bootstrap');

window.Vue = require('vue');

Vue.component('exam-creation', require('./components/ExamCreation.vue').default);
Vue.component('exam-form', require('./components/ExamForm.vue').default);
Vue.component('exam-question-and-answers', require('./components/ExamQuestionsAnswers.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
