<script setup>
import { computed, reactive } from 'vue';

let data = reactive({
  name: "",
  n1: 0,
  n2: 0,
  n3: 0
})

let avg = computed(function () {
  return (data.n1 + data.n2 + data.n3) / 3
})

let students = reactive([])

let moyenne = computed(function () {
  const totalM = students.reduce(function (total, s) {
    return total + s.moy
  }, 0)

  return totalM != 0 ? totalM / students.length : 0
})

function submit() {
  students.push({
    name: data.name,
    n1: data.n1,
    n2: data.n2,
    n3: data.n3,
    moy: avg.value
  })

  console.log(students)
}
</script>
<template>
  <form action="">
    <h1>Student information </h1>
    <div>
      <label for="">Name :</label>
      <input type="text" v-model="data.name">
    </div>

    <div>
      <label for="">note 1 :</label>
      <input type="number" v-model="data.n1">
    </div>

    <div>
      <label for="">note 2 :</label>
      <input type="number" v-model="data.n2">
    </div>

    <div>
      <label for="">note 3 :</label>
      <input type="number" v-model="data.n3">
    </div>
    <p>Le moyenne des notes est : {{ avg }}</p>

    <button type="submit" @click.prevent="submit"> submit</button>

    <p v-if="students.length < 2">le nomber des etudent est moin que 2</p>
    <p v-else-if="students.length == 2">le nomber des etudent est egale a 2</p>
    <p v-else>le nomber des etudent est plus que 2</p>
  </form>

  <div>
    <h1>Students : </h1>
    <p>
      <span>{{ students.length }}</span> / <span>{{ moyenne }}</span>
    </p>
  </div>

  <div v-if="students.length == 0">pas de students</div>
  <div v-else>

    <table border="1">
      <thead>
        <tr>
          <th>Name</th>
          <th>Note 1</th>
          <th>Note 2</th>
          <th>Note 3</th>
          <th>Moyenne</th>
        </tr>
      </thead>
      <div v-for="student in students">
      <tbody>
        <tr>
          <td>{{ student.name }}</td>
          <td>{{ student.n1 }}</td>
          <td>{{ student.n2 }}</td>
          <td>{{ student.name }}</td>
          <td>{{ student.moy }}</td>
        </tr>

      </tbody>
  </div>
  </table>


  </div>





</template>
