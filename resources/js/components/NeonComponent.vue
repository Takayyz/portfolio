<template>
  <div class="top">
    <b>T<span>a</span>ka<span>y</span>yz's</b>
    <b>p<span>or</span>tfol<span>i</span>o</b>
  </div>
</template>

<style>
  @import url('https://fonts.googleapis.com/css?family=Vibur');

  .top {
    position: relative;
    margin: 0 auto;
    padding: 50px 0;
    width: 65%;
    text-align: center;
    user-select: none;
  }

  .top b {
    font: 400 19vh "Vibur";
    color: #fee;
    text-shadow: 0 -40px 100px, 0 0 2px, 0 0 1em #ff4444, 0 0 0.5em #ff4444, 0 0 0.1em #ff4444, 0 10px 3px #000;
  }
  .top b:first-child span {
    animation: blink linear infinite 2s;
  }
  .top b:first-child span:nth-of-type(2) {
    animation: blink linear infinite 3s;
  }
  .top b:last-child span {
    animation: blink linear infinite 1s;
  }
  .top b:last-child span:nth-of-type(2) {
    animation: blink linear infinite 4s;
  }
  @keyframes blink {
    78% {
      color: inherit;
      text-shadow: inherit;
    }
    79% {
      color: #333;
    }
    80% {
      text-shadow: none;
    }
    81% {
      color: inherit;
      text-shadow: inherit;
    }
    82% {
      color: #333;
      text-shadow: none;
    }
    83% {
      color: inherit;
      text-shadow: inherit;
    }
    92% {
      color: #333;
      text-shadow: none;
    }
    92.5% {
      color: inherit;
      text-shadow: inherit;
    }
  }
</style>
