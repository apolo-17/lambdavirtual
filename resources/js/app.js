
require('./bootstrap');

window.Vue = require('vue');
//window.VueRouter = require('vue-router');
import VueRouter from 'vue-router';
import {routes} from './routes';

Vue.use(VueRouter)
Vue.use(require('vue-moment'));

const router = new VueRouter({routes,mode: 'history'
})
//router.go('/');

Vue.component('exam-creation', require('./components/ExamCreation.vue').default);
Vue.component('exam-form', require('./components/ExamForm.vue').default);
Vue.component('exam-question-and-answers', require('./components/ExamQuestionsAnswers.vue').default);
Vue.component('answers', require('./components/Answers.vue').default);
Vue.component('deploy-exam', require('./components/DeployExam').default);
Vue.component('exam-model', require('./components/ExamModel').default);
Vue.component('message-exam', require('./components/MessageExam').default);
//Present exam student
Vue.component('questions-exam', require('./components/QuestionsExam').default);
Vue.component('answers-exam', require('./components/AnswersExam').default);
//Action of exam to admin
Vue.component('delete-exam', require('./components/DeleteExam').default);
Vue.component('show-exam', require('./components/ShowExam').default);
//Show exam All students aplication
Vue.component('exam-student-aplication', require('./components/ExamStudentAplication').default);
Vue.component('filters-exam-aplication', require('./components/FiltersExamAplication').default);
Vue.component('table-exam-aplication', require('./components/TableExamAplication').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
var moment = require('moment');
const app = new Vue({
    el: '#app',
    router,
    moment
});
