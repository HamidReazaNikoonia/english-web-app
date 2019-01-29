! function() {
    const e = document.documentElement;
    if (e.classList.remove("no-js"), e.classList.add("js"), document.body.classList.contains("has-animations")) {
        const e = window.sr = ScrollReveal();
        e.reveal(".hero-title, .hero-paragraph, .hero-cta", {
            duration: 600,
            distance: "20px",
            easing: "cubic-bezier(0.5, -0.01, 0, 1.005)",
            origin: "top",
            interval: 150
        }), e.reveal(".hero-illustration", {
            duration: 600,
            distance: "40px",
            easing: "cubic-bezier(0.5, -0.01, 0, 1.005)",
            origin: "bottom"
        }), e.reveal(".feature-extended:nth-child(odd) .feature-extended-image", {
            duration: 600,
            distance: "40px",
            easing: "cubic-bezier(0.5, -0.01, 0, 1.005)",
            origin: "left",
            viewFactor: .5
        }), e.reveal(".feature-extended:nth-child(even) .feature-extended-image", {
            duration: 600,
            distance: "40px",
            easing: "cubic-bezier(0.5, -0.01, 0, 1.005)",
            interval: 100,
            origin: "right",
            viewFactor: .5
        }), document.querySelectorAll(".pricing-table").forEach(i => {
            const t = [].slice.call(i.querySelectorAll(".pricing-table-header")),
                a = [].slice.call(i.querySelectorAll(".pricing-table-features li")),
                r = [].slice.call(i.querySelectorAll(".pricing-table-cta")),
                c = t.concat(a).concat(r);
            e.reveal(c, {
                duration: 600,
                distance: "20px",
                easing: "cubic-bezier(0.5, -0.01, 0, 1.005)",
                interval: 100,
                origin: "top",
                viewFactor: .5
            })
        })
    }
}();