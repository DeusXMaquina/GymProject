function setCookieValue(event, value) {
  var cookieNames = {
       1: 'course',
       2: 'instructor',
       3: 'description',
  }
    document.cookie = cookieNames[event.cellIndex] + '=' + value
}

function removeCookies() {
}

document.querySelectorAll('#coursesTable td').forEach(event => event.addEventListener('click', function() {
  if (event.innerText !== 'RemoveUpdate') {
    var value = window.prompt('Enter new value: ', event.innerText)
    if (value !== '') {
      if (event.id === 'instructor') {
        document.cookie = 'originalInstructor=' + event.innerText
      }
      event.innerText = value
      setCookieValue(event, value)
    }
  }
}))

document.querySelectorAll('#coursesTable button').forEach(event => event.addEventListener('click', function(){
  document.cookie = 'id=' + event.id
}))