export let renderFaqs = () => {

    let faqs = document.querySelectorAll(".faq");

    document.addEventListener("products", (event => {

        renderTabs();

    }), { once: true });

    faqs.forEach(faq => {

        faq.addEventListener("click", () => {


            if (faq.classList.contains("active")) {
                faq.classList.remove("active");
            } else {
                faqs.forEach(activeFaqs => {
                    activeFaqs.classList.remove("active");
                    faq.classList.add("active");
                });
            }
        });
    });
}