$('.owl-carousel').owlCarousel({
  stagePadding: 0,
  loop: true,
  margin: 20,
  autoplay: true,
  autoplayHoverPause: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      nav: false
    },
    600: {
      items: 2,
      nav: false
    },
    1000: {
      items: 3,
      nav: true,
      loop: false
    }
  }

});

/*jalalimoment-start */
if (document.querySelector('.reg-date-user')) {
  let listDate = document.querySelectorAll('.reg-date-user');
  listDate.forEach(el => {
    el.innerText = moment(el.innerText, 'YYYY/MM/DD').locale('fa').format('YYYY/MM/DD');
  })
}
/*jalalimoment-end */

/*counting numbers in fact section-start*/
let counts1 = setInterval(updated1);
let upto1 = 0;
function updated1() {
  let count1 = document.getElementById("students");
  count1.innerHTML = ++upto1;
  if (upto1 === 94) {
    clearInterval(counts1);
  }
}
let counts2 = setInterval(updated2);
let upto2 = 0;
function updated2() {
  let count2 = document.getElementById("teachers");
  count2.innerHTML = ++upto2;
  if (upto2 === 126) {
    clearInterval(counts2);
  }
}
let counts3 = setInterval(updated3);
let upto3 = 0;
function updated3() {
  let count3 = document.getElementById("newStudents");
  count3.innerHTML = ++upto3;
  if (upto3 === 234) {
    clearInterval(counts3);
  }
}
let counts4 = setInterval(updated4);
let upto4 = 0;
function updated4() {
  let count4 = document.getElementById("awards");
  count4.innerHTML = ++upto4;
  if (upto4 === 32) {
    clearInterval(counts4);
  }
}
/*counting numbers in fact section-end*/

/*  Message form validation-start */
function validation() {
  var isSend;
  let userName = document.querySelector('#userName').value;
  let Email = document.querySelector('#Email').value;
  let subject = document.querySelector('#subject').value;
  let comment = document.querySelector('#comment').value;
  const reUser = /^[a-z0-9_-]{3,}$/;
  const reEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

  if (!userName) {
    document.querySelector('#userName').classList.add('is-invalid');
    isSend = false
  } else {
    document.querySelector('#userName').classList.remove('is-invalid');
    isSend = true;
  }
  if (reUser.test(userName)) {
    document.getElementById('userError').innerHTML = "";
  } else {
    document.getElementById('userError').innerHTML = "حداقل 3 کاراکتر";
    isSend = false;
  }
  if (!Email) {
    document.querySelector('#Email').classList.add('is-invalid');
    isSend = false
  } else {
    document.querySelector('#Email').classList.remove('is-invalid');
  }
  if (reEmail.test(Email)) {
    document.getElementById('emailError').innerHTML = "";
  } else {
    document.getElementById('emailError').innerHTML = "ایمیل نادرست است";
    isSend = false;
  }
  if (!subject) {
    document.querySelector('#subject').classList.add('is-invalid');
    isSend = false
  } else {
    document.querySelector('#subject').classList.remove('is-invalid');
  }
  if (!comment) {
    document.querySelector('#comment').classList.add('is-invalid');
    isSend = false
  } else {
    document.querySelector('#comment').classList.remove('is-invalid');
  }
  if (isSend) {
    document.querySelector('#msg-btn').classList.remove('disabled');
  } else {
    document.querySelector('#msg-btn').classList.add('disabled', true);
  }
  return isSend;
};
/*  Message form validation-end */


/*  register form validation-start */
function validateForm() {
  var isSendReg;
  let userName = document.querySelector('#usernameReg').value;
  let email = document.querySelector('#emailReg').value;
  let phoneNumber = document.querySelector('#phoneNumberReg').value;
  let password = document.querySelector('#passwordReg').value;
  let profile = document.querySelector('#profileReg').files;
  const reUser = /^[a-z0-9_-]{3,}$/;
  const reEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  const rePhoneNumber = /((0?9)|(\+?989))\d{2}\W?\d{3}\W?\d{4}/g;
  const rePass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6}$/

  if (!userName) {
    document.querySelector('#usernameReg').classList.add('is-invalid');
    isSendReg = false
  } else {
    document.querySelector('#usernameReg').classList.remove('is-invalid');
    isSendReg = true;
  }
  if (reUser.test(userName)) {
    document.getElementById('userErrorReg').innerHTML = "";
  } else {
    document.getElementById('userErrorReg').innerHTML = "حداقل 3 کاراکتر";
    isSendReg = false;
  }
  if (!email) {
    document.querySelector('#emailReg').classList.add('is-invalid');
    isSendReg = false
  } else {
    document.querySelector('#emailReg').classList.remove('is-invalid');
  }
  if (reEmail.test(email)) {
    document.getElementById('emailErrorReg').innerHTML = "";
  } else {
    document.getElementById('emailErrorReg').innerHTML = "ایمیل نادرست است.";
    isSendReg = false;
  }
  if (!phoneNumber) {
    document.querySelector('#phoneNumberReg').classList.add('is-invalid');
    isSendReg = false
  } else {
    document.querySelector('#phoneNumberReg').classList.remove('is-invalid');
  }
  if (rePhoneNumber.test(phoneNumber)) {
    document.getElementById('phoneErrorReg').innerHTML = "";
  } else {
    document.getElementById('phoneErrorReg').innerHTML = "شماره موبایل صحیح را وارد کنید.";
    isSendReg = false;
  }
  if (!password) {
    document.querySelector('#passwordReg').classList.add('is-invalid');
    isSendReg = false
  } else {
    document.querySelector('#passwordReg').classList.remove('is-invalid');
  }
  if (rePass.test(password)) {
    document.getElementById('passErrorReg').innerHTML = "";
  } else {
    document.getElementById('passErrorReg').innerHTML = "پسورد باید 6 کاراکتر داشته باشد و شامل یک حرف بزرگ و کوچک، عدد و علامتهای خاص مانند $،!،@،% و & باشد.";
    isSendReg = false;
  }
  if (profile.length == 0) {
    document.querySelector('#profileReg').classList.add('is-invalid');
    isSendReg = false
  } else {
    document.querySelector('#profileReg').classList.remove('is-invalid');
  }
  if (isSendReg) {
    document.querySelector('#btn-Reg').classList.remove('disabled');
  } else {
    document.querySelector('#btn-Reg').classList.add('disabled', true);
  }
  return isSendReg;
}
/*  register form validation-end */

/* user profile remove-start */
function removeUser(idUser, ev) {
  if (confirm('از حذف کاربر مطمئن هستید؟')) {
    $.ajax({
      url: "api/delete-user-api.php",
      type: "POST",
      data: { id: idUser },
      success: function (res) {
        let response = JSON.parse(res);
        if (response.status == 200) {
          ev.target.parentElement.parentElement.remove();
        }


      }
    })
  }
}
/* user profile remove-end */


/* user profile edit-start */
function editUser(idUser) {
  let dataFile = new FormData();
  dataFile.append('id', idUser);
  dataFile.append('username', document.querySelector('#usernameEdit').value);
  dataFile.append('email', document.querySelector('#emailEdit').value);
  dataFile.append('phoneNumber', document.querySelector('#phoneNumberEdit').value);
  dataFile.append('image_profile', document.querySelector('#profileEdit').files[0] ? document.querySelector('#profileEdit').files[0] : '');
  $.ajax({
    url: "api/edit-user-api.php",
    type: "POST",
    data: dataFile,
    processData: false,
    contentType: false,
    success: function (res) {
      let response = JSON.parse(res);
      alert(response.msg);
      if (response.status == 200) {
        window.location.href = 'profile.php';
      }
    }
  })
}
/* user profile edit-end */

/*  user edit form validation-start */
function validationUserEdit() {
  let userName = document.querySelector('#usernameEdit').value;
  let email = document.querySelector('#emailEdit').value;
  let phoneNumber = document.querySelector('#phoneNumberEdit').value;
  var isSendEdit;
  const reUser = /^[a-z0-9_-]{3,}$/;
  const reEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  const rePhoneNumber = /((0?9)|(\+?989))\d{2}\W?\d{3}\W?\d{4}/g;

  if (!userName) {
    document.querySelector('#usernameEdit').classList.add('is-invalid');
    isSendEdit = false
  } else {
    document.querySelector('#usernameEdit').classList.remove('is-invalid');
    isSendEdit = true;
  }
  if (reUser.test(userName)) {
    document.getElementById('userErrorEdit').innerHTML = "";
  } else {
    document.getElementById('userErrorEdit').innerHTML = "حداقل 3 کاراکتر";
    isSendEdit = false;
  }
  if (!email) {
    document.querySelector('#emailEdit').classList.add('is-invalid');
    isSendEdit = false
  } else {
    document.querySelector('#emailEdit').classList.remove('is-invalid');
  }
  if (reEmail.test(email)) {
    document.getElementById('emailErrorEdit').innerHTML = "";
  } else {
    document.getElementById('emailErrorEdit').innerHTML = "ایمیل نادرست است.";
    isSendEdit = false;
  }
  if (!phoneNumber) {
    document.querySelector('#phoneNumberEdit').classList.add('is-invalid');
    isSendEdit = false
  } else {
    document.querySelector('#phoneNumberEdit').classList.remove('is-invalid');
  }
  if (rePhoneNumber.test(phoneNumber)) {
    document.getElementById('phoneErrorEdit').innerHTML = "";
  } else {
    document.getElementById('phoneErrorEdit').innerHTML = "شماره موبایل صحیح را وارد کنید.";
    isSendEdit = false;
  }
  if (isSendEdit) {
    document.querySelector('#btn-edit-user').classList.remove('disabled');
  } else {
    document.querySelector('#btn-edit-user').classList.add('disabled', true);
  }
}
/*  user edit form validation-end */
/*  preview image in edit user-start */
function previewImage() {
  let img = document.querySelector('#profileEdit').files[0];
  if (img) {
    document.querySelector('#previewImg').src = URL.createObjectURL(img);
  }
}
/*  preview image in edit user-end*/
/*  get allPosts-start */

function allPost() {
  document.querySelector('#post-row').innerHTML = "";
  for (let i = 0; i < 20; i++) {
    document.querySelector('#post-row').innerHTML += `
    <div class="col-md-6 col-lg-4 my-3">
      <div class="card h-100">
        <img src="" class="card-img-top w-100" alt="...">
          <div class="card-body">
            <h5 class="card-title placeholder-glow">
              <span class="placeholder col-6"></span>
            </h5>
            <p class="card-text placeholder-glow">
              <span class="placeholder col-7"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-6"></span>
              <span class="placeholder col-8"></span>
            </p>
          </div>
      </div>
    </div>`
  }
  
  $.ajax({
    url: "api/get-post-api.php",
    type: "POST",
    success: function (res) {
      let response = JSON.parse(res);
      document.querySelector('#post-row').innerHTML = "";
      response.forEach(item => {
        document.querySelector('#post-row').innerHTML += `
          <div class="col-md-6 col-lg-4 my-3">
            <a href="SingleMeeting.php?id=${item.id}" class="text-decoration-none" target="_blank">
            <div class="card h-100">
              <img src="${item.image}" class="card-img-top object-fit-contain img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.body}</p>
              </div>
            </div>
            </a>
          </div>
          `
      });
    }
  })
}
/*  get allPosts-end */

/*  get importantPosts-start */
function importantPost() {
  document.querySelector('#post-row').innerHTML = "";
  for (let i = 0; i < 12; i++) {
    document.querySelector('#post-row').innerHTML += `
    <div class="col-md-6 col-lg-4 my-3">
      <div class="card h-100">
        <img src="" class="card-img-top w-100" alt="...">
          <div class="card-body">
            <h5 class="card-title placeholder-glow">
              <span class="placeholder col-6"></span>
            </h5>
            <p class="card-text placeholder-glow">
              <span class="placeholder col-7"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-6"></span>
              <span class="placeholder col-8"></span>
            </p>
          </div>
      </div>
    </div>`
  }
  $.ajax({
    url: "api/get-importantPost-api.php",
    type: "POST",
    success: function (res) {
      let response = JSON.parse(res);
      document.querySelector('#post-row').innerHTML = "";
      response.forEach(item => {
        document.querySelector('#post-row').innerHTML += `
          <div class="col-md-6 col-lg-4 my-3">
            <a href="SingleMeeting.php?id=${item.id}" class="text-decoration-none" target="_blank">
            <div class="card h-100">
              <img src="${item.image}" class="card-img-top object-fit-contain img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.body}</p>
              </div>
            </div>
            </a>
          </div>
          `
      });
    }
  })
}
/*  get importantPosts-end */

/*  get attractivePosts-start */
function attractivePost() {
  document.querySelector('#post-row').innerHTML = "";
  for (let i = 0; i < 8; i++) {
    document.querySelector('#post-row').innerHTML += `
    <div class="col-md-6 col-lg-4 my-3">
      <div class="card h-100">
        <img src="" class="card-img-top w-100" alt="...">
          <div class="card-body">
            <h5 class="card-title placeholder-glow">
              <span class="placeholder col-6"></span>
            </h5>
            <p class="card-text placeholder-glow">
              <span class="placeholder col-7"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-4"></span>
              <span class="placeholder col-6"></span>
              <span class="placeholder col-8"></span>
            </p>
          </div>
      </div>
    </div>`
  }
  $.ajax({
    url: "api/get-attractivePost-api.php",
    type: "POST",
    success: function (res) {
      let response = JSON.parse(res);
      document.querySelector('#post-row').innerHTML = "";
      response.forEach(item => {
        document.querySelector('#post-row').innerHTML += `
          <div class="col-md-6 col-lg-4 my-3">
            <a href="SingleMeeting.php?id=${item.id}" class="text-decoration-none" target="_blank">
            <div class="card h-100">
              <img src="${item.image}" class="card-img-top object-fit-contain img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.body}</p>
              </div>
            </div>
            </a>
          </div>
          `
      });
    }
  })
}
/*  get attractivePosts-end */








