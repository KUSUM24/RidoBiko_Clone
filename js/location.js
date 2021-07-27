const setLocation = (e, status) => {
  document.getElementById("popular").classList.remove("active");
  let locationContent = document.getElementById("location-content");
  document.getElementById(status).classList.add("active");
  if (status == "popular") {
    locationContent.classList.remove("text-center");
    locationContent.innerHTML =
      "Bike rent in Rishikesh | Bike rent in Alwar | Bike rent in Dharamshala | Bike rent in Chandigarh | Bike rent in Nainital | Bike rent in Manali | Bike rent in Shimla | Bike rent in Ahmedabad | Bike rent in Jaisalmer | Bike rent in Mount Abu | Bike rent in Delhi | Bike rent in Kolkata | Bike rent in Srinagar | Bike rent in Bhopal | Bike rent in Kullu | Bike rent in Mahabalipuram | Bike rent in Siliguri | Bike rent in Gangtok | Bike rent in Udaipur | Bike rent in Gandhi Nagar | Bike rent in Dehradun | Bike rent in Agra | Bike rent in Amritsar | Bike rent in Mumbai | Bike rent in Pune | Bike rent in Goa | Bike rent in Gurgaon | Bike rent in Bhubaneswar | Bike rent in Roorkee | Bike rent in Indore | Bike rent in Haridwar | Bike rent in Pondicherry | Bike rent in Kolhapur | Bike rent in Chengalpattu | Bike rent in Jaipur |";
  } else if (status == "comingSoon") {
    locationContent.classList.remove("text-center");
    locationContent.innerHTML =
      "Bike rent in Mumbai | Bike rent in Pune | Bike rent in Banglore | Bike rent in Jabalput | Bike rent in Nagpur | Bike rent in Aurangabad | Bike rent in Solapur | Bike rent in Thane | Bike rent in Bhiwandi | Bike rent in Kolhapur | Bike rent in Panvel | Bike rent in Akola | Bike rent in Raipur | Bike rent in Bhubaneshwar | Bike rent in Cuttak | Bike rent in Warangal | Bike rent in Vishakapatnam | Bike rent in Vijaywada | Bike rent in Gulbarga | Bike rent in Mysore | Bike rent in Hubli | Bike rent in Agra | Bike rent in Lucknow | Bike rent in Varanasi | Bike rent in Mathura | Bike rent in Mangalore | Bike rent in Goa | Bike rent in Chennai | Bike rent in Trichy | Bike rent in Salem | Bike rent in Tirunelveli | Bike rent in Coimbatore | Bike rent in pondicherry | Bike rent in Ernakulam | Bike rent in Trivandrum | Bike rent in Calicut";
  } else if (status == "about") {
    locationContent.classList.remove("text-center");
    locationContent.innerHTML =
      "RidoBiko’s fate was written when the idea to rent bike penetrated Rajat’s mind. In the late 2015 Rajat started the concept of renting bikes making the life of many youngsters and bike trip enthusiasts in IIT Roorkee easier. Initial process was through a mobile application and the remaining link was connected manually. Noticing the chance to do good for the society and the potential the concept had, he decided to make it big. He was in search for a team of likeminded individuals with varying skill sets, which he found in IIT Roorkee itself. A group of 5 over enthusiastic and hyperactive individuals, this formed our team. We all tuned our mind to achieve one objective “creating a seamless platform for the consumers and vendors, which will provide a hassle free and effortless bike renting experience”. We understood the problems a consumer faced while renting bike and made sure that we solved everyone of them through RidoBIko. Booking a bike through RidoBiko is the easiest thing you would have ever done. Just signup to be part of our community of bike riding enthusiasts, select the bike you want and woof your ride is ready to mount. RidoBiko ensures transparency in every step and provides the highest level of service achievable. Join our community, enjoy the thrill of riding through the hills of India or enjoy the serenity of long drives with your partner.";
  } else {
    locationContent.classList.add("text-center");
    locationContent.innerHTML =
      "❝ To fulfill the dream of riders through safest motorcycle ride , round the clock , round the earth. ❞";
  }
};
