

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus Seat's</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
.bus-layout {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}
.seats{
    display: flex;
    align-items: center;
    justify-content: center;

}
.seat {
    width: 50px;
    height: 50px;
    background-color: #BDBDBD;
    border: 1px solid #757575;
    margin: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    user-select: none;
}

.seat.selected {
    background-color: #4CAF50;
    border: 1px solid #2E7D32;
    color: #ffffff;
}
ol{
  list-style: none;
}

  </style>
</head>
<body>
    <div class="plane">
      <ol class=" ">
        <li class="row">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="1A" />
              <label for="1A">1A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1B" />
              <label for="1B">1B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1C" />
              <label for="1C">1C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1D" />
              <label for="1D">1D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1E" />
              <label for="1E">1E</label>
            </li>
          </ol>
        </li>
        <li class="row row--2">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="2A" />
              <label for="2A">2A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2B" />
              <label for="2B">2B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2C" />
              <label for="2C">2C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2D" />
              <label for="2D">2D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2E" />
              <label for="2E">2E</label>
            </li>
          </ol>
        </li>
        <li class="row row--3">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="3A" />
              <label for="3A">3A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3B" />
              <label for="3B">3B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3C" />
              <label for="3C">3C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3D" />
              <label for="3D">3D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3E" />
              <label for="3E">3E</label>
            </li>
          </ol>
        </li>
        <li class="row row--4">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="4A" />
              <label for="4A">4A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4B" />
              <label for="4B">4B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4C" />
              <label for="4C">4C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4D" />
              <label for="4D">4D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4E" />
              <label for="4E">4E</label>
            </li>

          </ol>
        </li>
        <li class="row row--5">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="5A" />
              <label for="5A">5A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5B" />
              <label for="5B">5B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5C" />
              <label for="5C">5C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5D" />
              <label for="5D">5D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5E" />
              <label for="5E">5E</label>
            </li>

          </ol>
        </li>
        <li class="row row--6">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="6A" />
              <label for="6A">6A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6B" />
              <label for="6B">6B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6C" />
              <label for="6C">6C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6D" />
              <label for="6D">6D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6E" />
              <label for="6E">6E</label>
            </li>

          </ol>
        </li>
        <li class="row row--7">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="7A" />
              <label for="7A">7A</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7B" />
              <label for="7B">7B</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7C" />
              <label for="7C">7C</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7D" />
              <label for="7D">7D</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7E" />
              <label for="7E">7E</label>
            </li>

          </ol>
        </li>
        </li>
      </ol>
    </div>
    <div class="total-amount" style="text-align: center; margin-top: 20px;">
        <h2>Total Amount: <span class="total-amount-value">0</span> Rs</h2>
        <button class="payment-button btn btn-primary" onclick="generateInvoice()">Payment</button>
    </div>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    let seatCheckboxes = document.querySelectorAll('.seats input[type="checkbox"]');
    let totalAmountDisplay = document.querySelector('.total-amount-value');

    let ticketPrice = 100;
    let totalTicketPrice = 0;

    seatCheckboxes.forEach(function (checkbox) {
        checkbox.addEventListener("change", function () {
            let seatLabel = checkbox.nextElementSibling; 
            let seatNumber = seatLabel.innerHTML; 

            let selectedSeats = document.querySelectorAll('.seats input[type="checkbox"]:checked').length;
            if (selectedSeats > 5) {
                checkbox.checked = false; 
                return;
            }

            if (checkbox.checked) {
                totalTicketPrice += ticketPrice;
                seatLabel.style.backgroundColor = '#bada55'; 
            } else {
                totalTicketPrice -= ticketPrice;
                seatLabel.style.backgroundColor = '#F42536';
            }

            totalAmountDisplay.innerHTML = totalTicketPrice;
        });
    });
});
function generateInvoice() {
  let selectedSeats = document.querySelectorAll('.seats input[type="checkbox"]:checked');
  if (selectedSeats.length === 0) {
    alert('Please select at least one seat before making a payment.');
    return false;
  }
  let numberOfSeats = selectedSeats.length;
  let seatNumbers = Array.from(selectedSeats).map(seat => seat.nextElementSibling.innerHTML).join(', ');
  let totalAmount = document.querySelector('.total-amount-value').innerHTML;
}
</script>

</body>
</html>