console.log('contiene js')

var courseInput = document.getElementById('course-input')
courseInput.addEventListener('focus', function(event) {event.target.style.background = 'yellow'})
courseInput.addEventListener('blur', function(event) {event.target.style.background = 'white'})

var descriptionInput = document.getElementById('description-input')
descriptionInput.addEventListener('focus', function(event) {event.target.style.background = 'yellow'})
descriptionInput.addEventListener('blur', function(event) {event.target.style.background = 'white'})


// eventos actuales - blur, focus, dbclick, click, onmouseover, onmouseout, hover
//eventlistener de input, focusin, focusout, mouseenter.

