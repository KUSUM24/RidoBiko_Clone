<div class="account-main flex-column h-100" style="display:none" id="main-right-3">
      <div class="heading">MY PROFILE</div>
      <div class="card-body">
        <div class="account-form card">
          <div class="account-form--heading">Account Details</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0">Name</label>
            <div class="col-sm-4">
              <input
              class="form-control size-13"
              name="name"
              placeholder="John Doe"
              type="text"
              />
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5">Email</label>
            <div class="col-sm-4">
              <input
              class="form-control size-13"
              name="email"
              placeholder="johndoe@gmail.com"
              type="email"
              />
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5">Mobile</label>
            <div class="col-sm-4">
              <input
              class="form-control size-13"
              name="mobile"
              placeholder="10 digit mobile no."
              type="number"
              />
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5">Profile Image</label>
            <div class="col-sm-4">
              <input
              name="profile-input"
              id="profile-input"
              type="file"
              accept=".png,.jpg,.jpeg"
              onChange="getProfileImg(this,'profile-img','btn-preview-section-5','default-profile');"
              />
            </div>
            <div id="btn-preview-section-5" class="profile-view-image align-items-between" style="display:none" >
                <button class="btn btn-primary m-2 ml-3">Save</button>
                <label for="profile-input" class="label-preview--change btn btn-danger m-2">Change</label>
            </div>
          </div>
          <div class="account-form--heading">Current Address</div>
          <div class="d-flex">
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">Address 1</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                name="address-1"
                placeholder="Apartment, House number"
                type="text"
                />
              </div>
            </div>
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">Address 2</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                  name="address-2"
                  placeholder="Landmark, Street Name"
                  type="text"
                  />
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">City</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                name="city"
                placeholder="Mumbai, New York"
                type="text"
                />
              </div>
            </div>
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">Zipcode</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                name="zipcode"
                placeholder="500000"
                  type="text"
                  />
              </div>
            </div>
          </div>
          <div class="permanent-address form-check">
            <input
            class="form-check-input"
            type="checkbox"
            value="Permanent"
            id="permanentAddress"
            onclick="permanentAddress()"
            checked
            />
            <label class="form-check-label" for="permanentAddress">
              Permanent Address same as Current Address
            </label>
          </div>
          <div id="permanentAddressForm" style="display: none">
            <div class="account-form--heading">Permanent Address</div>
            <div class="d-flex">
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">Address 1</label>
                <div class="col-8">
                  <input
                  class="form-control size-13"
                  name="address-1"
                  placeholder="Apartment, House number"
                  type="text"
                  />
                </div>
              </div>
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">Address 2</label>
                <div class="col-8">
                  <input
                  class="form-control size-13"
                    name="address-2"
                    placeholder="landmark, Street Name"
                    type="text"
                    />
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">City</label>
                <div class="col-8">
                  <input
                    class="form-control size-13"
                    name="city"
                    placeholder="Mumbai, New York"
                    type="text"
                    />
                  </div>
              </div>
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">Zipcode</label>
                <div class="col-8">
                  <input
                  class="form-control size-13"
                    name="zipcode"
                    placeholder="500000"
                    type="text"
                    />
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="submit-dashboard">
          <button type="submit" class="submit-btn">UPDATE </button>
        </div>
      </div>
    </div>