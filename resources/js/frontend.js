// CommonJS
const Swal = window.Swal = require('sweetalert2')
const Toast = Swal.mixin({
    toast: false,
    position: 'center',
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
window.swtoaster = function(msg, icon) {
    Toast.fire({
        icon: icon,
        title: msg
    })
}