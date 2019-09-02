<<<<<<< HEAD
<template>
  <div>
    <li class="list-group-item" :class="className">
      <slot></slot>
    </li>
    <small class="badge float-right" :class="badgeClass">{{ user }}</small>
  </div>
</template>

<script>
  export default {
    props: [
      'color',
      'user'
    ],
    computed: {
      className() {
        return 'list-group-item-'+this.color;
      },
      badgeClass(){
        return 'badge-'+this.color;
      }
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
=======
<template>
  <div>
    <li class="list-group-item" :class="className">
      <slot></slot>
    </li>
    <small class="badge float-right" :class="badgeClass">{{ user }}</small>
  </div>
</template>

<script>
  export default {
    props: [
      'color',
      'user'
    ],
    computed: {
      className() {
        return 'list-group-item-'+this.color;
      },
      badgeClass(){
        return 'badge-'+this.color;
      }
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>

>>>>>>> afd09d1a153875a4bd6e1025cf2b8573eb015ccb
