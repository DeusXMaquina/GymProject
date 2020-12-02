(function () {
  var coursesListener = document.getElementById('addCourses')
  coursesListener.addEventListener('click',
    function () {
      window.location.pathname = '/GymProject/Admin-Slots/pages/Courses/addCourses.php'
    }
  )

  coursesListener.addEventListener('mouseover',
    function () {
      document.getElementById('popupAC').style.display = 'block';
    }
  )

  coursesListener.addEventListener('mouseout',
    function () {
      document.getElementById('popupAC').style.display = 'none';
    }
  )

  var editCoursesListener = document.getElementById('editRemoveCourses')
  editCoursesListener.addEventListener('click',
    function () {
      window.location.pathname = '/GymProject/Admin-Slots/pages/Courses/editRemoveCourses.php'
    }
  )

  editCoursesListener.addEventListener('mouseover',
    function () {
      document.getElementById('popupEC').style.display = 'block';
    }
  )

  editCoursesListener.addEventListener('mouseout',
    function () {
      document.getElementById('popupEC').style.display = 'none';
    }
  )


  var viewCoursesListener = document.getElementById('viewCourses')
  viewCoursesListener.addEventListener('click',
    function () {
      window.location.pathname = '/GymProject/Admin-Slots/pages/Courses/viewCourses.php'
    }
  )

  viewCoursesListener.addEventListener('mouseover',
    function () {
      document.getElementById('popupVC').style.display = 'block';
    }
  )

  viewCoursesListener.addEventListener('mouseout',
    function () {
      document.getElementById('popupVC').style.display = 'none';
    }
  )

  var slotsListener = document.getElementById('addSlots')
  slotsListener.addEventListener('click',
    function () {
      window.location.pathname = '/GymProject/Admin-Slots/pages/Slots/createTimeSlot.php'
    }
  )

  slotsListener.addEventListener('mouseover',
    function () {
      document.getElementById('popupAS').style.display = 'block';
    }
  )

  slotsListener.addEventListener('mouseout',
    function () {
      document.getElementById('popupAS').style.display = 'none';
    }
  )

  var removeSlotsListener = document.getElementById('removeSlots')
  removeSlotsListener.addEventListener('click',
    function () {
      window.location.pathname = '/GymProject/Admin-Slots/pages/Slots/removeTimeSlots.php'
    }
  )

  removeSlotsListener.addEventListener('mouseover',
    function () {
      document.getElementById('popupRS').style.display = 'block';
    }
  )

  removeSlotsListener.addEventListener('mouseout',
    function () {
      document.getElementById('popupRS').style.display = 'none';
    }
  )

  var viewSlotsListeners = document.getElementById('viewSlots')
  viewSlotsListeners.addEventListener('click',
    function () {
      window.location.pathname = '/GymProject/Admin-Slots/pages/Slots/viewTimeCourses.php'
    }
  )

  viewSlotsListeners.addEventListener('mouseover',
    function () {
      document.getElementById('popupVS').style.display = 'block';
    }
  )

  viewSlotsListeners.addEventListener('mouseout',
    function () {
      document.getElementById('popupVS').style.display = 'none';
    }
  )
})()
