const grade = document.getElement('grade')
const form = document.getElement('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit',(e) =>){
let messages = []
if (grade.value === '' || grade.value == null){
    messages.push('grade is required')
}

if(messages.length > 0){
    e.preventDefault()
    errorElement.innerText = messages.join(',')
}
})