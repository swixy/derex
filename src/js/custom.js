document.addEventListener("DOMContentLoaded", e => {
    const acc = document.getElementsByClassName("offices__accordion");

    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");

            const panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
    }

    const years = document.getElementsByClassName("filter__item");
    for (let i = 0; i < years.length; i++) {
        years[i].addEventListener("click", function() { 
            Object.values(years).forEach(e => {
                e.classList.remove("active");
            });
            this.classList.add("active");
        });
    }


});