<html><head>
    <meta charset="utf-8">
    <title>    HI_01_Bác sĩ quản lý lịch làm việc
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='{{asset('css/bootstrap.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/doctor/toastr.min.css')}}' rel='stylesheet'/>
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link href='{{asset('css/doctor/custom.css')}}' rel='stylesheet'/>
    <script src='{{asset('js/moment.min.js')}}'></script>
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <script src='{{asset('js/toastr.min.js')}}'></script>
    <script src='{{asset('js/doctor/normal.js')}}'></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script><style>@-webkit-keyframes swal2-show {
  0% {
    -webkit-transform: scale(0.7);
            transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
            transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes swal2-show {
  0% {
    -webkit-transform: scale(0.7);
            transform: scale(0.7); }
  45% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05); }
  80% {
    -webkit-transform: scale(0.95);
            transform: scale(0.95); }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@-webkit-keyframes swal2-hide {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0; } }

@keyframes swal2-hide {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0; } }

@-webkit-keyframes swal2-animate-success-line-tip {
  0% {
    top: 1.1875em;
    left: .0625em;
    width: 0; }
  54% {
    top: 1.0625em;
    left: .125em;
    width: 0; }
  70% {
    top: 2.1875em;
    left: -.375em;
    width: 3.125em; }
  84% {
    top: 3em;
    left: 1.3125em;
    width: 1.0625em; }
  100% {
    top: 2.8125em;
    left: .875em;
    width: 1.5625em; } }

@keyframes swal2-animate-success-line-tip {
  0% {
    top: 1.1875em;
    left: .0625em;
    width: 0; }
  54% {
    top: 1.0625em;
    left: .125em;
    width: 0; }
  70% {
    top: 2.1875em;
    left: -.375em;
    width: 3.125em; }
  84% {
    top: 3em;
    left: 1.3125em;
    width: 1.0625em; }
  100% {
    top: 2.8125em;
    left: .875em;
    width: 1.5625em; } }

@-webkit-keyframes swal2-animate-success-line-long {
  0% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  65% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  84% {
    top: 2.1875em;
    right: 0;
    width: 3.4375em; }
  100% {
    top: 2.375em;
    right: .5em;
    width: 2.9375em; } }

@keyframes swal2-animate-success-line-long {
  0% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  65% {
    top: 3.375em;
    right: 2.875em;
    width: 0; }
  84% {
    top: 2.1875em;
    right: 0;
    width: 3.4375em; }
  100% {
    top: 2.375em;
    right: .5em;
    width: 2.9375em; } }

@-webkit-keyframes swal2-rotate-success-circular-line {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  5% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  12% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); } }

@keyframes swal2-rotate-success-circular-line {
  0% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  5% {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg); }
  12% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); }
  100% {
    -webkit-transform: rotate(-405deg);
            transform: rotate(-405deg); } }

@-webkit-keyframes swal2-animate-error-x-mark {
  0% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  50% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  80% {
    margin-top: -.375em;
    -webkit-transform: scale(1.15);
            transform: scale(1.15); }
  100% {
    margin-top: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; } }

@keyframes swal2-animate-error-x-mark {
  0% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  50% {
    margin-top: 1.625em;
    -webkit-transform: scale(0.4);
            transform: scale(0.4);
    opacity: 0; }
  80% {
    margin-top: -.375em;
    -webkit-transform: scale(1.15);
            transform: scale(1.15); }
  100% {
    margin-top: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
    opacity: 1; } }

@-webkit-keyframes swal2-animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
    opacity: 1; } }

@keyframes swal2-animate-error-icon {
  0% {
    -webkit-transform: rotateX(100deg);
            transform: rotateX(100deg);
    opacity: 0; }
  100% {
    -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
    opacity: 1; } }

body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast {
  flex-direction: column;
  align-items: stretch; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-actions {
    flex: 1;
    align-self: stretch;
    justify-content: flex-end;
    height: 2.2em; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-loading {
    justify-content: center; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-input {
    height: 2em;
    margin: .3125em auto;
    font-size: 1em; }
  body.swal2-toast-shown.swal2-has-input > .swal2-container > .swal2-toast .swal2-validationerror {
    font-size: 1em; }

body.swal2-toast-shown > .swal2-container {
  position: fixed;
  background-color: transparent; }
  body.swal2-toast-shown > .swal2-container.swal2-shown {
    background-color: transparent; }
  body.swal2-toast-shown > .swal2-container.swal2-top {
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-top-end, body.swal2-toast-shown > .swal2-container.swal2-top-right {
    top: 0;
    right: 0;
    bottom: auto;
    left: auto; }
  body.swal2-toast-shown > .swal2-container.swal2-top-start, body.swal2-toast-shown > .swal2-container.swal2-top-left {
    top: 0;
    right: auto;
    bottom: auto;
    left: 0; }
  body.swal2-toast-shown > .swal2-container.swal2-center-start, body.swal2-toast-shown > .swal2-container.swal2-center-left {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-center {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
  body.swal2-toast-shown > .swal2-container.swal2-center-end, body.swal2-toast-shown > .swal2-container.swal2-center-right {
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-bottom-start, body.swal2-toast-shown > .swal2-container.swal2-bottom-left {
    top: auto;
    right: auto;
    bottom: 0;
    left: 0; }
  body.swal2-toast-shown > .swal2-container.swal2-bottom {
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-toast-shown > .swal2-container.swal2-bottom-end, body.swal2-toast-shown > .swal2-container.swal2-bottom-right {
    top: auto;
    right: 0;
    bottom: 0;
    left: auto; }

.swal2-popup.swal2-toast {
  flex-direction: row;
  align-items: center;
  width: auto;
  padding: 0.625em;
  box-shadow: 0 0 0.625em #d9d9d9;
  overflow-y: hidden; }
  .swal2-popup.swal2-toast .swal2-header {
    flex-direction: row; }
  .swal2-popup.swal2-toast .swal2-title {
    justify-content: flex-start;
    margin: 0 .6em;
    font-size: 1em; }
  .swal2-popup.swal2-toast .swal2-close {
    position: initial; }
  .swal2-popup.swal2-toast .swal2-content {
    justify-content: flex-start;
    font-size: 1em; }
  .swal2-popup.swal2-toast .swal2-icon {
    width: 2em;
    min-width: 2em;
    height: 2em;
    margin: 0; }
    .swal2-popup.swal2-toast .swal2-icon-text {
      font-size: 2em;
      font-weight: bold;
      line-height: 1em; }
    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em; }
    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      top: .875em;
      width: 1.375em; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: .3125em; }
      .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: .3125em; }
  .swal2-popup.swal2-toast .swal2-actions {
    height: auto;
    margin: 0 .3125em; }
  .swal2-popup.swal2-toast .swal2-styled {
    margin: 0 .3125em;
    padding: .3125em .625em;
    font-size: 1em; }
    .swal2-popup.swal2-toast .swal2-styled:focus {
      box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4); }
  .swal2-popup.swal2-toast .swal2-success {
    border-color: #a5dc86; }
    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 2em;
      height: 2.8125em;
      -webkit-transform: rotate(45deg);
              transform: rotate(45deg);
      border-radius: 50%; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.25em;
        left: -.9375em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 2em 2em;
                transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.25em;
        left: .9375em;
        -webkit-transform-origin: 0 2em;
                transform-origin: 0 2em;
        border-radius: 0 4em 4em 0; }
    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em; }
    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: .4375em;
      width: .4375em;
      height: 2.6875em; }
    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
      height: .3125em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 1.125em;
        left: .1875em;
        width: .75em; }
      .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
        top: .9375em;
        right: .1875em;
        width: 1.375em; }
  .swal2-popup.swal2-toast.swal2-show {
    -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s; }
  .swal2-popup.swal2-toast.swal2-hide {
    -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards; }
  .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
    -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s; }
  .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
    -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s; }

@-webkit-keyframes showSweetToast {
  0% {
    -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
    opacity: 0; }
  33% {
    -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
    opacity: .5; }
  66% {
    -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
    opacity: .7; }
  100% {
    -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
    opacity: 1; } }

@keyframes showSweetToast {
  0% {
    -webkit-transform: translateY(-0.625em) rotateZ(2deg);
            transform: translateY(-0.625em) rotateZ(2deg);
    opacity: 0; }
  33% {
    -webkit-transform: translateY(0) rotateZ(-2deg);
            transform: translateY(0) rotateZ(-2deg);
    opacity: .5; }
  66% {
    -webkit-transform: translateY(0.3125em) rotateZ(2deg);
            transform: translateY(0.3125em) rotateZ(2deg);
    opacity: .7; }
  100% {
    -webkit-transform: translateY(0) rotateZ(0);
            transform: translateY(0) rotateZ(0);
    opacity: 1; } }

@-webkit-keyframes hideSweetToast {
  0% {
    opacity: 1; }
  33% {
    opacity: .5; }
  100% {
    -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
    opacity: 0; } }

@keyframes hideSweetToast {
  0% {
    opacity: 1; }
  33% {
    opacity: .5; }
  100% {
    -webkit-transform: rotateZ(1deg);
            transform: rotateZ(1deg);
    opacity: 0; } }

@-webkit-keyframes animate-toast-success-tip {
  0% {
    top: .5625em;
    left: .0625em;
    width: 0; }
  54% {
    top: .125em;
    left: .125em;
    width: 0; }
  70% {
    top: .625em;
    left: -.25em;
    width: 1.625em; }
  84% {
    top: 1.0625em;
    left: .75em;
    width: .5em; }
  100% {
    top: 1.125em;
    left: .1875em;
    width: .75em; } }

@keyframes animate-toast-success-tip {
  0% {
    top: .5625em;
    left: .0625em;
    width: 0; }
  54% {
    top: .125em;
    left: .125em;
    width: 0; }
  70% {
    top: .625em;
    left: -.25em;
    width: 1.625em; }
  84% {
    top: 1.0625em;
    left: .75em;
    width: .5em; }
  100% {
    top: 1.125em;
    left: .1875em;
    width: .75em; } }

@-webkit-keyframes animate-toast-success-long {
  0% {
    top: 1.625em;
    right: 1.375em;
    width: 0; }
  65% {
    top: 1.25em;
    right: .9375em;
    width: 0; }
  84% {
    top: .9375em;
    right: 0;
    width: 1.125em; }
  100% {
    top: .9375em;
    right: .1875em;
    width: 1.375em; } }

@keyframes animate-toast-success-long {
  0% {
    top: 1.625em;
    right: 1.375em;
    width: 0; }
  65% {
    top: 1.25em;
    right: .9375em;
    width: 0; }
  84% {
    top: .9375em;
    right: 0;
    width: 1.125em; }
  100% {
    top: .9375em;
    right: .1875em;
    width: 1.375em; } }

html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown),
body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
  height: auto;
  overflow-y: hidden; }

body.swal2-no-backdrop .swal2-shown {
  top: auto;
  right: auto;
  bottom: auto;
  left: auto;
  background-color: transparent; }
  body.swal2-no-backdrop .swal2-shown > .swal2-modal {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); }
  body.swal2-no-backdrop .swal2-shown.swal2-top {
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-top-start, body.swal2-no-backdrop .swal2-shown.swal2-top-left {
    top: 0;
    left: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-top-end, body.swal2-no-backdrop .swal2-shown.swal2-top-right {
    top: 0;
    right: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-center {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-center-start, body.swal2-no-backdrop .swal2-shown.swal2-center-left {
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-center-end, body.swal2-no-backdrop .swal2-shown.swal2-center-right {
    top: 50%;
    right: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom {
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%); }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom-start, body.swal2-no-backdrop .swal2-shown.swal2-bottom-left {
    bottom: 0;
    left: 0; }
  body.swal2-no-backdrop .swal2-shown.swal2-bottom-end, body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
    right: 0;
    bottom: 0; }

.swal2-container {
  display: flex;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  padding: 10px;
  background-color: transparent;
  z-index: 1060;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch; }
  .swal2-container.swal2-top {
    align-items: flex-start; }
  .swal2-container.swal2-top-start, .swal2-container.swal2-top-left {
    align-items: flex-start;
    justify-content: flex-start; }
  .swal2-container.swal2-top-end, .swal2-container.swal2-top-right {
    align-items: flex-start;
    justify-content: flex-end; }
  .swal2-container.swal2-center {
    align-items: center; }
  .swal2-container.swal2-center-start, .swal2-container.swal2-center-left {
    align-items: center;
    justify-content: flex-start; }
  .swal2-container.swal2-center-end, .swal2-container.swal2-center-right {
    align-items: center;
    justify-content: flex-end; }
  .swal2-container.swal2-bottom {
    align-items: flex-end; }
  .swal2-container.swal2-bottom-start, .swal2-container.swal2-bottom-left {
    align-items: flex-end;
    justify-content: flex-start; }
  .swal2-container.swal2-bottom-end, .swal2-container.swal2-bottom-right {
    align-items: flex-end;
    justify-content: flex-end; }
  .swal2-container.swal2-grow-fullscreen > .swal2-modal {
    display: flex !important;
    flex: 1;
    align-self: stretch;
    justify-content: center; }
  .swal2-container.swal2-grow-row > .swal2-modal {
    display: flex !important;
    flex: 1;
    align-content: center;
    justify-content: center; }
  .swal2-container.swal2-grow-column {
    flex: 1;
    flex-direction: column; }
    .swal2-container.swal2-grow-column.swal2-top, .swal2-container.swal2-grow-column.swal2-center, .swal2-container.swal2-grow-column.swal2-bottom {
      align-items: center; }
    .swal2-container.swal2-grow-column.swal2-top-start, .swal2-container.swal2-grow-column.swal2-center-start, .swal2-container.swal2-grow-column.swal2-bottom-start, .swal2-container.swal2-grow-column.swal2-top-left, .swal2-container.swal2-grow-column.swal2-center-left, .swal2-container.swal2-grow-column.swal2-bottom-left {
      align-items: flex-start; }
    .swal2-container.swal2-grow-column.swal2-top-end, .swal2-container.swal2-grow-column.swal2-center-end, .swal2-container.swal2-grow-column.swal2-bottom-end, .swal2-container.swal2-grow-column.swal2-top-right, .swal2-container.swal2-grow-column.swal2-center-right, .swal2-container.swal2-grow-column.swal2-bottom-right {
      align-items: flex-end; }
    .swal2-container.swal2-grow-column > .swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center; }
  .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right) > .swal2-modal {
    margin: auto; }
  @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
    .swal2-container .swal2-modal {
      margin: 0 !important; } }
  .swal2-container.swal2-fade {
    transition: background-color .1s; }
  .swal2-container.swal2-shown {
    background-color: rgba(0, 0, 0, 0.4); }

.swal2-popup {
  display: none;
  position: relative;
  flex-direction: column;
  justify-content: center;
  width: 32em;
  max-width: 100%;
  padding: 1.25em;
  border-radius: 0.3125em;
  background: #fff;
  font-family: inherit;
  font-size: 1rem;
  box-sizing: border-box; }
  .swal2-popup:focus {
    outline: none; }
  .swal2-popup.swal2-loading {
    overflow-y: hidden; }
  .swal2-popup .swal2-header {
    display: flex;
    flex-direction: column;
    align-items: center; }
  .swal2-popup .swal2-title {
    display: block;
    position: relative;
    max-width: 100%;
    margin: 0 0 0.4em;
    padding: 0;
    color: #595959;
    font-size: 1.875em;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word; }
  .swal2-popup .swal2-actions {
    align-items: center;
    justify-content: center;
    margin: 1.25em auto 0; }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: .4; }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)); }
    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)); }
    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
      width: 2.5em;
      height: 2.5em;
      margin: .46875em;
      padding: 0;
      border: .25em solid transparent;
      border-radius: 100%;
      border-color: transparent;
      background-color: transparent !important;
      color: transparent;
      cursor: default;
      box-sizing: border-box;
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
              animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      -webkit-user-select: none;
         -moz-user-select: none;
          -ms-user-select: none;
              user-select: none; }
    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
      margin-right: 30px;
      margin-left: 30px; }
    .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
      display: inline-block;
      width: 15px;
      height: 15px;
      margin-left: 5px;
      border: 3px solid #999999;
      border-radius: 50%;
      border-right-color: transparent;
      box-shadow: 1px 1px 1px #fff;
      content: '';
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
              animation: swal2-rotate-loading 1.5s linear 0s infinite normal; }
  .swal2-popup .swal2-styled {
    margin: 0 .3125em;
    padding: .625em 2em;
    font-weight: 500;
    box-shadow: none; }
    .swal2-popup .swal2-styled:not([disabled]) {
      cursor: pointer; }
    .swal2-popup .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #3085d6;
      color: #fff;
      font-size: 1.0625em; }
    .swal2-popup .swal2-styled.swal2-cancel {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #aaa;
      color: #fff;
      font-size: 1.0625em; }
    .swal2-popup .swal2-styled:focus {
      outline: none;
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4); }
    .swal2-popup .swal2-styled::-moz-focus-inner {
      border: 0; }
  .swal2-popup .swal2-footer {
    justify-content: center;
    margin: 1.25em 0 0;
    padding-top: 1em;
    border-top: 1px solid #eee;
    color: #545454;
    font-size: 1em; }
  .swal2-popup .swal2-image {
    max-width: 100%;
    margin: 1.25em auto; }
  .swal2-popup .swal2-close {
    position: absolute;
    top: 0;
    right: 0;
    justify-content: center;
    width: 1.2em;
    min-width: 1.2em;
    height: 1.2em;
    margin: 0;
    padding: 0;
    transition: color 0.1s ease-out;
    border: none;
    border-radius: 0;
    background: transparent;
    color: #cccccc;
    font-family: serif;
    font-size: calc(2.5em - 0.25em);
    line-height: 1.2em;
    cursor: pointer; }
    .swal2-popup .swal2-close:hover {
      -webkit-transform: none;
              transform: none;
      color: #f27474; }
  .swal2-popup > .swal2-input,
  .swal2-popup > .swal2-file,
  .swal2-popup > .swal2-textarea,
  .swal2-popup > .swal2-select,
  .swal2-popup > .swal2-radio,
  .swal2-popup > .swal2-checkbox {
    display: none; }
  .swal2-popup .swal2-content {
    justify-content: center;
    margin: 0;
    padding: 0;
    color: #545454;
    font-size: 1.125em;
    font-weight: 300;
    line-height: normal;
    word-wrap: break-word; }
  .swal2-popup #swal2-content {
    text-align: center; }
  .swal2-popup .swal2-input,
  .swal2-popup .swal2-file,
  .swal2-popup .swal2-textarea,
  .swal2-popup .swal2-select,
  .swal2-popup .swal2-radio,
  .swal2-popup .swal2-checkbox {
    margin: 1em auto; }
  .swal2-popup .swal2-input,
  .swal2-popup .swal2-file,
  .swal2-popup .swal2-textarea {
    width: 100%;
    transition: border-color .3s, box-shadow .3s;
    border: 1px solid #d9d9d9;
    border-radius: 0.1875em;
    font-size: 1.125em;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
    box-sizing: border-box; }
    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important; }
    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: none;
      box-shadow: 0 0 3px #c4e6f5; }
    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
      color: #cccccc; }
    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
      color: #cccccc; }
  .swal2-popup .swal2-range input {
    width: 80%; }
  .swal2-popup .swal2-range output {
    width: 20%;
    font-weight: 600;
    text-align: center; }
  .swal2-popup .swal2-range input,
  .swal2-popup .swal2-range output {
    height: 2.625em;
    margin: 1em auto;
    padding: 0;
    font-size: 1.125em;
    line-height: 2.625em; }
  .swal2-popup .swal2-input {
    height: 2.625em;
    padding: 0.75em; }
    .swal2-popup .swal2-input[type='number'] {
      max-width: 10em; }
  .swal2-popup .swal2-file {
    font-size: 1.125em; }
  .swal2-popup .swal2-textarea {
    height: 6.75em;
    padding: 0.75em; }
  .swal2-popup .swal2-select {
    min-width: 50%;
    max-width: 100%;
    padding: .375em .625em;
    color: #545454;
    font-size: 1.125em; }
  .swal2-popup .swal2-radio,
  .swal2-popup .swal2-checkbox {
    align-items: center;
    justify-content: center; }
    .swal2-popup .swal2-radio label,
    .swal2-popup .swal2-checkbox label {
      margin: 0 .6em;
      font-size: 1.125em; }
    .swal2-popup .swal2-radio input,
    .swal2-popup .swal2-checkbox input {
      margin: 0 .4em; }
  .swal2-popup .swal2-validationerror {
    display: none;
    align-items: center;
    justify-content: center;
    padding: 0.625em;
    background: #f0f0f0;
    color: #666666;
    font-size: 1em;
    font-weight: 300;
    overflow: hidden; }
    .swal2-popup .swal2-validationerror::before {
      display: inline-block;
      width: 1.5em;
      height: 1.5em;
      margin: 0 .625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center;
      content: '!';
      zoom: normal; }

@supports (-ms-accelerator: true) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .swal2-range input {
    width: 100% !important; }
  .swal2-range output {
    display: none; } }

.swal2-icon {
  position: relative;
  justify-content: center;
  width: 5em;
  height: 5em;
  margin: 1.25em auto 1.875em;
  border: .25em solid transparent;
  border-radius: 50%;
  line-height: 5em;
  cursor: default;
  box-sizing: content-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  zoom: normal; }
  .swal2-icon-text {
    font-size: 3.75em; }
  .swal2-icon.swal2-error {
    border-color: #f27474; }
    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1; }
    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: .3125em;
      border-radius: .125em;
      background-color: #f27474; }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
        left: 1.0625em;
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg); }
      .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
        right: 1em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg); }
  .swal2-icon.swal2-warning {
    border-color: #facea8;
    color: #f8bb86; }
  .swal2-icon.swal2-info {
    border-color: #9de0f6;
    color: #3fc3ee; }
  .swal2-icon.swal2-question {
    border-color: #c9dae1;
    color: #87adbd; }
  .swal2-icon.swal2-success {
    border-color: #a5dc86; }
    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      -webkit-transform: rotate(45deg);
              transform: rotate(45deg);
      border-radius: 50%; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
        top: -.4375em;
        left: -2.0635em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 3.75em 3.75em;
                transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em; }
      .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
        top: -.6875em;
        left: 1.875em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
        -webkit-transform-origin: 0 3.75em;
                transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0; }
    .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      top: -.25em;
      left: -.25em;
      width: 100%;
      height: 100%;
      border: 0.25em solid rgba(165, 220, 134, 0.3);
      border-radius: 50%;
      z-index: 2;
      box-sizing: content-box; }
    .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      top: .5em;
      left: 1.625em;
      width: .4375em;
      height: 5.625em;
      -webkit-transform: rotate(-45deg);
              transform: rotate(-45deg);
      z-index: 1; }
    .swal2-icon.swal2-success [class^='swal2-success-line'] {
      display: block;
      position: absolute;
      height: .3125em;
      border-radius: .125em;
      background-color: #a5dc86;
      z-index: 2; }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
        top: 2.875em;
        left: .875em;
        width: 1.5625em;
        -webkit-transform: rotate(45deg);
                transform: rotate(45deg); }
      .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg); }

.swal2-progresssteps {
  align-items: center;
  margin: 0 0 1.25em;
  padding: 0;
  font-weight: 600; }
  .swal2-progresssteps li {
    display: inline-block;
    position: relative; }
  .swal2-progresssteps .swal2-progresscircle {
    width: 2em;
    height: 2em;
    border-radius: 2em;
    background: #3085d6;
    color: #fff;
    line-height: 2em;
    text-align: center;
    z-index: 20; }
    .swal2-progresssteps .swal2-progresscircle:first-child {
      margin-left: 0; }
    .swal2-progresssteps .swal2-progresscircle:last-child {
      margin-right: 0; }
    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
      background: #3085d6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progresscircle {
        background: #add8e6; }
      .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep ~ .swal2-progressline {
        background: #add8e6; }
  .swal2-progresssteps .swal2-progressline {
    width: 2.5em;
    height: .4em;
    margin: 0 -1px;
    background: #3085d6;
    z-index: 10; }

[class^='swal2'] {
  -webkit-tap-highlight-color: transparent; }

.swal2-show {
  -webkit-animation: swal2-show 0.3s;
          animation: swal2-show 0.3s; }
  .swal2-show.swal2-noanimation {
    -webkit-animation: none;
            animation: none; }

.swal2-hide {
  -webkit-animation: swal2-hide 0.15s forwards;
          animation: swal2-hide 0.15s forwards; }
  .swal2-hide.swal2-noanimation {
    -webkit-animation: none;
            animation: none; }

[dir='rtl'] .swal2-close {
  right: auto;
  left: 0; }

.swal2-animate-success-icon .swal2-success-line-tip {
  -webkit-animation: swal2-animate-success-line-tip 0.75s;
          animation: swal2-animate-success-line-tip 0.75s; }

.swal2-animate-success-icon .swal2-success-line-long {
  -webkit-animation: swal2-animate-success-line-long 0.75s;
          animation: swal2-animate-success-line-long 0.75s; }

.swal2-animate-success-icon .swal2-success-circular-line-right {
  -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
          animation: swal2-rotate-success-circular-line 4.25s ease-in; }

.swal2-animate-error-icon {
  -webkit-animation: swal2-animate-error-icon 0.5s;
          animation: swal2-animate-error-icon 0.5s; }
  .swal2-animate-error-icon .swal2-x-mark {
    -webkit-animation: swal2-animate-error-x-mark 0.5s;
            animation: swal2-animate-error-x-mark 0.5s; }

@-webkit-keyframes swal2-rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes swal2-rotate-loading {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }</style>
    <link href="/css/doctor/fullcalendar.min.css" rel="stylesheet">
    <link href="/css/doctor/fullcalendar.print.min.css" rel="stylesheet" media="print">
    <link href="/css/doctor/bootstrap-datepicker.min.css" rel="stylesheet">
    
            <!-- Nhóm 2 -->
    <style type="text/css">
        .card{
            border-bottom: solid;
            border-color: #ddd;
            cursor: pointer;
        }
        .card:hover{
            background-color: #f5f5f5;
        }
        .incard{
            height: 80px;
            overflow-y: hidden;
            margin: 10px;
        }
        .mybtn{
            width: 100%;
        }
          .badge {
              position: absolute;
              top: 1px;
              right: -2px;
              padding: 4px 6px;
              border-radius: 50%;
              background-color: red;
              color: white;
              font-size: 14px;
          }

        input[type='checkbox'] {
            width:20px;
            height:20px;
            background:white;
            border-radius:5px;
            border:2px solid #555;
        }

    </style>
    <script>
        function openDetail() {
            $("#urgentModal").modal("hide");
            $("#urgentdetailModal").modal("show");
        }
    </script>
    <!-- end nhóm 2 -->
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/doctor">
                    <img src="{{asset('HI_03/img/logo.png')}}" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="schedule_nav"  class="active"><a href="/doctor">Lịch làm việc</a></li>
                    <li id="history_nav"><a href="/doctor/history">Lịch sử khám</a></li>
                    <li class="dropdown" style="height: 50px; margin-right: 20px;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 0;line-height: 50px">
                            Lịch khám khẩn cấp<span class="badge">3</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" style="width: 300px;">
                            <li><a href="#" data-toggle="modal" data-target="#detailModal">Laura Larau - Nữ 18 tuổi <span style="float: right">9:30</span></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-toggle="modal" data-target="#detailModal">Giàu Văn Sang - Nam 7 tuổi <span style="float: right">10:30</span></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-toggle="modal" data-target="#detailModal">Buồn Văn Phiền - Nam 22 tuổi <span style="float: right">13:30</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="height: 50px">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding: 0;line-height: 50px">
                            <img src="{{ asset('HI_03/img/doctor/avatar.png') }}" alt="" style="width: 35px">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#infoModal">Thông tin cá nhân</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/doctor/login">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="title">
            <h3>Hiện tại có <strong>6</strong> lịch khám đang đợi</h3>
        </div>
        <div class="content">
            <div class="col-md-4" style="padding: 0">
                <div class="form-group">
                    <div id="calendar_picker"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="fc fc-unthemed fc-ltr">
                  <div class="fc-toolbar fc-header-toolbar"><div class="fc-left"></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-listDay-button fc-button fc-state-default fc-corner-left fc-state-active">Lịch biểu</button><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-right">Tháng</button></div></div><div class="fc-center"><h2>22 tháng 6 năm 2019</h2></div><div class="fc-clear"></div></div>
                  
                  <div class="fc-view-container" style=""><div class="fc-view fc-listDay-view fc-list-view fc-widget-content" style=""><div class="fc-scroller" style="overflow: hidden auto; height: 439px;"><table class="fc-list-table "><tbody><tr class="fc-list-heading" data-date="2019-05-30"><td class="fc-widget-header" colspan="3"><a class="fc-list-heading-main" data-goto="{&quot;date&quot;:&quot;2019-05-30&quot;,&quot;type&quot;:&quot;day&quot;}">thứ bảy</a></td></tr>
                    <tr class="fc-list-item"><td class="fc-list-item-time fc-widget-content">08:30</td><td class="fc-list-item-marker fc-widget-content"></td><td class="fc-list-item-title fc-widget-content"><a href="#" data-toggle="modal" data-target="#detailModal">Ca khám thường: <strong>Nguyễn Văn A - Nam 29 tuổi</strong></a></td></tr>
                    <tr class="fc-list-item" style="background-color: #FDEDEC;"><td class="fc-list-item-time fc-widget-content">09:30</td><td class="fc-list-item-marker fc-widget-content"><span class="fc-event-dot"></span></td><td class="fc-list-item-title fc-widget-content"><a href="#" data-toggle="modal" data-target="#detailModal">Khám khẩn cấp: <strong>Laura Larau - Nữ 18 tuổi</strong><span class="glyphicon glyphicon-exclamation-sign" style="float: right;"></span></a></td></tr>
                    <tr class="fc-list-item"><td class="fc-list-item-time fc-widget-content">10:00</td><td class="fc-list-item-marker fc-widget-content"><span class="fc-event-dot"></span></td><td class="fc-list-item-title fc-widget-content"><a href="#" data-toggle="modal" data-target="#detailModal">Ca khám thường: <strong>Bệnh Văn Nhân - Nam 19 tuổi</strong></a></td></tr>
                    <tr class="fc-list-item" style="background-color: #FDEDEC;"><td class="fc-list-item-time fc-widget-content">10:30</td><td class="fc-list-item-marker fc-widget-content"><span class="fc-event-dot"></span></td><td class="fc-list-item-title fc-widget-content"><a href="#" data-toggle="modal" data-target="#detailModal">Khám khẩn cấp: <strong>Giàu Văn Sang - Nam 7 tuổi</strong><span class="glyphicon glyphicon-exclamation-sign" style="float: right;"></span></a></td></tr>
                    <tr class="fc-list-item"><td class="fc-list-item-time fc-widget-content">11:00</td><td class="fc-list-item-marker fc-widget-content"><span class="fc-event-dot"></span></td><td class="fc-list-item-title fc-widget-content"><a href="#" data-toggle="modal" data-target="#detailModal">Ca khám thường: <strong>Người Văn Ốm - Nữ 39 tuổi</strong></a></td></tr>
                    <tr class="fc-list-item"><td class="fc-list-item-time fc-widget-content">11:30</td><td class="fc-list-item-marker fc-widget-content"><span class="fc-event-dot"></span></td><td class="fc-list-item-title fc-widget-content"><a href="#" data-toggle="modal" data-target="#detailModal">Ca khám thường: <strong>Nguyễn Thị Lê - Nữ 26 tuổi</strong></a></td></tr>
                    <tr class="fc-list-item" style="background-color: #FDEDEC;"><td class="fc-list-item-time fc-widget-content">13:30</td><td class="fc-list-item-marker fc-widget-content"><span class="fc-event-dot"></span></td><td class="fc-list-item-title fc-widget-content"><a href="#" data-toggle="modal" data-target="#detailModal">Khám khẩn cấp: <strong>Buồn Văn Phiền - Nam 22 tuổi</strong><span class="glyphicon glyphicon-exclamation-sign" style="float: right;"></span></a></td></tr>

                  </tbody></table></div></div></div>
                </div>
                <div class="help">
                    <p>Chọn một ngày để xem danh sách lịch khám</p>
                </div>
            </div>
        </div>
    </div>


    
<div id="detailModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Thông tin chi tiết ca khám</h4>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="active"><a href="#urgent1">
                                    <p class="list-group-item-text">Thông tin bệnh nhân</p>
                                </a></li>
                            <li><a href="#urgent2">
                                    <p class="list-group-item-text">Tình trang bệnh</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row setup-content" id="urgent1" style="">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <table class="table">
                                <tbody><tr>
                                    <td><b>Mã hồ sơ</b></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td><b>Thời gian</b></td>
                                    <td>10:30</td>
                                </tr>
                                <tr>
                                    <td><b>Họ tên</b></td>
                                    <td>Giàu Văn Sang</td>
                                </tr>
                                <tr>
                                    <td><b>Giới tính</b></td>
                                    <td>Nam</td>
                                </tr>
                                <tr>
                                    <td><b>Tuổi</b></td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td><b>Địa chỉ</b></td>
                                    <td>Hà Nội</td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="urgent2" style="display: none;">
                    <div class="col-xs-12">
                        <div class="col-md-12 well">
                            <p>
                                Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                Thành bụng căng cứng.
                                Sốt nhẹ.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="start-examination" class="btn btn-primary" value="">Bắt đầu ca khám</button>
                <button type="button" id="remove-examination" class="btn btn-danger">Huỷ ca khám</button>
            </div>
        </div>

    </div>
</div>
<div id="removeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Huỷ ca khám</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="comment">Ghi chú (lý do):</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="accept-remove" value="" class="btn btn-danger">Tiến hành huỷ</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            </div>
        </div>

    </div>
</div>
<div id="infoModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Thông tin cá nhân</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('img/avatar.jpg')}}" class="img-responsive" alt="Cinque Terre">
                    </div>
                    <div class="col-sm-8">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" value="Lê Hoàng Vũ" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="vu.hl@gmail.com" disabled="">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:</label>
                                <input type="number" class="form-control" value="0123456789">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ:</label>
                                <input type="text" class="form-control" value="Thanh Xuân-Hà Nội">
                            </div>
                            <button type="button" id="update-password" class="btn btn-success">Thay đổi mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="update-info" class="btn btn-primary">Cập nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            </div>
        </div>

    </div>
</div>
<div id="passModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Cập nhật mật khẩu</h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="oldpass">Mật khẩu cũ:</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="newpass">Mật khẩu mới:</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confirmpass">Nhập lại mật khẩu:</label>
                        <input type="password" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="accept-pass" class="btn btn-primary">Cập nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            </div>
        </div>

    </div>
</div>



    <script src='{{asset('js/fullcalendar.min.js')}}'></script>
    <script src='{{asset('js/doctor/index.js')}}'></script>
    <script src='{{asset('js/doctor/locale-all.js')}}'></script>
    <script src="{{ asset('js/doctor/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/doctor/bootstrap-datepicker.vi.min.js') }}"></script>


</body></html>