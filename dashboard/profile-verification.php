<div class="verify-main flex-column h-100" style="display:none" id="main-right-4">
      <div class="heading">PROFILE VERIFICATION</div>
      <div class="card-body">
        <div class="card">
          <div class="sub-heading">Aadhar Card</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0 pr-0" for="aadhar-front">Front Side</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="aadhar-front"
              id="aadhar-front"
              accept=".png,.jpg,.jpeg"
              type="file"
              onChange="img_pathUrl(this,'front-img','btn-preview-section-0');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="front-img" alt="Front-image">
              <div id="btn-preview-section-0" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="aadhar-front" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0 pr-0" for="aadhar-back">Back Side</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="aadhar-back"
              id="aadhar-back"
              accept=".png,.jpg,.jpeg"
              type="file"
              onChange="img_pathUrl(this,'back-img','btn-preview-section-1');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="back-img" alt="Back-image">
              <div id="btn-preview-section-1" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="aadhar-back" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          <div class="sub-heading">Pan Card</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="pancard">Pan Card</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="pancard"
              id="pancard"
              accept=".png,.jpg,.jpeg"
              type="file"
              onChange="img_pathUrl(this,'pan-img','btn-preview-section-2');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="pan-img" alt="Pan-image">
              <div id="btn-preview-section-2" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="pancard" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          <div class="sub-heading">Driving License</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="license">Driving License</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="license"
              id="license"
              accept=".png,.jpg,.jpeg"
              type="file"
              onChange="img_pathUrl(this,'license-img','btn-preview-section-3');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="license-img" alt="License-image">
              <div id="btn-preview-section-3" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="license" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          
        </div>
        <div class="submit-dashboard">
          <button type="submit" class="submit-btn">UPDATE </button>
        </div>
      </div>
    </div>