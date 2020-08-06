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

            </thead>
            <tbody>

                <tr v-for="(student, index) in students" :key="student.id">
                    <td class="border px-4 py-2">
                        {{ student.name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.last_name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.user.email }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.phone_number }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.country.name }}
                    </td>
                    <td class="border px-4 py-2">
                        {{ student.department }}
                    </td>
                    <td class="border px-4 py-2">

                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    props:['students'],
}
</script>
