<div class="ticket-main flex-column" style="display:none" id="main-right-1">
      <div class="heading">
        <div>Raise Ticket</div>
      </div>
      <div class="card-body">
        <div class="raise-ticket card">
          <div class="sub-heading d-flex justify-content-between">
            Raise New Ticket
            <b class="d-flex align-items-center">
              <span class="material-icons">
              phone
              </span>  
              9971770131
            </b>
          </div>
          <div class="new-request px-3">
            <div>Need some more help? Create a New Request.</div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#ticketModal">New Request</button>
            <div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="ticketModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ticketModalLabel">New Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="request-form" action method="POST" id="new-request">
                      <div class="form-group mt-2">
                        <label for="inputState">Request Type: </label>
                        <select id="inputState" class="form-control" name="type">
                          <option value="select" hidden> Select Type </option>
                          <option value="booking-issue"> Booking Issue </option>
                          <option value="payment-refund"> Payment and Refund</option>
                          <option value="dealer-issue"> Dealer Issue </option>
                          <option value="corporate-banking">Corporate Banking </option>
                          <option value="careers"> Careers </option>
                          <option value="suggestion">Suggestion </option>
                          <option value="others"> Others </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="comment">Description:</label>
                        <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                      </div>
                      <button type="button" class="btn btn-primary">Save Request</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub-heading">
            Raised Requests
          </div>
          <div class="request-cards--main d-flex justify-content-between">
            <div class="card" id="request-card-0">
              <div class="card-body ">
                <div class="card-title d-flex justify-content-between">
                  <div class="d-flex flex-column">
                    <span>Type:</span>
                    <b>
                      Suggestion
                    </b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Id:</span>
                    <b>#13BHNJ</b>
                  </div>
                </div>
                <hr class="request-hr">
                <div class="card-text">
                  I think you should add the search functionality
                </div>
                <hr class="request-hr">
                <div class="card-text d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <span>Date:</span>
                    <b>2019-07-20</b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Status:</span>
                    <b>Pending...</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" id="request-card-1">
              <div class="card-body ">
                <div class="card-title d-flex justify-content-between">
                  <div class="d-flex flex-column">
                    <span>Type:</span>
                    <b>
                      Suggestion
                    </b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Id:</span>
                    <b>#13BHNJ</b>
                  </div>
                </div>
                <hr class="request-hr">
                <div class="card-text">
                  I think you should add the search functionality
                </div>
                <hr class="request-hr">
                <div class="card-text d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <span>Date:</span>
                    <b>2019-07-20</b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Status:</span>
                    <b>Pending...</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" id="request-card-2">
              <div class="card-body ">
                <div class="card-title d-flex justify-content-between">
                  <div class="d-flex flex-column">
                    <span>Type:</span>
                    <b>
                      Suggestion
                    </b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Id:</span>
                    <b>#13BHNJ</b>
                  </div>
                </div>
                <hr class="request-hr">
                <div class="card-text">
                  I think you should add the search functionality
                </div>
                <hr class="request-hr">
                <div class="card-text d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <span>Date:</span>
                    <b>2019-07-20</b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Status:</span>
                    <b>Pending...</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>