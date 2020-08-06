<template>
    <div class="w-full">
        <table class="table-fixed">
            <thead>
                <th class="w-1/4 px-4 py-2">Nombre</th>
                <th class="w-1/4 px-4 py-2">Apellidos</th>
                <th class="w-1/4 px-4 py-2">Email</th>
                <th class="w-1/4 px-4 py-2">Telefono</th>
                <th class="w-auto">Pais</th>
                <th class="w-auto">Departamento</th>
                <th class="w-auto">Nota del examen</th>
                <th class="w-auto"></th>

            </thead>
            <tbody>

                <tr v-for="(student, index) in students" :key="student.id">
                    <td class="border px-4 py-2">
                        {{ student.student_profile.name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.student_profile.last_name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.student_profile.user.email }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.student_profile.phone_number }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.student_profile.country.name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.student_profile.department }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.result }}
                    </td>
                    <td class="border px-4 py-2">
                        <a @click="examDetails(student.exam_id)">Ver detalles del examen</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    props:['students'],
    methods: {
        examDetails(id){

            this.$router.push('/admin-student-profile-exam-result-show/'+id);
            location.reload();
        }
    },
}
</script>
