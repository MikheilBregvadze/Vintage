export default {
  data() {
    return {
      videoElement: false,
      paused: false,
      computedWidth: 'rgba(253, 253, 253, 0.8)'
    }
  },
  methods: {
    updatePaused(event) {
      this.videoElement = event.target;
      this.paused = event.target.paused;
    },
    play() {
      this.computedWidth = 'rgba(253, 253, 253, 0.4)'
      this.videoElement.play();
    },
    pause() {
      this.videoElement.pause();
    }
  },
  computed: {
    playing() { return !this.paused; }
  }
}




// export default {
//   data() {
//     return {
//       playing: false,
//     }
//   },
//   computed: {
//     paused() {
//       return !this.playing;
//     }
//   },
//   directives: {
//     play: {
//       bind(el, binding, vnode) {
//         el.addEventListener('playing', () => {
//           vnode.context[binding.expression] = !el.paused;
//         });
//         el.addEventListener('pause', () => {
//           vnode.context[binding.expression] = !el.paused;
//         });
//         vnode.context[binding.expression] = !el.paused;
//       },
//       update(el, binding) {
//         if (el.paused) {
//           if (binding.value) {
//             el.play();
//           }
//         } else if (!binding.value) {
//           el.pause();
//         }
//       }
//     }
//   },
//   methods: {
//     play() {
//       this.playing = true;
//     },
//     pause() {
//       this.playing = false;
//     }
//   }
// }