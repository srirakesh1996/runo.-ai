<!-- Modal -->
<div class="modal fade" id="requestDemoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"> <!-- ✅ Required for proper behavior -->
            <div class="modal-body">
                <div class="custom-modal-box">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Get in touch now!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="demoForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                            <small class="text-danger d-none" id="nameError">Name is required.</small>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                            <small class="text-danger d-none" id="emailError">Valid email is required.</small>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
                            <small class="text-danger d-none" id="phoneError">Phone number is required and must be numeric.</small>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" id="agents">
                                <option value="" disabled selected style="color: #858585;">Number of Calling Agents</option>
                                <option value="1-5">1–5</option>
                                <option value="6-10">6–10</option>
                                <option value="11+">11+</option>
                            </select>
                            <small class="text-danger d-none" id="agentsError">Please select an option.</small>
                        </div>
                        <p style="font-size: 12px;">
                            By submitting this form, I agree to the <a href="#">privacy policy</a>.
                        </p>
                        <button type="submit" class="btn-default btn-highlighted" style="width: 100%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Restrict phone field to accept only numbers
    document.getElementById('phone').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
    });

    document.getElementById('demoForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let isValid = true;

        // Name validation
        const name = document.getElementById('name');
        const nameError = document.getElementById('nameError');
        if (!name.value.trim()) {
            nameError.classList.remove('d-none');
            isValid = false;
        } else {
            nameError.classList.add('d-none');
        }

        // Email validation
        const email = document.getElementById('email');
        const emailError = document.getElementById('emailError');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.value.trim() || !emailRegex.test(email.value)) {
            emailError.classList.remove('d-none');
            isValid = false;
        } else {
            emailError.classList.add('d-none');
        }

        // Phone validation
        const phone = document.getElementById('phone');
        const phoneError = document.getElementById('phoneError');
        const phoneRegex = /^[0-9]+$/;
        if (!phone.value.trim() || !phoneRegex.test(phone.value)) {
            phoneError.classList.remove('d-none');
            isValid = false;
        } else {
            phoneError.classList.add('d-none');
        }

        // Agents validation
        const agents = document.getElementById('agents');
        const agentsError = document.getElementById('agentsError');
        if (!agents.value) {
            agentsError.classList.remove('d-none');
            isValid = false;
        } else {
            agentsError.classList.add('d-none');
        }

        // If all fields are valid, submit the form via AJAX
        if (isValid) {
            const formData = new FormData();
            formData.append('name', name.value.trim());
            formData.append('email', email.value.trim());
            formData.append('phone', phone.value.trim());
            formData.append('agents', agents.value);

            fetch('submit-form.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Form submitted successfully!');
                        document.getElementById('demoForm').reset();
                    } else {
                        alert('An error occurred: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while submitting the form.');
                });
        }
    });
</script>