  (function removeCookies() {
    document.cookie = 'id =;expires = 1/1/2020;'
  })()
  
  document.querySelectorAll('#timeSlotsTable button').forEach(event => event.addEventListener('click', function() {
    document.cookie = 'id=' + event.id
  }))

