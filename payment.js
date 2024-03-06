const form = document.getElementById('paymentForm');
        const amountInput = document.getElementById('amount');
        const phoneInput = document.getElementById('phone');
        const nameInput = document.getElementById('name');
    
        // Add event listener to form submission
        form.addEventListener('submit', function(event) {
            // Prevent default form submission
            event.preventDefault();
    
            // Call validation functions and check if all are valid
            const isAmountValid = validateAmount();
            const isPhoneValid = validatePhone();
            const isNameValid = validateName();
    
            // If all validations pass, submit the form
            if (isAmountValid && isPhoneValid && isNameValid) {
                form.submit();
            }
        });
    
        // Validation functions
        function validateAmount() {
            const amountValue = amountInput.value.trim();
            const amountError = document.getElementById('amountError');
    
            if (!(/^\d+$/.test(amountValue))) {
                amountError.textContent = 'Amount should be a number';
                return false;
            }
    
            if (parseInt(amountValue) >= 100000) {
                amountError.textContent = 'Amount should be less than 100,000';
                return false;
            }
    
            amountError.textContent = ''; 
            return true;
        }
    
        function validatePhone() {
            const phoneValue = phoneInput.value.trim();
            const phoneError = document.getElementById('phoneError');
    
            if (!(/^\d{10}$/.test(phoneValue))) {
                phoneError.textContent = 'Phone number should be 10 digits';
                return false;
            }
    
            phoneError.textContent = ''; 
            return true;
        }
    
        function validateName() {
            const nameValue = nameInput.value.trim();
            const nameError = document.getElementById('nameError');
    
            if (!(/^[a-zA-Z\s]+$/.test(nameValue))) {
                nameError.textContent = 'Name should only contain alphabets and spaces';
                return false;
            }
    
            nameError.textContent = ''; 
            return true;
        }