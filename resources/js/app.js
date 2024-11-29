import Alpine from 'alpinejs'
import '../css/app.css';
 
window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
  Alpine.store('darkMode', {
      on: false,

      toggle() {
          this.on = ! this.on
      }
  })
})

//click & copy to clipboard
Alpine.magic('clipboard', () => {
  return subject => navigator.clipboard.writeText(subject)
})

Alpine.start()

