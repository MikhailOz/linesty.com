"use strict";

class InputBlocker{static deleteLetters(e){e.value=e.value.replace(/[a-zA-Z]/g,"")}static deleteNumbers(e){e.value=e.value.replace(/\d/g,"")}static deleteSpace(e){e.value=e.value.replace(/\s+/g,"")}static blockValues(e,t){e.forEach(e=>{"str"===e?this.deleteLetters(t):"num"===e?this.deleteNumbers(t):"space"===e&&this.deleteSpace(t)})}}