const setHeaderTitle = (title) => {
  document.getElementById("offers").classList.remove("active-title");
  let motorcycleContent = document.getElementById("motorcycle-content");
  document.getElementById(title).classList.add("active-title");
  if (title == "offers") {
    motorcycleContent.innerHTML = `<div class="motorcycle">
    <div class="motorcycle-heading h1 text-center">
            Select From 1000+ Motorcycles
    </div>
    <div class="motorcycle-scroll d-flex justify-content-between align-items-center">
        <div class="scroll-title-main w-25 d-flex justify-content-between">
            <div class="scroll-title active-title" id="offers" onclick="setHeaderTitle('offers')">Super Offers</div>
            <div class="scroll-title" id="bikes" onclick="setHeaderTitle('bikes')">Bikes Starting From</div>
        </div>
        <div class="scroll-icons-1 d-flex">
            <div class="scroll-icon">
            <span class="material-icons-outlined">
                chevron_left
            </span>
            </div>
            <div class="scroll-icon">
            <span class="material-icons-outlined">
                chevron_right
            </span>
            </div>
        </div>
    </div>
    <hr class="hr-motor">
    <div class="motorcycle-content d-flex justify-content-between" id="motorcycle-content" >
        <div class="card-motorcycle">
            <div class="d-flex align-items-center">
                <div class="image-expire d-flex flex-column text-center align-items-center">
                    <img class="bike-image-motor" src="images/Bikes/Bike-1.jpg" alt="">
                    <div class="expire-date">Expires 16 Jan 20</div>
                </div>
                    <div class="d-flex flex-column text-bike">
                    <div class="bike-offer">10% instant off on you first ride</div>
                    <div class="limited">Limited period offer</div>
                </div>
            </div>
            <div class="bike-coupon text-center">
                COUPON: <span class="coupon-name">RIDOBIKOFIRST</span>
            </div>
            <div class="bike-footer d-flex justify-content-around align-items-center">
                <div class="terms">T&C's Apply</div>
                <div class="book-now">Book Now</div>
            </div>

        </div>
        <div class="card-motorcycle">
        <div class="d-flex align-items-center">
        <div class="image-expire d-flex flex-column text-center align-items-center">
                    <img class="bike-image-motor" src="images/Bikes/Bike-2.jpg" alt="">
                    <div class="expire-date">Expires 16 Jan 20</div>
                </div>
                <div class="d-flex flex-column text-bike">
                    <div class="bike-offer">10% instant off on you first ride</div>
                    <div class="limited">Limited period offer</div>
                </div>
            </div>
            <div class="bike-coupon text-center">
                COUPON: <span class="coupon-name">RIDOBIKOFIRST</span>
            </div>
            <div class="bike-footer d-flex justify-content-around align-items-center">
                <div class="terms">T&C's Apply</div>
                <div class="book-now">Book Now</div>
            </div>
        </div>
        <div class="card-motorcycle">
        <div class="d-flex align-items-center justify-content-between">
        <div class="image-expire d-flex flex-column text-center align-items-center">
                    <img class="bike-image-motor" src="images/Bikes/Bike-3.jpg" alt="">
                    <div class="expire-date">Expires 16 Jan 20</div>
                </div>
                <div class="d-flex flex-column text-bike">
                    <div class="bike-offer ">10% instant off on you first ride</div>
                    <div class="limited">Limited period offer</div>
                </div>
            </div>
            <div class="bike-coupon text-center">
                COUPON: <span class="coupon-name">RIDOBIKOFIRST</span>
            </div>
            <div class="bike-footer d-flex justify-content-around align-items-center">
                <div class="terms">T&C's Apply</div>
                <div class="book-now">Book Now</div>
            </div>
        </div>
    </div>
</div>`;
    document.getElementById("bikes").classList.remove("active-title");
  } else if (title == "bikes") {
    motorcycleContent.innerHTML = `<div class="scooter-card d-flex align-items-start">
    <img class="activa-img" src="images/Bikes/Activa-1.png" alt="">
    <div class="details-div d-flex flex-column justify-content-center align-items-center">
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
    </div>
</div>
<div class="scooter-card d-flex align-items-start">
<img class="activa-img" src="images/Bikes/Activa-1.png" alt="">
    <div class="details-div d-flex flex-column justify-content-center align-items-center">
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
    </div>
</div>
<div class="scooter-card d-flex align-items-start">
<img class="activa-img" src="images/Bikes/Activa-1.png" alt="">
    <div class="details-div d-flex flex-column justify-content-center align-items-center">
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
    </div>
</div>
<div class="scooter-card d-flex align-items-start">
<img class="activa-img" src="images/Bikes/Activa-1.png" alt="">
    <div class="details-div d-flex flex-column justify-content-center align-items-center">
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
        <div class="activa-details-icon">.</div>
    </div>
</div>`;
    document.getElementById("offers").classList.remove("active-title");
  }
};
