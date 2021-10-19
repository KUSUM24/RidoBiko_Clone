<div class="deposit-main flex-column px-4" style="display:none" id="main-right-5">
      <div class="deposit-heading heading">Security Deposit</div>
      <div class="deposit-body card-body d-flex justify-content-between px-0">
        <div class="card" id="card-0">
          <div class="card-body ">
            <div class="deposit--heading card-tite">
              ACTIVE DEPOSIT
            </div>
            <div class="card-text deposit-amt">
              ₹360
            </div>
            <hr class="deposit-hr">
            <div class="card-text">
              This includes the active deposit you have in your account
            </div>
          </div>
        </div>
        <div class="card" id="card-1">
          <div class="card-body">
            <div class="deposit--heading card-tite">
              ADDED AMOUNT
            </div>
            <div class="card-text deposit-amt">
              ₹360
            </div>
            <hr class="deposit-hr">
            <div class="card-text">
              This includes the amount you want to add to your current account
            </div>
            <a href="#" class="btn bg-success text-white mt-2" id="add-deposit--btn" onclick="getAddInput()">Add Deposit</a>
            <form action method="post" class="add-deposit--form mt-2" id="add-deposit--input">
              <input class="form-control mr-3" type="number">
              <button class="btn btn-primary" type="submit">ADD</button>
            </form>
          </div>
        </div>
        <div class="card" id="card-2">
          <div class="card-body">
            <div class="deposit--heading card-tite">
              WITHDRAWABLE AMOUNT
            </div>
            <div class="card-text deposit-amt">
              ₹360
            </div>
            <hr class="deposit-hr w-100">
            <div class="card-text">
              This includes the amount you want to withdraw from your account 
            </div>
            <a href="#" class="btn bg-dark text-white mt-2" data-toggle="modal" data-target="#depositModal">Withdraw Deposit</a>
            <div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="depositModalLabel">Withdraw Amount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="request-form" action method="POST" id="new-request">
                      <div class="form-group">
                        <div>Withdrawable Amount: </div>
                        <div>₹360</div>
                      </div>
                      <div class="form-group">
                        <label for="withdraw-amount">Amount to Withdraw</label>
                        <input type="number" class="form-control" id="withdraw-amount" placeholder="Amount">
                      </div>
                      <div class="form-group">
                        <label for="withdraw-amount">Account No.</label>
                        <input type="number" class="form-control" id="withdraw-amount" placeholder="Account No.">
                      </div>
                      <div class="form-group">
                        <label for="withdraw-amount">IFSC Code</label>
                        <input type="text" class="form-control" id="withdraw-amount" placeholder="IFSC Code">
                      </div>
                      <button type="button" class="btn btn-dark">Withdraw</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <table class="table table-hover px-2">
        <thead>
          <tr>
            <!-- <th scope="col">#</th> -->
            <th scope="col">Deposit Paid On</th>
            <th scope="col">Mode of Payment</th>
            <th scope="col">Transaction ID/Ref No.</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <!-- <th scope="row">1</th> -->
            <td scope="row">07 Apr 2021</td>
            <td>Online Payment</td>
            <td>order_cb02h78hnk5pave70k49cioe89</td>
            <td>₹360/-</td>
          </tr>
          <tr>
            <!-- <th scope="row">2</th> -->
            <td scope="row">07 Apr 2021</td>
            <td>Online Payment</td>
            <td>order_cb02h78hnk5pave70k49cioe89</td>
            <td>₹360/-</td>
          </tr>
          <tr>
            <!-- <th scope="row">1</th> -->
            <td scope="row">07 Apr 2021</td>
            <td>Online Payment</td>
            <td>order_cb02h78hnk5pave70k49cioe89</td>
            <td>₹360/-</td>
          </tr>
        </tbody>
      </table>
    </div>