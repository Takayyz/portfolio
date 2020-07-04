<template>
  <span class="nixie_tube">
    <span class="nixie_wire">0</span>
    <span class="nixie_wire">2</span>
    <span class="nixie_wire">7</span>
    <span class="nixie_wire">8</span>
    <!-- <span v-bind:class="{ fadeout: on_change }" class="nixie_wire">{{previous_num}}</span> -->
    <!-- <span v-bind:class="{ fadein: on_change }" class="light_up_wire">{{show_num}}</span> -->
    <span class="light_up_wire">
      <slot></slot>
    </span>
    <span class="nixie_glass"></span>
    <span class="nixie_cap"></span>
    <span class="nixie_buttom"></span>
  </span>
</template>

<script>
export default {
  props: {
    show_num: [String, Number]  // ニキシー管に表示する数字
  },
  data: () => {
    return{
      on_change: false,
      previous_num: 8
    }
  },
  methods:{
    change_num: function() {
      if(this.show_num == this.previous_num){
        return
      }
      this.on_change = true
      setTimeout(()=>{
        this.on_change = false
        this.previous_num = this.show_num
      }, 200)
    }
  },
  watch:{
    show_num: function() {
      this.change_num()
    }
  },
  mounted() {
    this.change_num()
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');

.nixie_tube {
  font-size: 200px;
  font-family: 'Quicksand', sans-serif;
  color: #fff256;
  text-shadow: 0 0 0.05em #d45424, 0 0 0.05em #d45424, 0 0 0.05em #d45524,  /* 導線の輪郭 */
               0 0 0.1em #d45424, 0 0 0.1em #d45424, 0 0 0.1em #d45524,  /* 導線の輪郭 */
               0 0 0.5em #d45424, 0 0 0.5em #d45424, 0 0 0.5em #d45524,  /* 導線の輪郭 */
               0 0 0.5em #d45424, 0 0 0.5em #d45424, 0 0 0.5em #d45524,  /* 導線の輪郭 */
               0 0.05em 0.01em #000;
  position: relative;
}

.light_up_wire{
  position: absolute;
  transform: scale(0.8, 1.0);
  line-height: 1.5;
}

.nixie_wire {
  color: #34241c;
  text-shadow: none;
  position: absolute;
  transform   : scale(0.8, 1.0);
}

.nixie_glass {
  width : 0.55em;
  height : 1.2em;
  position: relative;
  top: 0.18em;
  opacity: 0.5;
  background: radial-gradient(transparent 60%, #aa3315);
  border-radius: 0.15em;
  display: inline-block;
}

.nixie_cap {
  width : 0.6em;
  height : 0.2em;
  position: absolute;
  top: -0.08em;
  left: -0.025em;
  background: linear-gradient( transparent 40%, #aa5d31 70%,#111 80%),
              linear-gradient(to top left, #111 60%, #444 80%);
  border-radius: 0.08em 0.08em 0.02em 0.02em;
  display: inline-block;
}

.nixie_buttom {
  width : 0.6em;
  height : 0.2em;
  position: absolute;
  top: 0.98em;
  left: -0.025em;
  background: linear-gradient(to top, transparent 40%, #aa5d31 70%,#111 80%),
              linear-gradient(to top left, #111 60%, #444 80%);
  border-radius: 0.02em 0.02em 0.08em 0.08em;
  display: inline-block;
}

.fadein {
  animation: fadein linear 0.2s;
}

.fadeout {
  animation: fadeout linear 0.2s forwards;
}

@keyframes fadein {
  0% {
    color: #34241c;
    text-shadow: none;
  }
  100% {
    color: inherit;
    text-shadow: inherit;
  }
}

@keyframes fadeout {
  0% {
    color: inherit;
    text-shadow: inherit;
  }
  100% {
    color: #000;
    text-shadow: none;
  }
}
</style>