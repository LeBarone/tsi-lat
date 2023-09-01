const radios = document.querySelectorAll('input[type=radio][class="form-input"]');
const progressBar = document.querySelector("#progress-bar");
const progressAmount = document.querySelector(".progress-amount");

radios.forEach(radio => {
    radio.addEventListener('change', () => {

        if (!radio.closest(".survey__item").classList.contains("completed")) {
            radio.closest(".survey__item").classList.add("completed");
            progressBar.value = progressBar.value + 1;
            progressAmount.innerHTML = parseInt(progressAmount.innerHTML) + 1;

            if (document.getElementById('s' + (progressBar.value + 1))) {
                document.getElementById('s' + (progressBar.value + 1)).scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
            }

        }
    })
});

var stickySection = document.querySelector(".section--progress-bar");
var sticky = stickySection.offsetTop;
window.onscroll = function () {
    if (window.scrollY > sticky) {
        stickySection.classList.add("sticky");
    } else {
        stickySection.classList.remove("sticky");
    }
};

function copyRadioValues() {
    var sourceId = "form_survey";
    var sourceRadios = document.querySelectorAll('#' + sourceId + ' input[type="radio"]');
    var formData = new FormData(document.getElementById("form_back"));

    sourceRadios.forEach(function (sourceRadio) {
        if (sourceRadio.checked) {
            formData.append(sourceRadio.name, sourceRadio.value);
        }
    });
    var formBack = document.getElementById("form_back");
    formData.forEach(function (value, key) {
        var hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = key;
        hiddenInput.value = value;
        formBack.appendChild(hiddenInput);
    });

    return true;
}
