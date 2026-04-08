/**
 * Rapid Raider — menu, scroll animations, gallery, hero, booking modal, forms
 */

document.addEventListener('DOMContentLoaded', function () {
    const bookingOverlay = document.getElementById('bookingModalOverlay');
    const bookingClose = document.getElementById('bookingModalClose');
    const bookingForm = document.getElementById('bookingModalForm');
    const bookingMsg = document.getElementById('bookingFormMessage');
    const bookingSubmit = document.getElementById('bookingFormSubmit');

    function openBookingModal() {
        bookingOverlay?.classList.add('active');
        bookingOverlay?.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeBookingModal() {
        bookingOverlay?.classList.remove('active');
        bookingOverlay?.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.js-open-book-modal').forEach((el) => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            openBookingModal();
        });
    });

    bookingClose?.addEventListener('click', closeBookingModal);
    bookingOverlay?.addEventListener('click', (e) => {
        if (e.target === bookingOverlay) closeBookingModal();
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && bookingOverlay?.classList.contains('active')) closeBookingModal();
    });

    function submitFormAjax(form, msgEl, submitBtn, endpoint) {
        if (!form) return;
        const fd = new FormData(form);
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.dataset.originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';
        }
        if (msgEl) {
            msgEl.textContent = '';
            msgEl.className = 'booking-form-message';
        }
        fetch(endpoint || form.getAttribute('action') || 'send-enquiry.php', {
            method: 'POST',
            body: fd,
            headers: { Accept: 'application/json' },
        })
            .then((r) => r.json().then((j) => ({ ok: r.ok, json: j })))
            .then(({ ok, json }) => {
                if (msgEl) {
                    msgEl.textContent = json.message || (ok ? 'Sent.' : 'Something went wrong.');
                    msgEl.classList.add(ok && json.ok ? 'is-success' : 'is-error');
                }
                if (ok && json.ok) {
                    form.reset();
                    if (form.id === 'bookingModalForm') {
                        setTimeout(closeBookingModal, 1800);
                    }
                }
            })
            .catch(() => {
                if (msgEl) {
                    msgEl.textContent = 'Network error — try again or call us.';
                    msgEl.classList.add('is-error');
                }
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = submitBtn.dataset.originalText || submitBtn.innerHTML;
                }
            });
    }

    bookingForm?.addEventListener('submit', (e) => {
        e.preventDefault();
        submitFormAjax(bookingForm, bookingMsg, bookingSubmit, 'send-enquiry.php');
    });

    const contactForm = document.getElementById('contactPageForm');
    const contactMsg = document.getElementById('contactFormMessage');
    const contactSubmit = document.getElementById('contactFormSubmit');
    contactForm?.addEventListener('submit', (e) => {
        e.preventDefault();
        submitFormAjax(contactForm, contactMsg, contactSubmit, 'send-enquiry.php');
    });

    const bookPageForm = document.getElementById('bookPageForm');
    const bookPageMsg = document.getElementById('bookPageFormMessage');
    const bookPageSubmit = document.getElementById('bookPageSubmit');
    bookPageForm?.addEventListener('submit', (e) => {
        e.preventDefault();
        submitFormAjax(bookPageForm, bookPageMsg, bookPageSubmit, 'send-enquiry.php');
    });

    // ========== GALLERY MODAL ==========
    const galleryItems = document.querySelectorAll('.gallery-item img');
    const galleryModalOverlay = document.getElementById('galleryModalOverlay');
    const galleryModalImg = document.getElementById('galleryModalImg');
    const galleryModalClose = document.getElementById('galleryModalClose');
    const galleryModalPrev = document.getElementById('galleryModalPrev');
    const galleryModalNext = document.getElementById('galleryModalNext');
    const galleryModalCounter = document.getElementById('galleryModalCounter');
    let currentGalleryIndex = 0;
    const galleryImgSrcs = Array.from(galleryItems).map((img) => img.src);

    function openGalleryModal(index) {
        currentGalleryIndex = index;
        if (galleryModalImg) galleryModalImg.src = galleryImgSrcs[index];
        galleryModalOverlay?.classList.add('active');
        updateGalleryCounter();
        document.body.style.overflow = 'hidden';
    }

    function closeGalleryModal() {
        galleryModalOverlay?.classList.remove('active');
        document.body.style.overflow = '';
    }

    function showGalleryImg(index) {
        currentGalleryIndex = (index + galleryImgSrcs.length) % galleryImgSrcs.length;
        if (galleryModalImg) galleryModalImg.src = galleryImgSrcs[currentGalleryIndex];
        updateGalleryCounter();
    }

    function updateGalleryCounter() {
        if (galleryModalCounter) {
            galleryModalCounter.textContent = `${currentGalleryIndex + 1} / ${galleryImgSrcs.length}`;
        }
    }

    galleryItems.forEach((img, i) => {
        img.addEventListener('click', () => openGalleryModal(i));
    });
    galleryModalClose?.addEventListener('click', closeGalleryModal);
    galleryModalOverlay?.addEventListener('click', (e) => {
        if (e.target === galleryModalOverlay) closeGalleryModal();
    });
    galleryModalPrev?.addEventListener('click', (e) => {
        e.stopPropagation();
        showGalleryImg(currentGalleryIndex - 1);
    });
    galleryModalNext?.addEventListener('click', (e) => {
        e.stopPropagation();
        showGalleryImg(currentGalleryIndex + 1);
    });
    document.addEventListener('keydown', (e) => {
        if (!galleryModalOverlay?.classList.contains('active')) return;
        if (e.key === 'Escape') closeGalleryModal();
        if (e.key === 'ArrowLeft') showGalleryImg(currentGalleryIndex - 1);
        if (e.key === 'ArrowRight') showGalleryImg(currentGalleryIndex + 1);
    });

    // ========== HEADER ==========
    const header = document.getElementById('mainHeader');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    // ========== MOBILE DRAWER ==========
    const menuToggle = document.getElementById('menuToggle');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const drawerClose = document.getElementById('drawerClose');

    function openDrawer() {
        mobileDrawer?.classList.add('open');
        mobileOverlay?.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        mobileDrawer?.classList.remove('open');
        mobileOverlay?.classList.remove('active');
        document.body.style.overflow = '';
    }

    menuToggle?.addEventListener('click', openDrawer);
    drawerClose?.addEventListener('click', closeDrawer);
    mobileOverlay?.addEventListener('click', closeDrawer);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeDrawer();
    });

    // ========== SCROLL ANIMATIONS ==========
    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -70px 0px',
        threshold: 0.08,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                const statNum = entry.target.querySelector('.stat-number');
                if (statNum && statNum.dataset.count) {
                    animateCounter(statNum, parseInt(statNum.dataset.count, 10), 1500);
                    statNum.removeAttribute('data-count');
                }
            }
        });
    }, observerOptions);

    animatedElements.forEach((el) => observer.observe(el));

    function animateCounter(el, target, duration) {
        const startTime = performance.now();
        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(eased * target);
            el.textContent = String(current);
            if (progress < 1) requestAnimationFrame(update);
            else el.textContent = String(target);
        }
        requestAnimationFrame(update);
    }

    // ========== HERO SLIDER ==========
    const heroSlides = window.heroSlides || [];
    const heroBg = document.getElementById('heroBg');
    const heroBadge = document.getElementById('heroBadge');
    const heroTitle = document.getElementById('heroTitle');
    const heroDesc = document.getElementById('heroDesc');
    const heroPrimaryBtn = document.getElementById('heroPrimaryBtn');
    const heroDots = document.getElementById('heroDots');
    const heroPrev = document.getElementById('heroPrev');
    const heroNext = document.getElementById('heroNext');

    if (heroSlides.length > 1 && heroBg && heroBadge && heroTitle && heroDesc && heroPrimaryBtn && heroDots) {
        let activeSlide = 0;
        let sliderTimer;

        heroSlides.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = `hero-dot${index === 0 ? ' active' : ''}`;
            dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
            dot.addEventListener('click', () => setSlide(index, true));
            heroDots.appendChild(dot);
        });

        const dots = heroDots.querySelectorAll('.hero-dot');

        function setSlide(index, resetTimer = false) {
            activeSlide = (index + heroSlides.length) % heroSlides.length;
            const slide = heroSlides[activeSlide];
            heroBg.style.backgroundImage = `url('${slide.image}')`;
            heroBadge.textContent = slide.badge;
            heroTitle.innerHTML = slide.title;
            heroDesc.textContent = slide.desc;
            const btnText = heroPrimaryBtn.querySelector('span');
            if (btnText) btnText.textContent = slide.cta;
            dots.forEach((dot, i) => dot.classList.toggle('active', i === activeSlide));
            if (resetTimer) restartAutoplay();
        }

        function nextSlide() {
            setSlide(activeSlide + 1);
        }

        function restartAutoplay() {
            clearInterval(sliderTimer);
            sliderTimer = setInterval(nextSlide, 5500);
        }

        heroPrev?.addEventListener('click', () => setSlide(activeSlide - 1, true));
        heroNext?.addEventListener('click', () => setSlide(activeSlide + 1, true));
        restartAutoplay();
    }
});
