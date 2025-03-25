let navbar = document.querySelector('.navbar');
document.querySelector('#menu-bar').onclick=() =>{
    navbar.classList.toggle('active');
}



let search = document.querySelector('.search');
document.querySelector('#search').onclick=() =>{
    search.classList.toggle('active');
}


var swiper = new Swiper(".product-row", {
    spaceBetween: 30,
    loop:true,
    centeredSlides:true,
    autoplay:{
        delay:9500,
        disableOnInteraction:false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
var swiper = new Swiper(".blogs-row", {
    spaceBetween: 30,
    loop:true,
    centeredSlides:true,
    autoplay:{
        delay:9500,
        disableOnInteraction:false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation:{
        nextE1 :".swiper-button-next",
        prevE1 :".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
  });

  var swiper = new Swiper(".review-row", {
    spaceBetween: 30,
    loop:true,
    centeredSlides:true,
    autoplay:{
        delay:9500,
        disableOnInteraction:false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  function openForm() {
    document.getElementById("popupForm").style.display = "block";
}

// document.getElementById('contactForm').addEventListener('submit', function(e) {
//   e.preventDefault(); // Prevent the default form submission

//   var name = document.getElementById('name').value;
//   var email = document.getElementById('email').value;
//   var message = document.getElementById('message').value;

//   if (!name || !email || !message) {
//       document.getElementById('responseMessage').innerText = 'Please fill in all required fields.';
//       document.getElementById('responseMessage').style.color = 'red';
//       return;
//   }

//   // Form is valid, now submit via AJAX
//   var formData = new FormData(this);

//   fetch('submit.php', {
//       method: 'POST',
//       body: formData
//   })
//   .then(response => response.text())
//   .then(data => {
//       document.getElementById('responseMessage').innerText = data;
//       document.getElementById('responseMessage').style.color = 'green';
//       document.getElementById('contactForm').reset(); // Reset the form
//   })
//   .catch(error => {
//       document.getElementById('responseMessage').innerText = 'An error occurred. Please try again.';
      // document.getElementById('responseMessage').style.color = 'red';
  // });
// });
