import ExamQuestionsAnswers from './components/ExamQuestionsAnswers'
export const routes = [
    {name:'exam-edit', path: '/admin-exam-edit/:id', component: ExamQuestionsAnswers, props:true},
    {name:'exam-index', path: 'admin-exam-index', redirect:'admin-exam-index'}
];
