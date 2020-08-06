<template>
    <div class="w-full">
        <filters-exam-aplication
            :country="country"
            @updateCountrySelected="updateCountrySelected"
            @updateDepartmentFilter="updateDepartmentFilter"
        ></filters-exam-aplication>
        <table-exam-aplication
            :students="examsFiltered"
        ></table-exam-aplication>
    </div>
</template>
<script>
export default {
    props:['exam_aplication','country'],
    data() {
        return {
            selected_country_id:null,
            input_department:null
        }
    },
    mounted() {
        console.log(this.exam_aplication[0].student_profiles.age)
    },
    methods: {
        updateCountrySelected(event){
            this.selected_country_id = event;
        },
        updateDepartmentFilter(event){
            this.input_department = event
        }
    },
    computed: {
        examsFiltered(){
            let students_finals_filtered = [];

            this.exam_aplication.forEach(exam => {
                students_finals_filtered.push(exam.student_profiles)
            });

            if (this.selected_country_id) {
                students_finals_filtered = students_finals_filtered.filter(
                    student => student.country_id == this.selected_country_id
                )
            }

            if (this.input_department) {
                students_finals_filtered = students_finals_filtered.filter(
                    student => student.department.toLowerCase().includes(this.input_department.toLowerCase()) );
            }

            return students_finals_filtered;
        }
    },
}
</script>
