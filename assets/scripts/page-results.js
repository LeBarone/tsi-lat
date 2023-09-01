var longDescription = document.querySelector(".long-description");
        var trigger = document.querySelector(".longform-trigger");

        function closeLongDescription(event) {
            event.target.closest(".longform-item--subcontent").classList.remove("active");
        }
        function openLongDescription(event) {
            event.target.closest(".longform-item--subcontent").classList.add("active");
        }

        function submitEmailForm(event) {
            var formInput = document.querySelector(".form-input");
            var responseField = document.getElementById("email-form-response");
            if (!formInput.checkValidity()) {
                event.preventDefault();
                responseField.innerHTML = "Norādiet epasta adresi!";
                responseField.style.display = "block";
                responseField.classList.add("field-fail");
                responseField.classList.remove("hidden");
                responseField.classList.add("visible");
            } else {
                var form = document.getElementById("form-email-results");
                var formData = new FormData(form);
                var xhr = new XMLHttpRequest();

                xhr.open("POST", form.getAttribute("action"), true);
                xhr.responseType = "json";
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        responseField.style.display = "block";
                        responseField.classList.remove("hidden");
                        responseField.classList.add("visible");
                            if (xhr.status === 200) {
                                var jsonResponse = xhr.response;
                                var success = jsonResponse.success;
                                var message = jsonResponse.message;
                                if (success) {
                                    responseField.classList.remove("field-fail");
                                    responseField.classList.add("field-success");
                                    responseField.innerHTML = message;
                                } else {
                                    responseField.innerHTML = message;
                                    responseField.classList.remove("field-success");
                                    responseField.classList.add("field-fail");
                                }
                            } else {
                                responseField.innerHTML = "Radās kļūda!";
                                responseField.classList.remove("field-success");
                                responseField.classList.add("field-fail");
                            }
                    }
                };
                xhr.send(formData);
            }
        }