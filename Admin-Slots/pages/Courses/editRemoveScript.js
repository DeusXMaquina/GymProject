function setCookieValue(event, value) {
  var cookieNames = {
       1: 'course',
       3: 'description'
  }
    document.cookie = cookieNames[event.cellIndex] + '=' + value
}

(function removeCookies() {
  var cookieNames = [
    'course',
    'description',
    'id',
    'idInstructor'
  ]
  cookieNames.forEach(cookie => document.cookie = cookie + '=;' + 'expires = 1/1/2020;') 
})()

function findSelectedValue () {
  var selects = document.getElementsByName('idInstructor')
  var resultado

  selects.forEach( function(element) {
    if (element.value !== '1') {
      resultado =  element.value
    }
  })
  return resultado === undefined ? 1 : resultado
}

document.querySelectorAll('#coursesTable td').forEach(event => event.addEventListener('dblclick', function() {
  console.log('ejecutando listener')
  console.log(event.id)
  if (event.id === 'instructor') {
    showInstructor(true)
  }
  if (event.id !== 'instructor') {
    var value = window.prompt('Enter new value: ', event.innerText)
    if (value !== '') {
      event.innerText = value
      setCookieValue(event, value)
    }
  }
}))

document.querySelectorAll('#coursesTable button').forEach(event => event.addEventListener('click', function(){
  document.cookie = 'idInstructor=' + findSelectedValue()
  document.cookie = 'id=' + event.id
}))


function showInstructor (flag) {
  var regularInstructor = document.getElementsByName('regularInstructor')
  var dropdownInstructor = document.getElementsByName('dropdown')

  function displayChange (display, instructorsArray) {
    instructorsArray.forEach(function (element) {
      element.style.display = display
    })
  }

  if (!flag) {
    displayChange('block', regularInstructor)
    displayChange('none', dropdownInstructor)
  } else {
    displayChange('none', regularInstructor)
    displayChange('block', dropdownInstructor)
  }
}