function setCookieValue(event, value) {
  var cookieNames = {
       1: 'course',
       2: 'instructor',
       3: 'description',
  }
    document.cookie = cookieNames[event.cellIndex] + '=' + value
}

(function removeCookies() {
  var cookieNames = [
    'course',
    'instructor',
    'description',
    'id',
    'originalInstructor'
  ]
  cookieNames.forEach(cookie => document.cookie = cookie + '=;' + 'expires = 1/1/2020;') 
})()

document.querySelectorAll('#coursesTable td').forEach(event => event.addEventListener('dblclick', function() {
  if (event.innerText !== 'UpdateRemove') {
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