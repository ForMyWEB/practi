document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");

    form.addEventListener("submit", (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add("was-validated");
    }, false);
  });



  function validateForm(event) {
    event.preventDefault(); 

    let email = document.getElementById('exampleInputEmail1').value;
    let password = document.getElementById('exampleInputPassword1').value;
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email === "") {
        alert("Будь ласка, введіть електронну пошту.");
        return false;
    }

    if (!email.match(emailPattern)) {
        alert("Будь ласка, введіть дійсну електронну пошту.");
        return false;
    }

    if (password === "") {
        alert("Будь ласка, введіть пароль.");
        return false;
    }

    event.target.submit();
}

document.addEventListener('DOMContentLoaded', function() {
  var cards = document.querySelectorAll('.card');

  cards.forEach(function(card) {
      var title = card.querySelector('h3');

      title.addEventListener('click', function() {
          var item = card.querySelector('.item');

          if (item.style.display === 'none' || item.style.display === '') {
              item.style.display = 'block';
          } else {
              item.style.display = 'none';
          }
      });
  });
});


document.getElementById('donation-form').addEventListener('submit', function(event) {
    const donationAmount = document.querySelector('input[name="DonationForm[donation_amount]"]:checked');
    const customAmountField = document.querySelector('input[name="DonationForm[custom_amount]"]');
    const customAmount = customAmountField.value.trim();
    const name = document.querySelector('input[name="DonationForm[donator_name]"]').value.trim();
    const email = document.querySelector('input[name="DonationForm[donator_email]"]').value.trim();
    const privacy = document.querySelector('input[name="DonationForm[privacy]"]:checked');

    let valid = true;

    if (!donationAmount && customAmount === '') {
        alert('Будь ласка, виберіть суму пожертви або введіть іншу суму.');
        valid = false;
    }

    if (!name || !email || !privacy) {
        alert('Будь ласка, заповніть всі обов’язкові поля.');
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});

const radioButtons = document.querySelectorAll('.dn-radio');
radioButtons.forEach(radio => {
    radio.addEventListener('change', function() {
        radioButtons.forEach(rb => rb.nextElementSibling.style.borderColor = 'darkgray');
        this.nextElementSibling.style.borderColor = 'yellow';
        
        document.querySelector('input[name="DonationForm[custom_amount]"]').value = '';
    });
});




