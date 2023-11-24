<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Reservation</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .reservation-container {
      max-width: 600px;
      margin: auto;
      margin-top: 50px;
      position: relative;
    }

    #result-container p {
      color: #fff;
    }

    #result-container table {
      width: 100%;
    }

    #result-container {
      display: none;
      margin-top: 5px;
      border-radius: 25px;
      padding: 20px;
      backdrop-filter: blur(12px) !important;

    }
  </style>
</head>

<body>
  <div class="container reservation-container">
    <div class="row">
      <div class="col-lg-12 destination">
        <form id="reservationForm" onclick="return validateBusRoute()">
          <div class="mb-3">
            <label for="from" class="form-label">From</label>
            <select class="login-select" id="startLocation">
              <option value="" disabled selected>Select starting point</option>
              <option value="city3">Una</option>
              <option value="city4">Shimla</option>
              <option value="city4">Kullu</option>
              <option value="city4">Hamirpur</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="to" class="form-label">To</label>
            <select class="login-select" id="endLocation">
              <option value="" disabled selected>Select destination</option>
              <option value="city3">Una</option>
              <option value="city4">Shimla</option>
              <option value="city4">Kullu</option>
              <option value="city4">Hamirpur</option>
            </select>
          </div>
          <p id="validationResult" style="color:red;"></p>
          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date">
          </div>
          <p id="error22"></p>
          <input type="button" value="Submit" onclick="submitForm()" style="width:100%" class="btn btn-primary btn-block">
        </form>
      </div>
    </div>

    <div id="result-container">
      <table class="table_designation">
        <thead>
          <td>
            <p>Bus Number</p>
          </td>
          <td>
            <p>Departure</p>
          </td>
          <td>
            <p>Arrival</p>
          </td>
          <td>
            <p>Bus Type</p>
          </td>
          <td>
            <p>Available seets</p>
          </td>
          <td>
            <p>SELECT</p>
          </td>
        </thead>
        <tbody>
          <td>
            <p>HP72 3243</p>
          </td>
          <td>
            <p>07:50 AM</p>
          </td>
          <td>
            <p>11.00 PM</p>
          </td>
          <td>
            <p>AC</p>
          </td>
          <td>
            <p>20</p>
          </td>
          <td><a href="http://localhost/bus_ticket_booking/seetmanagement.php ">select seert</a></td>
        </tbody>
      </table>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    function validateBusRoute() {

      var startLocation = document.getElementById('startLocation').value;
      var endLocation = document.getElementById('endLocation').value;


      if (startLocation === '' || endLocation === '') {
        document.getElementById('validationResult').innerHTML = 'Please select both "From" and "To" locations.';
        return false;
      } else if (startLocation === endLocation) {
        document.getElementById('validationResult').innerHTML = 'The "From" and "To" locations cannot be the same.'
        return false;
      } else {

        document.getElementById('validationResult').innerHTML = '';

      }

      let selectedDate = document.getElementById('selectedDate').value;


      let currentDate = new Date().toISOString().split('T')[0];


      if (selectedDate < currentDate) {
        document.getElementById('error22').innerHTML = 'Please select a date on or after the current date.';
        return false;
      } else {
        document.getElementById('error22').innerHTML = '';
      }
    }
    function submitForm() {
      const resultContainer = document.getElementById('result-container');
      resultContainer.style.display = 'block';
    }
  </script>
</body>

</html>