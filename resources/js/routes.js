import ExamQuestionsAnswers from './components/ExamQuestionsAnswers'
import QuestionsExam from './components/QuestionsExam';

export const routes = [
    {name:'exam-edit', path: '/admin-exam-edit/:id', component: ExamQuestionsAnswers, props:true},
    {name:'exam-index', path: 'admin-exam-index', redirect:'admin-exam-index'},
    {name:'home', path: 'home', redirect:'home'},
    {name:'exam-runing', path:'/exam-runing/:id', component: QuestionsExam, props:true},
    {name:'show-result', path:'/exam-show-result/:id', props:true}
];
