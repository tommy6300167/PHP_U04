<?php
require __DIR__. '/_connect_db.php';

$pname = 'problem_control'

?>

<?php include __DIR__. '/__header.php'; ?>



<style>
body {
  padding: 0;
  margin: 0;
}

.full-baby-container {
  position: absolute;
  height: auto;
  min-height: 100vh;
  width: 100%;
  background-color: #86b1c2;
  overflow-x: hidden;
}

.baby-container {
  position: relative;
  height: 530px;
  width: 220px;
  margin: auto;
  top: 10vh;
  -moz-transform: rotate(-39deg);
  -ms-transform: rotate(-39deg);
  -webkit-transform: rotate(-39deg);
  transform: rotate(-39deg);
}

.towel {
  position: relative;
  top: 5%;
  height: 90%;
  width: 90%;
  background-color: #e8dcd8;
  margin: auto;
  -moz-border-radius: 500px;
  -webkit-border-radius: 500px;
  border-radius: 500px;
  -moz-box-shadow: -25px -25px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: -25px -25px 0px rgba(0, 0, 0, 0.1);
  box-shadow: -25px -25px 0px rgba(0, 0, 0, 0.1);
  -moz-animation: towel-anim;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: none;
  -webkit-animation: towel-anim;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: none;
  animation: towel-anim;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: none;
}

@keyframes towel-anim {
  0% {
    left: -4%;
  }
  50% {
    left: 4%;
  }
  100% {
    left: -4%;
  }
}
.towel-band {
  position: absolute;
  height: 30px;
  width: 100%;
  top: 60%;
  background: #cdd3d7;
  -moz-animation: towel-band-anim;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: none;
  -webkit-animation: towel-band-anim;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: none;
  animation: towel-band-anim;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: none;
}

@keyframes towel-band-anim {
  0% {
    -moz-transform: rotateY(0deg) skewY(-30deg);
    -ms-transform: rotateY(0deg) skewY(-30deg);
    -webkit-transform: rotateY(0deg) skewY(-30deg);
    transform: rotateY(0deg) skewY(-30deg);
    top: 50%;
  }
  50% {
    -moz-transform: rotateY(0deg) skewY(-30deg);
    -ms-transform: rotateY(0deg) skewY(-30deg);
    -webkit-transform: rotateY(0deg) skewY(-30deg);
    transform: rotateY(0deg) skewY(-30deg);
    top: 54%;
  }
  100% {
    -moz-transform: rotateY(0deg) skewY(-30deg);
    -ms-transform: rotateY(0deg) skewY(-30deg);
    -webkit-transform: rotateY(0deg) skewY(-30deg);
    transform: rotateY(0deg) skewY(-30deg);
    top: 50%;
  }
}
.baby-face {
  position: absolute;
  height: 150px;
  width: 150px;
  background-color: #f9c19f;
  top: 10%;
  left: 17%;
  -moz-border-radius: 500px;
  -webkit-border-radius: 500px;
  border-radius: 500px;
  -moz-animation: face-anim;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: none;
  -webkit-animation: face-anim;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: none;
  animation: face-anim;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: none;
}

@keyframes face-anim {
  0% {
    left: 7%;
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }
  20% {
    -moz-transform: rotateY(10deg);
    -ms-transform: rotateY(10deg);
    -webkit-transform: rotateY(10deg);
    transform: rotateY(10deg);
  }
  50% {
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
    left: 27%;
  }
  60% {
    -moz-transform: rotateY(10deg);
    -ms-transform: rotateY(10deg);
    -webkit-transform: rotateY(10deg);
    transform: rotateY(10deg);
  }
  100% {
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
    left: 7%;
  }
}
.blonde-hair {
  position: absolute;
  top: -8%;
  left: 17%;
  height: 30px;
  width: 70%;
  background-color: #f5a11c;
  margin: auto;
  -moz-border-radius-topleft: 90px;
  -webkit-border-top-left-radius: 90px;
  border-top-left-radius: 90px;
  -moz-border-radius-bottomleft: 20px;
  -webkit-border-bottom-left-radius: 20px;
  border-bottom-left-radius: 20px;
}

.towel-bak {
  position: absolute;
  top: 10%;
  left: 17%;
  height: 30px;
  width: 60%;
  background-color: #e8dcd8;
  margin: auto;
  -moz-border-radius-topleft: 90px;
  -webkit-border-top-left-radius: 90px;
  border-top-left-radius: 90px;
  -moz-border-radius-topright: 0px;
  -webkit-border-top-right-radius: 0px;
  border-top-right-radius: 0px;
}

.hair-containerd {
  position: absolute;
  top: 9.5%;
  left: 29%;
  height: 20px;
  width: 95px;
  -moz-border-radius-topleft: 90px;
  -webkit-border-top-left-radius: 90px;
  border-top-left-radius: 90px;
  -moz-border-radius-topright: 90px;
  -webkit-border-top-right-radius: 90px;
  border-top-right-radius: 90px;
}

.panel-container {
  width: 100%;
  height: 10px;
  border: 0px solid #ccc;
  margin: 0 0px;
  position: absolute;
  -moz-transform: perspective(1500px) skew(-29deg) rotate(-9deg);
  -ms-transform: perspective(1500px) skew(-29deg) rotate(-9deg);
  -webkit-transform: perspective(1500px) skew(-29deg) rotate(-9deg);
  transform: perspective(1500px) skew(-29deg) rotate(-9deg);
  left: -1%;
  top: 9.1%;
}

#rotate-x .panel {
  background-size: 100%;
  background: #f5a11c;
  width: 87px;
  height: 100%;
  min-height: 42px;
  margin: auto;
  -moz-transform: perspective(2329px) rotateX(-45deg) translate3d(0px, 0px, 0px);
  -ms-transform: perspective(2329px) rotateX(-45deg) translate3d(0px, 0px, 0px);
  -webkit-transform: perspective(2329px) rotateX(-45deg) translate3d(0px, 0px, 0px);
  transform: perspective(2329px) rotateX(-45deg) translate3d(0px, 0px, 0px);
  -moz-border-radius-topleft: 1258px;
  -webkit-border-top-left-radius: 1258px;
  border-top-left-radius: 1258px;
  -moz-border-radius-topright: 1258px;
  -webkit-border-top-right-radius: 1258px;
  border-top-right-radius: 1258px;
  -moz-border-radius-bottomleft: 124px;
  -webkit-border-bottom-left-radius: 124px;
  border-bottom-left-radius: 124px;
  -moz-border-radius-bottomright: 127px;
  -webkit-border-bottom-right-radius: 127px;
  border-bottom-right-radius: 127px;
}

.flick-down {
  position: absolute;
  height: 30px;
  width: 87px;
  background-color: #f5a11c;
  left: 31%;
  top: 168%;
  -moz-transform: skew(-2deg);
  -ms-transform: skew(-2deg);
  -webkit-transform: skew(-2deg);
  transform: skew(-2deg);
  -moz-border-radius-bottomleft: 100%;
  -webkit-border-bottom-left-radius: 100%;
  border-bottom-left-radius: 100%;
  -moz-border-radius-bottomright: 100%;
  -webkit-border-bottom-right-radius: 100%;
  border-bottom-right-radius: 100%;
  -moz-border-radius-topleft: 67%;
  -webkit-border-top-left-radius: 67%;
  border-top-left-radius: 67%;
  -moz-border-radius-topright: 67%;
  -webkit-border-top-right-radius: 67%;
  border-top-right-radius: 67%;
}

.flick-up {
  position: absolute;
  height: 11px;
  width: 52px;
  background-color: #f5a11c;
  left: 56%;
  top: 198%;
  -moz-transform: skew(-37deg) rotate(20deg);
  -ms-transform: skew(-37deg) rotate(20deg);
  -webkit-transform: skew(-37deg) rotate(20deg);
  transform: skew(-37deg) rotate(20deg);
  -moz-border-radius-topright: 100%;
  -webkit-border-top-right-radius: 100%;
  border-top-right-radius: 100%;
}

.flick-up-2 {
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 48px 19px 16px;
  border-color: transparent transparent #f5a11c transparent;
  right: 16%;
  top: 230%;
  -moz-transform: rotate(180deg) skew(217deg);
  -ms-transform: rotate(180deg) skew(217deg);
  -webkit-transform: rotate(180deg) skew(217deg);
  transform: rotate(180deg) skew(217deg);
}

.flick-up-2-round {
  position: absolute;
  height: 9px;
  width: 41px;
  background-color: #f5a11c;
  left: 62%;
  top: 277%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -moz-transform: rotate(29deg);
  -ms-transform: rotate(29deg);
  -webkit-transform: rotate(29deg);
  transform: rotate(29deg);
}

.eyes {
  position: absolute;
  height: 150px;
  width: 150px;
  -moz-animation: eyes-anim;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: none;
  -webkit-animation: eyes-anim;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: none;
  animation: eyes-anim;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: none;
}

@keyframes eyes-anim {
  0% {
    left: -8px;
  }
  50% {
    left: 12px;
  }
  100% {
    left: -8px;
  }
}
.eye {
  position: absolute;
  height: 20px;
  width: 20px;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  background: #1b414c;
}

.left-eye {
  top: 35%;
  left: 18%;
}

.right-eye {
  top: 35%;
  left: 68%;
}

.mouth {
  position: absolute;
  height: 70px;
  width: 70px;
  top: 55%;
  left: 35%;
}

.right-mouth-part {
  position: absolute;
  height: 35px;
  width: 50%;
  background: #7e2e33;
  margin: auto;
  float: left;
  top: 3px;
  left: 31px;
  -moz-transform: skewY(14deg) rotate(-13deg);
  -ms-transform: skewY(14deg) rotate(-13deg);
  -webkit-transform: skewY(14deg) rotate(-13deg);
  transform: skewY(14deg) rotate(-13deg);
  -moz-border-radius-topleft: 50%;
  -webkit-border-top-left-radius: 50%;
  border-top-left-radius: 50%;
  -moz-border-radius-bottomleft: 100%;
  -webkit-border-bottom-left-radius: 100%;
  border-bottom-left-radius: 100%;
  -moz-border-radius-topright: 100%;
  -webkit-border-top-right-radius: 100%;
  border-top-right-radius: 100%;
  -moz-border-radius-bottomright: 100%;
  -webkit-border-bottom-right-radius: 100%;
  border-bottom-right-radius: 100%;
  -moz-animation: right-mouth;
  -moz-animation-duration: 0.3s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: linear;
  -webkit-animation: right-mouth;
  -webkit-animation-duration: 0.3s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: linear;
  animation: right-mouth;
  animation-duration: 0.3s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: linear;
}

@keyframes right-mouth {
  0% {
    height: 30px;
    width: 41%;
    -moz-transform: skewY(11deg) rotate(-15deg);
    -ms-transform: skewY(11deg) rotate(-15deg);
    -webkit-transform: skewY(11deg) rotate(-15deg);
    transform: skewY(11deg) rotate(-15deg);
    top: 7px;
    left: 15px;
    -moz-border-radius-topleft: 0%;
    -webkit-border-top-left-radius: 0%;
    border-top-left-radius: 0%;
    -moz-border-radius-bottomleft: 100%;
    -webkit-border-bottom-left-radius: 100%;
    border-bottom-left-radius: 100%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 100%;
    -webkit-border-bottom-right-radius: 100%;
    border-bottom-right-radius: 100%;
  }
  50% {
    height: 40px;
    width: 62%;
    background: #7e2e33;
    margin: auto;
    float: left;
    top: -3px;
    left: 18px;
    -moz-transform: skewY(-11deg) rotate(-11deg);
    -ms-transform: skewY(-11deg) rotate(-11deg);
    -webkit-transform: skewY(-11deg) rotate(-11deg);
    transform: skewY(-11deg) rotate(-11deg);
    -moz-border-radius-topleft: 22%;
    -webkit-border-top-left-radius: 22%;
    border-top-left-radius: 22%;
    -moz-border-radius-bottomleft: 102%;
    -webkit-border-bottom-left-radius: 102%;
    border-bottom-left-radius: 102%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 70%;
    -webkit-border-bottom-right-radius: 70%;
    border-bottom-right-radius: 70%;
  }
  100% {
    height: 30px;
    width: 41%;
    -moz-transform: skewY(11deg) rotate(-11deg);
    -ms-transform: skewY(11deg) rotate(-11deg);
    -webkit-transform: skewY(11deg) rotate(-11deg);
    transform: skewY(11deg) rotate(-11deg);
    top: 7px;
    left: 15px;
    -moz-border-radius-topleft: 0%;
    -webkit-border-top-left-radius: 0%;
    border-top-left-radius: 0%;
    -moz-border-radius-bottomleft: 100%;
    -webkit-border-bottom-left-radius: 100%;
    border-bottom-left-radius: 100%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 100%;
    -webkit-border-bottom-right-radius: 100%;
    border-bottom-right-radius: 100%;
  }
}
.left-mouth-part {
  position: absolute;
  height: 30px;
  width: 50%;
  background: #7e2e33;
  margin: auto;
  float: left;
  -moz-border-radius-topleft: 100%;
  -webkit-border-top-left-radius: 100%;
  border-top-left-radius: 100%;
  -moz-border-radius-bottomleft: 100%;
  -webkit-border-bottom-left-radius: 100%;
  border-bottom-left-radius: 100%;
  -moz-border-radius-topright: 50%;
  -webkit-border-top-right-radius: 50%;
  border-top-right-radius: 50%;
  -moz-border-radius-bottomright: 50%;
  -webkit-border-bottom-right-radius: 50%;
  border-bottom-right-radius: 50%;
  left: 10px;
  -moz-animation: left-mouth;
  -moz-animation-duration: 0.3s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: linear;
  -webkit-animation: left-mouth;
  -webkit-animation-duration: 0.3s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: linear;
  animation: left-mouth;
  animation-duration: 0.3s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: linear;
}

@keyframes left-mouth {
  0% {
    -moz-transform: skewY(11deg) rotate(-11deg);
    -ms-transform: skewY(11deg) rotate(-11deg);
    -webkit-transform: skewY(11deg) rotate(-11deg);
    transform: skewY(11deg) rotate(-11deg);
    top: 6px;
    left: -3px;
    -moz-border-radius-topleft: 100%;
    -webkit-border-top-left-radius: 100%;
    border-top-left-radius: 100%;
    -moz-border-radius-bottomleft: 100%;
    -webkit-border-bottom-left-radius: 100%;
    border-bottom-left-radius: 100%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 100%;
    -webkit-border-bottom-right-radius: 100%;
    border-bottom-right-radius: 100%;
  }
  50% {
    height: 31px;
    width: 61%;
    background: #7e2e33;
    margin: auto;
    float: left;
    top: 3px;
    left: -11px;
    -moz-transform: skewY(8deg) rotate(-7deg);
    -ms-transform: skewY(8deg) rotate(-7deg);
    -webkit-transform: skewY(8deg) rotate(-7deg);
    transform: skewY(8deg) rotate(-7deg);
    -moz-border-radius-topleft: 100%;
    -webkit-border-top-left-radius: 100%;
    border-top-left-radius: 100%;
    -moz-border-radius-bottomleft: 67%;
    -webkit-border-bottom-left-radius: 67%;
    border-bottom-left-radius: 67%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 5%;
    -webkit-border-bottom-right-radius: 5%;
    border-bottom-right-radius: 5%;
  }
  100% {
    -moz-transform: skewY(11deg) rotate(-11deg);
    -ms-transform: skewY(11deg) rotate(-11deg);
    -webkit-transform: skewY(11deg) rotate(-11deg);
    transform: skewY(11deg) rotate(-11deg);
    top: 6px;
    left: -3px;
    -moz-border-radius-topleft: 100%;
    -webkit-border-top-left-radius: 100%;
    border-top-left-radius: 100%;
    -moz-border-radius-bottomleft: 100%;
    -webkit-border-bottom-left-radius: 100%;
    border-bottom-left-radius: 100%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 100%;
    -webkit-border-bottom-right-radius: 100%;
    border-bottom-right-radius: 100%;
  }
}
.mouth-tongue {
  position: absolute;
  height: 22px;
  width: 16px;
  background-color: #ed5c56;
  left: 15px;
  top: 14px;
  -moz-border-radius-topleft: 100%;
  -webkit-border-top-left-radius: 100%;
  border-top-left-radius: 100%;
  -moz-border-radius-topright: 100%;
  -webkit-border-top-right-radius: 100%;
  border-top-right-radius: 100%;
  -moz-border-radius-bottomleft: 40%;
  -webkit-border-bottom-left-radius: 40%;
  border-bottom-left-radius: 40%;
  -moz-border-radius-bottomright: 30%;
  -webkit-border-bottom-right-radius: 30%;
  border-bottom-right-radius: 30%;
  -moz-animation: mouth-tongue-anim;
  -moz-animation-duration: 0.3s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: linear;
  -webkit-animation: mouth-tongue-anim;
  -webkit-animation-duration: 0.3s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: linear;
  animation: mouth-tongue-anim;
  animation-duration: 0.3s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: linear;
}

@keyframes mouth-tongue-anim {
  0% {
    -moz-border-radius-topleft: 50%;
    -webkit-border-top-left-radius: 50%;
    border-top-left-radius: 50%;
    -moz-border-radius-bottomleft: 0%;
    -webkit-border-bottom-left-radius: 0%;
    border-bottom-left-radius: 0%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 0%;
    -webkit-border-bottom-right-radius: 0%;
    border-bottom-right-radius: 0%;
    -moz-transform: skew(0deg);
    -ms-transform: skew(0deg);
    -webkit-transform: skew(0deg);
    transform: skew(0deg);
    top: 13px;
  }
  50% {
    -moz-border-radius-topleft: 100%;
    -webkit-border-top-left-radius: 100%;
    border-top-left-radius: 100%;
    -moz-border-radius-bottomleft: 0%;
    -webkit-border-bottom-left-radius: 0%;
    border-bottom-left-radius: 0%;
    -moz-border-radius-topright: 50%;
    -webkit-border-top-right-radius: 50%;
    border-top-right-radius: 50%;
    -moz-border-radius-bottomright: 0%;
    -webkit-border-bottom-right-radius: 0%;
    border-bottom-right-radius: 0%;
    -moz-transform: skew(-12deg);
    -ms-transform: skew(-12deg);
    -webkit-transform: skew(-12deg);
    transform: skew(-12deg);
    top: 14px;
  }
  100% {
    -moz-border-radius-topleft: 50%;
    -webkit-border-top-left-radius: 50%;
    border-top-left-radius: 50%;
    -moz-border-radius-bottomleft: 0%;
    -webkit-border-bottom-left-radius: 0%;
    border-bottom-left-radius: 0%;
    -moz-border-radius-topright: 100%;
    -webkit-border-top-right-radius: 100%;
    border-top-right-radius: 100%;
    -moz-border-radius-bottomright: 0%;
    -webkit-border-bottom-right-radius: 0%;
    border-bottom-right-radius: 0%;
    -moz-transform: skew(0deg);
    -ms-transform: skew(0deg);
    -webkit-transform: skew(0deg);
    transform: skew(0deg);
    top: 13px;
  }
}
.chin {
  position: absolute;
  width: 30px;
  height: 12px;
  background-color: #f9c19f;
  top: 77%;
  right: 40%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}

.hair-container {
  position: relative;
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  top: -430px;
  -moz-animation: hair-anim;
  -moz-animation-duration: 1s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: none;
  -webkit-animation: hair-anim;
  -webkit-animation-duration: 1s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: none;
  animation: hair-anim;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: none;
}

@keyframes hair-anim {
  0% {
    left: -25px;
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }
  10% {
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }
  50% {
    left: 23px;
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }
  60% {
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }
  100% {
    left: -25px;
    -moz-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }
}
.baby-dummy-container {
  position: relative;
  height: 100px;
  width: 100px;
  margin: auto;
  top: -78px;
  left: -212px;
}

.baby-dummy-ring {
  position: relative;
  height: 30px;
  width: 30px;
  margin: auto;
  border: 6px solid #f5a11c;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  top: 50%;
  -moz-box-shadow: -3px -2px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: -3px -2px 0px rgba(0, 0, 0, 0.1);
  box-shadow: -3px -2px 0px rgba(0, 0, 0, 0.1);
}

.baby-dummy-base-bottom {
  position: absolute;
  height: 25px;
  width: 20px;
  background: #7e2e33;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  top: 35px;
  left: 48px;
  -moz-box-shadow: -13px -12px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: -13px -12px 0px rgba(0, 0, 0, 0.1);
  box-shadow: -13px -12px 0px rgba(0, 0, 0, 0.1);
}

.baby-dummy-base-middle {
  position: absolute;
  height: 15px;
  width: 50px;
  background: #7e2e33;
  -moz-border-radius: 500px;
  -webkit-border-radius: 500px;
  border-radius: 500px;
  top: 30px;
  left: 37px;
  -moz-transform: rotate(20deg);
  -ms-transform: rotate(20deg);
  -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  -moz-box-shadow: -8px 0px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: -8px 0px 0px rgba(0, 0, 0, 0.1);
  box-shadow: -8px 0px 0px rgba(0, 0, 0, 0.1);
}

.dummy-chew {
  position: absolute;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  width: 29px;
  height: 24px;
  border: none;
  -moz-border-radius: 80% 0 55% 50%/55% 0 80% 50%;
  -webkit-border-radius: 80%;
  border-radius: 80% 0 55% 50%/55% 0 80% 50%;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: black;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #e8dcd8;
  -moz-transform: rotate(136deg) skew(-35deg);
  -ms-transform: rotate(136deg) skew(-35deg);
  -webkit-transform: rotate(136deg) skew(-35deg);
  transform: rotate(136deg) skew(-35deg);
  left: 54px;
  top: 4px;
  -moz-box-shadow: 9px 6px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 9px 6px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 9px 6px 0px rgba(0, 0, 0, 0.1);
}

.baby-bottle-container {
  position: absolute;
  height: 100px;
  width: 150px;
  margin: auto;
  left: 310px;
  top: 140px;
  float: right;
  -moz-transform: rotate(22deg);
  -ms-transform: rotate(22deg);
  -webkit-transform: rotate(22deg);
  transform: rotate(22deg);
  -moz-transform-origin: 100% 36% 50%;
  -ms-transform-origin: 100% 36% 50%;
  -webkit-transform-origin: 100% 36% 50%;
  transform-origin: 100% 36% 50%;
  -moz-animation: bottle-anim;
  -moz-animation-duration: 4s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: none;
  -webkit-animation: bottle-anim;
  -webkit-animation-duration: 4s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: none;
  animation: bottle-anim;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: none;
}

@keyframes bottle-anim {
  50% {
    left: 305px;
    top: 165px;
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}
.bottle-glass {
  position: absolute;
  height: 64px;
  width: 88px;
  background-color: #e8dcd8;
  margin: auto;
  top: 18px;
  right: 15px;
  -moz-border-radius-topright: 10px;
  -webkit-border-top-right-radius: 10px;
  border-top-right-radius: 10px;
  -moz-border-radius-bottomright: 10px;
  -webkit-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -moz-box-shadow: 1px -10px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 1px -10px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 1px -10px 0px rgba(0, 0, 0, 0.05);
}

.bottle-rim {
  position: absolute;
  height: 80px;
  width: 20px;
  background-color: #f3cf9f;
  margin: auto;
  top: 10px;
  right: 90px;
  -moz-border-radius: 500px;
  -webkit-border-radius: 500px;
  border-radius: 500px;
  -moz-box-shadow: 0px -7px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px -7px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px -7px 0px rgba(0, 0, 0, 0.05);
}

.bottle-rim-middle {
  position: absolute;
  height: 60px;
  width: 31px;
  background-color: #f1b980;
  margin: auto;
  top: 20px;
  right: 95px;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -moz-box-shadow: 2px -10px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 2px -10px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 2px -10px 0px rgba(0, 0, 0, 0.05);
}

.bottle-rim-chew {
  position: absolute;
  height: 26px;
  width: 31px;
  background-color: #f1b980;
  margin: auto;
  top: 35px;
  right: 109px;
  -moz-border-radius: 500px;
  -webkit-border-radius: 500px;
  border-radius: 500px;
  -moz-box-shadow: -2px -7px 0px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: -2px -7px 0px rgba(0, 0, 0, 0.05);
  box-shadow: -2px -7px 0px rgba(0, 0, 0, 0.05);
}

.bottle-measure {
  position: relative;
  height: 26px;
  width: 4px;
  background-color: #cdd3d7;
  float: left;
  margin-left: 10px;
  left: 14px;
  top: 6px;
  -moz-border-radius: 500px;
  -webkit-border-radius: 500px;
  border-radius: 500px;
  -moz-animation: bottle-measure-anim;
  -moz-animation-duration: 4s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-delay: 0s;
  -moz-animation-direction: forwards;
  -moz-default-animation-timing-function: none;
  -webkit-animation: bottle-measure-anim;
  -webkit-animation-duration: 4s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-delay: 0s;
  -webkit-animation-direction: forwards;
  -webkit-default-animation-timing-function: none;
  animation: bottle-measure-anim;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-delay: 0s;
  animation-direction: forwards;
  default-animation-timing-function: none;
}

@keyframes bottle-measure-anim {
  50% {
    top: 30px;
  }
}


</style>

<div class="full-baby-container">
	<div class="baby-container">
		<div class="baby-bottle-container">
			<div class="bottle">
				<div class="bottle-glass">
					<div class="bottle-measure"></div>
					<div class="bottle-measure"></div>
				</div>
				<div class="bottle-rim-chew"></div>
				<div class="bottle-rim-middle"></div>
				<div class="bottle-rim"></div>
			</div>
		</div>
		
		<div class="towel">
			<div class="towel-band"></div>
		</div>
		
		<div class="baby-head">
			<div class="baby-face">
				<div class="eyes">
					<div class="eye left-eye"></div>
					<div class="eye right-eye"></div>
				</div>
				<div class="mouth">
					<div class="left-mouth-part"></div>
					<div class="right-mouth-part"></div>
					<div class="mouth-tongue"></div>
				</div>

				<div class="chin"></div>

			</div>

			
			
			<div class="hair-container">
				<div class="panel-container" id="rotate-x">

					 <div class="flick-down"></div>
					 <div class="flick-up"></div>
					 <div class="flick-up-2"></div>
					 <div class="flick-up-2-round"></div>        
					 <div class="panel"></div>
				 </div>
			</div>
			
			
		</div>
		

	</div>
	
	<div class="baby-dummy-container">
		<div class="dummy-chew"></div>			
		<div class="baby-dummy-ring"></div>
		<div class="baby-dummy-base-bottom"></div>
		<div class="baby-dummy-base-middle"></div>
	</div>
	
</div>