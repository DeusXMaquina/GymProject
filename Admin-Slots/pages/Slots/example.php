function findInstructorName ($instructorArray, $id) {
        for ($index = 0; $index < count($instructorArray); $index++) {
          if ($instructorArray[$index]['id'] === $id){
            return $instructorArray[$index]['nombre'];
          }
        }
        return 'No Instructor Assigned';
      }

      function findTimeFrame ($timeArray, $id) {
        for ($index = 0; $index < count($timeArray); $index++) {
            if ($timeArray[$index]['id'] === $id){
              return $timeArray[$index]['timeFrame'];
            }
          }
          return 'No Time Assigned';
      }

      function insertTableData ($array, $instructor, $time, $id) {
        $instructorFlag = 0;
        foreach ($array as $val) {
          if($instructorFlag === 2){
            echo '<td>'.findInstructorName($instructor, $val).'</td>';
            $instructorFlag++;
          }
          if ($instructorFlag === 3) {
            echo '<td>'.findTimeFrame($time, $val).'</td>';
            $instructorFlag++;
        } else {
          echo '<td>'.$val.'</td>';
          $instructorFlag++;
        }
         }
         echo '<td><button id='.$id.' class="removeUpdateButton" type="submit" formaction="controllerUpdateCourse.php">Update</button><button id='.$id.' class="removeUpdateButton" type="submit" formaction="controllerDeleteCourse.php">Remove</button></td></tr>';
       }

       for ($indexRow = 0; $indexRow < count($courseTimeResults); $indexRow ++) {
         echo '<tr>'.insertTableData($coursesResults[$indexRow], $instructorResults, $timeResults, $courseTimeResults[$indexRow]['id']).'</tr>';
       }